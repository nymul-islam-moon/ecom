<?php

namespace App\Interfaces;

interface ChildCategoryRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($subCategory);

    public function update(array $data, $subCategory);

    public function destroy($subCategory);
}
