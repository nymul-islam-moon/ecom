<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreVendorRequest;
use App\Http\Requests\Api\Admin\UpdateVendorRequest;
use App\Http\Resources\Api\Admin\VendorResource;
use App\Interfaces\VendorRepositoryInterface;
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
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $vendor = $this->vendorRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new VendorResource($vendor), 'Category created successfully', 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create vendor!');
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
}
