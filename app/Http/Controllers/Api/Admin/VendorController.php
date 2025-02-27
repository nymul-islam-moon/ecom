<?php

namespace App\Http\Controllers\Api\Admin;

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
        if (! $request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');
        $filePath = storage_path('app/tmp/' . uniqid('vendor_upload_') . '.csv');

        // Move file to storage before dispatching job
        $file->move(storage_path('app/tmp/'), basename($filePath));

        Log::info('Stored CSV file at: ' . $filePath);

        // Dispatch job
        ProcessVendorUpload::dispatch($filePath);

        return ApiResponseClass::sendResponse(null, 'Vendor Uploaded Successfully', 200);
        // return response()->json(['message' => 'Upload started'], 200);
    }
}
