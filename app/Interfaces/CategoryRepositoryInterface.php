<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($category);

    public function update(array $data, $category);

    public function destroy($category);
}
