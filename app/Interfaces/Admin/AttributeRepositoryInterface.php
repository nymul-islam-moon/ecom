<?php

namespace App\Interfaces\Admin;

interface AttributeRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($attribute);

    public function update(array $data, $attribute);

    public function destroy($attribute);
}
