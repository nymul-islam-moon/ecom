<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ProfileRepositoryInterface;
use App\Models\Admin;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function findById(int $admin): Admin
    {
        return Admin::findOrFail($admin);
    }
}
