<?php

namespace App\Repositories\Interfaces;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function get($request);
    public function store(array $data);
    public function show(Category $category);
    public function update(array $data, Category $category);
    public function destroy(Category $category);
}
