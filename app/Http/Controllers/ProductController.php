<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show', ['product' => $product]);
    }

    
}

