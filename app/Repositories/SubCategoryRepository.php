<?php

namespace App\Repositories;

use App\Interfaces\SubCategoryRepositoryInterface;
use App\Models\SubCategory;

class SubCategoryRepository implements SubCategoryRepositoryInterface
{
    public function get($request)
    {
        return SubCategory::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {
        return SubCategory::create($data);
    }

    public function show($subCategory)
    {
        return SubCategory::findOrFail($subCategory);
    }

    public function update(array $data, $subCategory)
    {
        $subCategory->update($data);

        return $subCategory;
    }

    public function destroy($subCategory)
    {
        return $subCategory->delete();
    }
}
