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
use Illuminate\Support\Facades\Log;

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
        DB::beginTransaction();
        try {
            $formData = $request->validated();
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
        // Validate if a file is uploaded
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');

        // Validate file type (only CSV allowed)
        if (!in_array($file->getClientOriginalExtension(), ['csv'])) {
            return response()->json(['error' => 'Invalid file type. Only CSV files are allowed.'], 400);
        }

        // Read file content for validation
        $filePath = $file->getPathname();
        $csvData = array_map('str_getcsv', file($filePath));

        if (empty($csvData)) {
            return response()->json(['error' => 'CSV file is empty.'], 400);
        }

        // Expected headers (ignoring id, created_at, updated_at)
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
            'business_license_document'
        ];

        // Extract first row as the actual header
        $header = array_map('trim', $csvData[0]);

        // Ensure headers match
        if (array_diff($expectedHeader, $header)) {
            return response()->json([
                'error' => 'Invalid CSV header. Expected: ' . implode(', ', $expectedHeader) .
                    ' | Found: ' . implode(', ', $header)
            ], 400);
        }

        // Move the validated file to a temporary location
        $storagePath = storage_path('app/tmp/');
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0777, true);
        }

        $storedFilePath = $storagePath . uniqid('vendor_upload_') . '.csv';
        $file->move($storagePath, basename($storedFilePath));

        Log::info('Stored valid CSV file at: ' . $storedFilePath);

        // Dispatch the job to process the file
        ProcessVendorUpload::dispatch($storedFilePath);

        return response()->json(['message' => 'Vendor file uploaded successfully and is being processed.'], 200);
    }
}
