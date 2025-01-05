<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ChildCategoryFactory> */
    use HasFactory;

    protected $fillable = ['name', 'sub_category_id', 'category_id'];
}
