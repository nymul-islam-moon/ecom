<?php

namespace App\Interfaces\Admin;

use App\Models\Admin;

interface ProfileRepositoryInterface
{
    public function findById(int $admin): Admin;
}
