<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [ 'name', 'icon' ];

    /**
     * Get the categories
     */
    public function scopeGetCategory($query, $search = null)
    {
        if ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        }

        return $query->limit(10);
    }
}
