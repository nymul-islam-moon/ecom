<?php

namespace App\Http\Controllers\Api\Admin;

use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Admin\StoreCategoryRequest;
use App\Http\Requests\Api\Admin\UpdateCategoryRequest;
use App\Http\Resources\Api\Admin\CategoryResource;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return ApiResponseClass::sendResponse(CategoryResource::collection($categories), 'Categories fetched successfully', 200);
    }

    public function store(StoreCategoryRequest $request)
    {
        DB::beginTransaction();
        try {
            $formData = $request->validated();
            $category = $this->categoryRepository->store($formData);
            DB::commit();

            return ApiResponseClass::sendResponse(new CategoryResource($category), 'Category created successfully', 201);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to create category!');
        }
    }

    public function show($category)
    {
        DB::beginTransaction();
        try {
            $category_instance = Category::findOrFail($category);
            DB::commit();

            return ApiResponseClass::sendResponse(new CategoryResource($category_instance), 'Category fetched successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Category not found!');
        }
    }

    public function update(UpdateCategoryRequest $request, $category)
    {
        DB::beginTransaction();
        try {
            $category_instance = Category::findOrFail($category);
            $formData = $request->validated();
            $this->categoryRepository->update($formData, $category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new CategoryResource($category_instance), 'Category updated successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to update category!');
        }
    }

    public function destroy($category)
    {
        DB::beginTransaction();
        try {
            $category_instance = Category::findOrFail($category);
            $this->categoryRepository->destroy($category_instance);
            DB::commit();

            return ApiResponseClass::sendResponse(new CategoryResource($category_instance), 'Category deleted successfully', 200);
        } catch (\Exception $e) {
            ApiResponseClass::rollback($e, 'Failed to delete category!');
        }
    }
}
