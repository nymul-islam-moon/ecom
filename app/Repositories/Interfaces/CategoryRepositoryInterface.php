<?php

namespace App\Repositories\Interfaces;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function get($request);
    public function store(array $data);
    public function show($category); // Updated to accept model instance
    public function update(array $data, $category); // Already correct
    public function destroy($category); // Updated to accept model instance
}
