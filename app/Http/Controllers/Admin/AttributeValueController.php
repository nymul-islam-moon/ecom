<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;
use App\Models\Attribute;
use App\Models\AttributeValue;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attributeValues = AttributeValue::simplePaginate(2);

        return view('admin.attribute_value.index', compact('attributeValues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attributes = Attribute::all();

        return view('admin.attribute_value.create', compact('attributes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeValueRequest $request)
    {
        $formData = $request->validated();
        AttributeValue::create($formData);

        return back()->with('success', 'Attribute Value created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeValue $attributeValue) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttributeValue $attributeValue)
    {
        $attributes = Attribute::all();

        return view('admin.attribute_value.edit', compact('attributeValue', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeValueRequest $request, AttributeValue $attributeValue)
    {
        $formData = $request->validated();

        $attributeValue->update($formData);

        return back()->with('success', 'Attribute Value updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeValue $attributeValue)
    {
        $attributeValue->delete();

        return back()->with('success', 'Attribute Value Value deleted successfully');
    }
}
