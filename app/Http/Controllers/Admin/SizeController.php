<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Size\SizeCreateRequest;
use App\Http\Requests\Size\SizeUpdateRequest;
use App\Models\Size;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::all();

        return view('admin.size.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SizeCreateRequest $request)
    {
        Size::create($request->validated());

        return redirect()->route('admin.sizes.index')->with('success', 'Size added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $size = Size::findOrFail($id);

        return view('sizes.show', compact($size));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $size = Size::findOrFail($id);

        return view('admin.size.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SizeUpdateRequest $request, string $id)
    {
        $size = Size::findOrFail($id);
        $size->update($request->validated());

        return redirect()->route('sizes.index')->with('success', 'Size updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        return redirect()->route('sizes.index')->with('success', 'Size deleted successfully');
    }
}
