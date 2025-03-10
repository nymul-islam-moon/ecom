<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = ['name', 'logo', 'description', 'slug', 'website_url'];

    public function scopeSearch(Builder $query, $term): Builder
    {
        return $query->when($term, function ($q) use ($term) {
            $q->where('name', 'LIKE', "%{$term}%");
        });
    }

    // Scope for filtering by status
    public function scopeFilterStatus(Builder $query, $status): Builder
    {
        return $query->when($status !== null, function ($q) use ($status) {
            $q->where('status', $status);
        });
    }
}
