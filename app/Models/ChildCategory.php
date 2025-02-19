<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ChildCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ChildCategoryFactory> */
    use HasFactory;

    protected $fillable = ['name', 'sub_category_id', 'status'];

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

    public function rel_to_subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
