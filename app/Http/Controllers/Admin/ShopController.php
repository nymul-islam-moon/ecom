<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\ShopCreateRequest;
use App\Http\Requests\Shop\ShopUpdateRequest;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Shop::all();

        return view('shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShopCreateRequest $request)
    {
        Shop::create($request->validated());

        return redirect()->route('admin.shops.index')->with('success', 'Shop added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shop = Shop::findOrFail($id);

        return view('shops.show', compact($shop));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shop = Shop::findOrFail($id);

        return view('admin.shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShopUpdateRequest $request, string $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->update($request->validated());

        return redirect()->route('admin.shops.index')->with('success', 'Shop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();

        return redirect()->route('admin.shops.index')->with('success', 'Shop deleted successfully');
    }
}
