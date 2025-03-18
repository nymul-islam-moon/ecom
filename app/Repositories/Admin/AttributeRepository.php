<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\AttributeRepositoryInterface;
use App\Models\Attribute;

class AttributeRepository implements AttributeRepositoryInterface
{
    public function get($request)
    {
        return Attribute::latest()
            ->search($request->query('search'))
            ->get();
    }

    public function store(array $data)
    {
        return Attribute::create($data);
    }

    public function show($attribute)
    {
        // return Vendor::findOrFail($vendor);
    }

    public function update(array $data, $attribute)
    {
        $attribute->update($data);
        return $attribute;
    }

    public function destroy($attribute)
    {
        return $attribute->delete();
    }
}
