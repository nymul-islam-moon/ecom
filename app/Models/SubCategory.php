<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name','status','category_id'];

    public function category () {
        return $this->belongsTo(Category::class);
    }
}
