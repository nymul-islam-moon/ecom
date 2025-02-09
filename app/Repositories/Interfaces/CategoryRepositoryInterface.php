<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface
{
    public function get();
    public function store(array $data);
    public function show(int $id);
    public function update(int $id, array $data);
    public function destroy(int $id);
}
