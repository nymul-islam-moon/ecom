<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreCategoryRequest;
use App\Http\Requests\Api\Admin\UpdateCategoryRequest;
use App\Http\Resources\Api\Admin\CategoryResource;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Classes\ApiResponseClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryRepository->get($request);
        return ApiResponseClass::sendResponse(CategoryResource::collection($categories), "Categories fetched successfully", 200);
    }

    public function store(StoreCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $category = $this->categoryRepository->store($formData);
            DB::commit();
            return ApiResponseClass::sendResponse(new CategoryResource($category), "Category created successfully", 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, "Failed to create category!");
        }
    }

    public function show($id)
    {
        $category = $this->categoryRepository->show($id);
        return ApiResponseClass::sendResponse(new CategoryResource($category), "Category fetched successfully", 200);
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        DB::beginTransaction();
        dd($id);
        try {
            $formData = $request->validated();
            $category = $this->categoryRepository->update($id, $formData);
            DB::commit();
            return ApiResponseClass::sendResponse(new CategoryResource($category), "Category updated successfully", 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, "Failed to update category!");
        }
    }

    public function destroy($id)
    {
        $this->categoryRepository->destroy($id);
        return ApiResponseClass::sendResponse(null, "Category deleted successfully", 204);
    }
}
