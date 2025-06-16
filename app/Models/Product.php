<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sku',
        'slug',
        'name',
        'description',
        'short_description',
        'images',
        'price',
        'sale_price',
        'tax_included',
        'tax_percentage',
        'stock_quantity',
        'low_stock_threshold',
        'restock_date',
        'product_type',
        'weight',
        'dimensions',
        'width',
        'height',
        'depth',
        'download_url',
        'license_key',
        'subscription_interval',
        'mpn',
        'gtin8',
        'gtin13',
        'gtin14',
        'allow_backorders',
        'return_policy',
        'return_days',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'publish_date',
        'is_published',
        'is_featured',
        'category_id',
        'subcategory_id',
        'child_category_id',
        'shop_id',
        'vendor_id',
        'brand_id',
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


    // 🔗 Main Relationships

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function childCategory()
    {
        return $this->belongsTo(ChildCategory::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Optional: Ratings, Reviews, Tags, Wishlists, etc. can be added later
}
