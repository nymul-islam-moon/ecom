<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreVendorRequest;
use App\Http\Requests\Api\Admin\UpdateVendorRequest;
use App\Http\Resources\Api\Admin\VendorResource;
use App\Interfaces\VendorRepositoryInterface;
use App\Jobs\ProcessVendorUpload;
use App\Jobs\SendConfirmationMail;
use App\Mail\VendorConfirmationMail;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    private $vendorRepository;

    public function __construct(VendorRepositoryInterface $vendorRepositoryInterface)
    {
        $this->vendorRepository = $vendorRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $vendors = $this->vendorRepository->get($request);

        return ApiResponseClass::sendResponse(VendorResource::collection($vendors), 'Vendor fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVendorRequest $request)
    {
        $formData = $request->validated();

        DB::beginTransaction();

        try {
            // Store logo in 'public' disk → Accessible via browser
            if ($request->hasFile('logo')) {
                $formData['logo'] = $request->file('logo')->store('uploads/vendors/logos', 'public');
            }

            // Store logo in 'public' disk → Accessible via browser
            if ($request->hasFile('cover_image')) {
                $formData['cover_image'] = $request->file('cover_image')->store('uploads/vendors/coverImages', 'public');
            }

            // Store business license in 'local' disk → Not accessible via browser
            if ($request->hasFile('business_license_document')) {
                $formData['business_license_document'] = $request->file('business_license_document')->store('uploads/vendors/licenses', 'local');
            }

            $vendor = $this->vendorRepository->store($formData);

            DB::commit();

            dispatch(new SendConfirmationMail($vendor, VendorConfirmationMail::class));

            return ApiResponseClass::sendResponse(new VendorResource($vendor), 'Vendor created successfully', 201);
        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponseClass::rollback($e, 'Failed to create vendor!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        DB::beginTransaction();
        try {
            $vendor_instance = $this->vendorRepository->findById($id);
            DB::commit();

            return ApiResponseClass::sendResponse(new VendorResource($vendor_instance), 'Vendor fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Vendor not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendorRequest $request, string $id)
    {
        $formData = $request->validated();

        DB::beginTransaction();

        try {
            // $vendor_instance = Vendor::findOrFail($id);
            $vendor_instance = $this->vendorRepository->findById($id);

            // Update logo if a new one is uploaded
            if ($request->hasFile('logo')) {
                // Optional: Delete old file
                if ($vendor_instance->logo) {
                    Storage::disk('public')->delete($vendor_instance->logo);
                }

                $formData['logo'] = $request->file('logo')->store('uploads/vendors/logos', 'public');
            }

            // Update cover image if a new one is uploaded
            if ($request->hasFile('cover_image')) {
                if ($vendor_instance->cover_image) {
                    Storage::disk('public')->delete($vendor_instance->cover_image);
                }

                $formData['cover_image'] = $request->file('cover_image')->store('uploads/vendors/coverImages', 'public');
            }

            // Update license document (private)
            if ($request->hasFile('business_license_document')) {
                if ($vendor_instance->business_license_document) {
                    Storage::disk('local')->delete($vendor_instance->business_license_document);
                }

                $formData['business_license_document'] = $request->file('business_license_document')->store('uploads/vendors/licenses', 'local');
            }

            // Update the vendor
            $vendor = $this->vendorRepository->update($formData, $vendor_instance);

            DB::commit();

            return ApiResponseClass::sendResponse(new VendorResource($vendor), 'Vendor updated successfully', 200);
        } catch (\Exception $e) {
            DB::rollback();
            return ApiResponseClass::rollback($e, 'Failed to update vendor!');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Upload CSV or EXCEL file to bulk store vendors
     */
    public function uploadVendorCSV(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');

        if (!in_array($file->getClientOriginalExtension(), ['csv'])) {
            return response()->json(['error' => 'Invalid file type. Only CSV files are allowed.'], 400);
        }

        $filePath = $file->getPathname();
        $csvData = array_map('str_getcsv', file($filePath));

        if (empty($csvData)) {
            return response()->json(['error' => 'CSV file is empty.'], 400);
        }

        $expectedHeader = [
            'name',
            'email',
            'phone',
            'company_name',
            'address',
            'status',
            'logo',
            'cover_image',
            'description',
            'commission',
            'business_license_number',
            'business_license_document',
        ];

        $header = array_map('trim', $csvData[0]);

        if ($header !== $expectedHeader) {
            return response()->json([
                'error' => 'Invalid CSV header. Expected: ' . implode(', ', $expectedHeader) . ' | Found: ' . implode(', ', $header),
            ], 400);
        }

        // Save the file to storage (private)
        $fileName = 'vendor_upload_' . uniqid() . '.csv';
        $file->storeAs('/uploads/vendors', $fileName);

        // Save the filename in cache or DB (for now, we’ll use session or job param)
        ProcessVendorUpload::dispatch($fileName);

        return response()->json(['message' => 'CSV uploaded and queued for processing.'], 200);
    }
}
