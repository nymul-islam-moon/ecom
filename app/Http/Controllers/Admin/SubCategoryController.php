<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = SubCategory::all();
        return view('admin.sub-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'status'=>'required',
        ]);

        SubCategory::create($validated);
        return redirect()->route('sub-categories.index')->with('success','Sub Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = SubCategory::findOrFail($id);
        return view('admin.sub-category.show',compact($category));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $categories = Category::all();
        return view('admin.sub-category.edit',compact('categories','subCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = SubCategory::findOrFail($id);
        $validated = $request->validate([
            'name'=>'required',
            'status'=>'required',
        ]);

        $category->update($validated);
        return redirect()->route('sub-categories.index')->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = SubCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.sub-categories.index')->with('success','Category deleted successfully');
    }
}
