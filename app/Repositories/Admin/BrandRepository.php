<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\BrandRepositoryInterface;
use App\Models\Brand;
use Illuminate\Support\Str;

class BrandRepository implements BrandRepositoryInterface
{
    public function get($request)
    {
        return Brand::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {

        $data['slug'] = Str::slug($data['name'], '-');

        return Brand::create($data);
    }

    public function findById($brand)
    {
        return Brand::findOrFail($brand);
    }

    public function update(array $data, $brand)
    {

        $data['slug'] = Str::slug($data['name'], '-');
        $brand->update($data);

        return $brand;
    }

    public function destroy($brand)
    {
        return $brand->delete();
    }
}
