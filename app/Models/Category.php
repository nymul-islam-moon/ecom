<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'status',
    ];

    // Scope for searching by name
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
