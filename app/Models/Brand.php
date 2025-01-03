<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = ['name', 'logo'];

    /**
     * Get the brands
     */
    public function scopeGetBrand($query, $search = null)
    {
        if ($search) {
            return $query->where('name', 'LIKE', '%'.$search.'%');
        }

        return $query->limit(10);
    }
}
