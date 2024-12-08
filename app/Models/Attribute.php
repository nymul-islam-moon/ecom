<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /** @use HasFactory<\Database\Factories\ArrtibuteFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    // Define relationship with AttributeValue
    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
