<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::getAllProduct();
        return view('FE.shopping', compact('products'));
    }
}
