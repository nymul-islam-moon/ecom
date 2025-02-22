<?php

namespace App\Interfaces;

interface VendorRepositoryInterface
{
    public function get($request);

    public function store(array $data);

    public function show($vendor);

    public function update(array $data, $vendor);

    public function destroy($vendor);
}
