<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static function getAllProduct()
    {
        $product = Product::all();
        return $product;
    }
}
