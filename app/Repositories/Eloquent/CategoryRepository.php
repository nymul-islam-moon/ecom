<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function get($request)
    {
        return Category::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {
        return Category::create($data);
    }

    public function show($category)
    {
        return Category::findOrFail($category);
    }

    public function update(array $data, $category)
    {
        $category->update($data);
        return $category;
    }

    public function destroy($category)
    {
        return $category->delete();
    }
}
