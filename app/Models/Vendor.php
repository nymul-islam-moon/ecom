<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /** @use HasFactory<\Database\Factories\VendorFactory> */
    use HasFactory;

    protected $table = 'vendors';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'company_name',
        'company_name',
        'address',
        'status',
        'logo',
        'cover_image',
        'description',
        'commission',
        'business_license_number',
        'business_license_document'
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
