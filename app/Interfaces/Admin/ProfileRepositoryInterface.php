<?php

namespace App\Interfaces\Admin;

use App\Models\Admin;
use phpDocumentor\Reflection\Types\Boolean;

interface ProfileRepositoryInterface
{
    public function findById(int $admin): Admin;

    public function destroy(object $admin);
}
