<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    public function get($request)
    {
        return Product::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {
        return Product::create($data);
    }

    public function show($product)
    {
        return Product::findOrFail($product);
    }

    public function update(array $data, $product)
    {
        $product->update($data);

        return $product;
    }

    public function destroy($product)
    {
        return $product->delete();
    }
}
