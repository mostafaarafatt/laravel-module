<?php

namespace Modules\Product\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price_in_cents', 'stock'];

    protected static function newFactory(): ProductFactory
    {
        return new ProductFactory();
    }
}
