<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    /** @use HasFactory<\Database\Factories\ProductVariantFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sku',
        'slug',
        'price',
        'sale_price',
        'stock_quantity',
        'low_stock_threshold',
        'restock_date',
        'weight',
        'dimensions',
        'width',
        'height',
        'depth',
        'is_default',
    ];

    public function rel_to_product()
    {
        return $this->belongsTo(Product::class);
    }

    public function rel_to_attributes()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_variant_attribute_values', 'product_variant_id', 'attribute_value_id')
            ->withTimestamps();
    }
}
