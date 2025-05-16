<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreBrandRequest;
use App\Http\Requests\Api\Admin\UpdateBrandRequest;
use App\Http\Resources\Admin\BrandResource;
use App\Interfaces\Admin\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function __construct(protected BrandRepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $brands = $this->brandRepository->get($request);

        return ApiResponseClass::sendResponse(BrandResource::collection($brands), 'Brands fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $formData = $request->validated();
        DB::beginTransaction();

        try {
            if ($request->hasFile('logo')) {
                $formData['logo'] = $request->file('logo')->store('brands', 'public');
            }

            $brand = $this->brandRepository->store($formData);

            DB::commit();

            return ApiResponseClass::sendResponse(new BrandResource($brand), 'Brand created successfully');
        } catch (\Exception $e) {
            DB::rollback();

            return ApiResponseClass::rollback($e, 'Failed to create brand!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($brand)
    {
        try {
            $brand_instance = $this->brandRepository->findById($brand);

            return ApiResponseClass::sendResponse(new BrandResource($brand_instance), 'Brand fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Brand not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, $brand)
    {
        DB::beginTransaction();

        $formData = $request->validated();
        try {
            $brand_instance = Brand::findOrFail($brand);

            // Handle logo update
            if ($request->hasFile('logo')) {
                // Optional: delete old logo file if it exists
                if ($brand_instance->logo) {
                    Storage::disk('public')->delete($brand_instance->logo);
                }

                // Store the new logo
                $formData['logo'] = $request->file('logo')->store('uploads/brands', 'public');
            }

            // Update brand
            $this->brandRepository->update($formData, $brand_instance);

            DB::commit();

            return ApiResponseClass::sendResponse(new BrandResource($brand_instance), 'Brand updated successfully', 200);
        } catch (\Exception $e) {
            DB::rollback();

            return ApiResponseClass::rollback($e, 'Failed to update brand!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($brand)
    {
        DB::beginTransaction();

        try {
            $brand_instance = Brand::findOrFail($brand);

            // Delete logo file if it exists
            if ($brand_instance->logo && Storage::disk('public')->exists($brand_instance->logo)) {
                Storage::disk('public')->delete($brand_instance->logo);
            }

            // Delete the brand record
            $this->brandRepository->destroy($brand_instance);

            DB::commit();

            return ApiResponseClass::sendResponse(new BrandResource($brand_instance), 'Brand deleted successfully', 200);
        } catch (\Exception $e) {
            DB::rollback();

            return ApiResponseClass::rollback($e, 'Failed to delete brand!');
        }
    }
}
