<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChildCategoryRequest;
use App\Http\Requests\UpdateChildCategoryRequest;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $childCategories = ChildCategory::simplePaginate(15);
        return view('admin.child_category.index', compact('childCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.child_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChildCategoryRequest $request)
    {
        $formData = $request->validated();
        ChildCategory::create($formData);
        return redirect()->route('admin.child-category.index')->with('success', 'Child Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChildCategory $childCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildCategory $childCategory)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        return view('admin.child_category.edit', ['childCategory' => $childCategory, 'categories' => $categories, 'subCategories' => $subCategories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChildCategoryRequest $request, ChildCategory $child_category)
    {
        $formData = $request->validated();
        $child_category->update($formData);
        return redirect()->route('admin.child-category.index')->with('success', 'Child Category Update Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildCategory $childCategory)
    {
        $childCategory->delete();
        return redirect()->route('admin.child-category.index')->with('success', 'Child Category Delete Success');
    }

    public function select_childcategories(Request $request, $subCategoryId) {
        $query = $request->input('query', '');

        return ChildCategory::where('sub_category_id', $subCategoryId)
            ->where('name', 'LIKE', "%$query%")
            ->take(10)
            ->get(['id', 'name']);
    }
}
