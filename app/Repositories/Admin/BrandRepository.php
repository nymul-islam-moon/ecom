<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\BrandRepositoryInterface;
use App\Models\Brand;

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
        return Brand::create($data);
    }

    public function show($vendor)
    {
        // return Vendor::findOrFail($vendor);
    }

    public function update(array $data, $vendor)
    {
        // $vendor->update($data);

        // return $vendor;
    }

    public function destroy($vendor)
    {
        // return $vendor->delete();
    }
}
