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
        // dd($request->all());
        DB::beginTransaction();
        try {
            if ($request->hasFile('logo')) {
                $formData['logo'] = $request->file('logo')->store('uploads/vendors', 'public');
            }

            if ($request->hasFile('business_license_document')) {
                $formData['business_license_document'] = $request->file('business_license_document')->store('uploads/vendors', 'local'); // store in storage/app
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
    public function show($vendor)
    {
        DB::beginTransaction();
        try {
            $vendor_instance = Vendor::findOrFail($vendor);
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
        //
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
        if (! $request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');

        if (! in_array($file->getClientOriginalExtension(), ['csv'])) {
            return response()->json(['error' => 'Invalid file type. Only CSV files are allowed.'], 400);
        }

        $filePath = $file->getPathname();
        $csvData = array_map('str_getcsv', file($filePath));

        if (empty($csvData)) {
            return response()->json(['error' => 'CSV file is empty.'], 400);
        }

        // Expected headers
        $expectedHeader = [
            'name',
            'email',
            'phone',
            'password',
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

        // Extract headers
        $header = array_map('trim', $csvData[0]);

        if ($header !== $expectedHeader) {
            return response()->json([
                'error' => 'Invalid CSV header. Expected: '.implode(', ', $expectedHeader).' | Found: '.implode(', ', $header),
            ], 400);
        }

        // **Validate rows before processing**
        $validRows = [];
        foreach (array_slice($csvData, 1) as $row) {
            if (count($row) !== count($header)) {
                continue;
            } // Ignore malformed rows

            $vendorData = array_combine($header, array_map('trim', $row));

            if (empty($vendorData['name']) || empty($vendorData['phone']) || empty($vendorData['password'])) {
                continue; // Skip rows with missing required fields
            }

            if (Vendor::where('email', $vendorData['email'])->exists() || Vendor::where('phone', $vendorData['phone'])->exists()) {
                continue; // Skip duplicates
            }

            $vendorData['password'] = bcrypt($vendorData['password']);
            $validRows[] = $vendorData;
        }

        if (empty($validRows)) {
            return response()->json(['error' => 'No valid vendor records found.'], 400);
        }

        // Store valid data as JSON to process in the job
        $tempFilePath = storage_path('app/tmp/vendor_data_'.uniqid().'.json');
        file_put_contents($tempFilePath, json_encode($validRows));

        // Dispatch the job with valid data
        ProcessVendorUpload::dispatch($tempFilePath);

        return response()->json(['message' => 'Vendor file uploaded successfully and is being processed.'], 200);
    }
}
