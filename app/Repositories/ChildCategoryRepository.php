<?php

namespace App\Repositories;

use App\Interfaces\ChildCategoryRepositoryInterface;
use App\Models\ChildCategory;

class ChildCategoryRepository implements ChildCategoryRepositoryInterface
{
    public function get($request)
    {
        return ChildCategory::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {
        return ChildCategory::create($data);
    }

    public function show($childCategory)
    {
        return ChildCategory::findOrFail($childCategory);
    }

    public function update(array $data, $childCategory)
    {
        $childCategory->update($data);

        return $childCategory;
    }

    public function destroy($childCategory)
    {
        return $childCategory->delete();
    }
}
