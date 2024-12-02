<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::simplePaginate(2);
        return view('admin.sub-category.index', compact('subCategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-category.create', compact('categories'));
    }

    public function store(StoreSubCategoryRequest $request)
    {
        $formData = $request->validated();
        SubCategory::create($formData);

        return back()->with('success', 'SubCategory created successfully');

    }

    public function show(SubCategory $subCategory)
    {
        //
    }

    public function edit(SubCategory $subCategory)
    {
        $categories= Category::all();
        return view('admin.sub-category.edit', array('subCategory' => $subCategory,'categories'=>$categories));
    }

    public function update(UpdateSubCategoryRequest $request, SubCategory $subCategory)
    {
        $formData = $request->validated();

        $subCategory->update($formData);
        return back()->with('success', 'SubCategory updated successfully');
    }

    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return back()->with('success', 'SubCategory deleted successfully');
    }
}
