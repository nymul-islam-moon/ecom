<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    /** @use HasFactory<\Database\Factories\AttributeValueFactory> */
    use HasFactory;

    protected $fillable = ['attribute_id', 'value'];

    // Define relationship with Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    // Define relationship with Product (through pivot table)
    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'product_attribute_values', 'attribute_value_id', 'product_id');
    // }
}
