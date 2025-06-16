<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\AttributeValueRepositoryInterface;
use App\Models\AttributeValue;

class AttributeValueRepository implements AttributeValueRepositoryInterface
{
    public function get($request)
    {
        $perPage = $request->query('per_page', 5); // Default to 15 items per page if not specified

        return AttributeValue::latest()
            ->search($request->query('search'))
            ->paginate($perPage);
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
