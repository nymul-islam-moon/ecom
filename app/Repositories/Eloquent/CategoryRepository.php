<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function get()
    {
        return Category::latest()->get();
    }

    public function store(array $data)
    {
        return Category::create($data);
    }

    public function show(int $id)
    {
        return Category::findOrFail($id);
    }

    public function update(array $data, $category)
    {
        $category->update($data);
        return $category;
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        return $category->delete();
    }
}
