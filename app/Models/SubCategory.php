<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ["name", "category_id"];

    public function Category () {
        return $this->belongsTo(Category::class);
    }
}
