<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'status'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
