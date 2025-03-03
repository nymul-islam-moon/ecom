<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreSubCategoryRequest;
use App\Http\Requests\Api\Admin\UpdateSubCategoryRequest;
use App\Http\Resources\Api\Admin\SubCategoryResource;
use App\Interfaces\SubCategoryRepositoryInterface;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    protected $subCategoryRepository;

    public function __construct(SubCategoryRepositoryInterface $subCategoryRepositoryInterface)
    {
        $this->subCategoryRepository = $subCategoryRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subCategories = $this->subCategoryRepository->get($request);

        return ApiResponseClass::sendResponse(SubCategoryResource::collection($subCategories), 'SubCategory fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $subCategory = $this->subCategoryRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new SubCategoryResource($subCategory), 'SubCategory created successfully', 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create SubCategory!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($sub_category)
    {
        DB::beginTransaction();
        try {
            $sub_category_instance = SubCategory::findOrFail($sub_category);
            DB::commit();

            return ApiResponseClass::sendResponse(new SubCategoryResource($sub_category_instance), 'SubCategory fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'SubCategory not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubCategoryRequest $request, $sub_category)
    {
        DB::beginTransaction();
        try {
            $sub_category_instance = SubCategory::findOrFail($sub_category);
            $formData = $request->validated();
            $this->subCategoryRepository->update($formData, $sub_category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new SubCategoryResource($sub_category_instance), 'SubCategory updated successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to update sub-category!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($sub_category)
    {
        DB::beginTransaction();
        try {
            $sub_category_instance = SubCategory::findOrFail($sub_category);
            $this->subCategoryRepository->destroy($sub_category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new SubCategoryResource($sub_category_instance), 'SubCategory deleted successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to delete sub-category!');
        }
    }
}
