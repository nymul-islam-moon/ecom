<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'sku', 
        'name', 
        'description', 
        'shop_description', 
        'price', 
        'sale_price', 
        'stock_quantity', 
        'low_stock_threshold', 
        'restock_date', 
        'product_type', 
        'weight', 
        'dimensions', 
        'is_digital', 
        'download_url', 
        'license_key', 
        'allow_backorders', 
        'is_subscription', 
        'subscription_interval', 
        'return_policy', 
        'return_days', 
        'meta_title', 
        'meta_description', 
        'meta_keywords', 
        'status', 
        'publish_date', 
        'is_published', 
        'category_id', 
        'sub_category_id', 
        'brand_id', 
        'shop_id'
    ];
}
