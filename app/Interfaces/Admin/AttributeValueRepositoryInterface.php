<?php

namespace App\Interfaces\Admin;

interface AttributeValueRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($attributeValue);

    public function update(array $data, $attributeValue);

    public function destroy($attributeValue);
}
