<?php

namespace App\Repositories;

use App\Models\Vendor;

class VendorRepository
{
    public function get($request)
    {
        return Vendor::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->get();
    }

    public function store(array $data)
    {
        return Vendor::create($data);
    }

    public function show($vendor)
    {
        return Vendor::findOrFail($vendor);
    }

    public function update(array $data, $vendor)
    {
        $vendor->update($data);

        return $vendor;
    }

    public function destroy($vendor)
    {
        return $vendor->delete();
    }
}
