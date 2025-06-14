<?php

namespace App\Repositories\Admin;

use App\Interfaces\Admin\ProfileRepositoryInterface;
use App\Models\Admin;
use phpDocumentor\Reflection\Types\Boolean;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function findById(int $admin): Admin
    {
        return Admin::findOrFail($admin);
    }

    public function destroy($admin)
    {
        return $admin->delete();
    }
}
