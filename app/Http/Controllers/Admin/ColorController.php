<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();

        return view('admin.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colour.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColourCreateRequest $request)
    {
        Colour::create($request->validated());

        return redirect()->route('admin.colours.index')->with('success', 'Colour added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $colour = Colour::findOrFail($id);

        return view('colours.show', compact($colour));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $colour = Colour::findOrFail($id);

        return view('admin.colour.edit', compact('colour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColourUpdateRequest $request, string $id)
    {
        $colour = Colour::findOrFail($id);
        $colour->update($request->validated());

        return redirect()->route('colours.index')->with('success', 'Colour updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $colour = Colour::findOrFail($id);
        $colour->delete();

        return redirect()->route('colours.index')->with('success', 'Colour deleted successfully');
    }
}
