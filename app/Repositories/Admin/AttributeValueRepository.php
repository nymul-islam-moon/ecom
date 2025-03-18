<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\AttributeRepositoryInterface;
use App\Models\AttributeValue;

class AttributeValueRepository implements AttributeRepositoryInterface
{
    public function get($request)
    {
        return AttributeValue::latest()
            ->search($request->query('search'))
            ->get();
    }

    public function store(array $data)
    {
        return AttributeValue::create($data);
    }

    public function show($attributeValue)
    {
        // return Vendor::findOrFail($vendor);
    }

    public function update(array $data, $attributeValue)
    {
        $attributeValue->update($data);

        return $attributeValue;
    }

    public function destroy($attributeValue)
    {
        return $attributeValue->delete();
    }
}
