<?php

namespace App\Interfaces\Admin;

interface ProductRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($product);

    public function update(array $data, $product);

    public function destroy($product);
}
