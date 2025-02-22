<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreChildCategoryRequest;
use App\Http\Requests\Api\Admin\UpdateChildCategoryRequest;
use App\Http\Resources\Api\Admin\ChildCategoryResource;
use App\Interfaces\ChildCategoryRepositoryInterface;
use App\Models\ChildCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChildCategoryController extends Controller
{
    protected $childCategoryRepository;

    public function __construct(ChildCategoryRepositoryInterface $childCategoryRepositoryInterface)
    {
        $this->childCategoryRepository = $childCategoryRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $childCategories = $this->childCategoryRepository->get($request);

        return ApiResponseClass::sendResponse(ChildCategoryResource::collection($childCategories), 'Child-Category fetched successfully', 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $childCategory = $this->childCategoryRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new ChildCategoryResource($childCategory), 'Child-Category created successfully', 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create Child-Category!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($child_category)
    {
        DB::beginTransaction();
        try {
            $child_category_instance = ChildCategory::findOrFail($child_category);
            DB::commit();

            return ApiResponseClass::sendResponse(new ChildCategoryResource($child_category_instance), 'Child-Category fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Child-Category not found!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildCategoryRequest $request, $child_category)
    {
        DB::beginTransaction();
        try {
            $child_category_instance = ChildCategory::findOrFail($child_category);
            $formData = $request->validated();
            $this->childCategoryRepository->update($formData, $child_category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new ChildCategoryResource($child_category_instance), 'Child-Category updated successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to update Child-Category!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($child_category)
    {
        DB::beginTransaction();
        try {
            $child_category_instance = ChildCategory::findOrFail($child_category);
            $this->childCategoryRepository->destroy($child_category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new ChildCategoryResource($child_category_instance), 'SubCategory deleted successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to delete sub-category!');
        }
    }
}
