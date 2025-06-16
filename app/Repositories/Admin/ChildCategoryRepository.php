<?php

namespace App\Repositories\Admin;

use App\Interfaces\ChildCategoryRepositoryInterface;
use App\Models\ChildCategory;

class ChildCategoryRepository implements ChildCategoryRepositoryInterface
{
    public function get($request)
    {
        $perPage = $request->query('per_page', 5); // Default to 15 items per page if not specified

        return ChildCategory::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->paginate($perPage);
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
