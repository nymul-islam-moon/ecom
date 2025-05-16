<?php

namespace App\Repositories\Admin;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function get($request)
    {
        $perPage = $request->query('per_page', 5); // Default to 15 items per page if not specified

        return Category::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->paginate($perPage);
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
