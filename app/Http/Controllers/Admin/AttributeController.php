<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use App\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attributes = Attribute::simplePaginate(2);

        return view('admin.attribute.index', compact('attributes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeRequest $request)
    {
        $formData = $request->validated();
        Attribute::create($formData);

        return back()->with('success', 'Attribute created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attribute $attrinute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attribute $attrinute)
    {
        return view('admin.attribute.edit', compact('attrinute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeRequest $request, Attribute $attrinute)
    {
        $formData = $request->validated();

        $attrinute->update($formData);

        return back()->with('success', 'Attribute updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attribute $attrinute)
    {
        $attrinute->delete();

        return back()->with('success', 'Attribute deleted successfully');
    }
}
