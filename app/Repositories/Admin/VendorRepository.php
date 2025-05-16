<?php

namespace App\Repositories\Admin;

use App\Interfaces\VendorRepositoryInterface;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VendorRepository implements VendorRepositoryInterface
{
    public function get($request)
    {
        return Vendor::latest()
            ->search($request->query('search'))
            ->filterStatus($request->query('status'))
            ->sortBy(
                $request->query('sortBy', 'id'),
                $request->query('sortDirection', 'desc')
            )->get();
    }

    public function store(array $data)
    {
        $data['password'] = Hash::make(Str::random(10));

        return Vendor::create($data);
    }

    public function findById($vendor)
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
