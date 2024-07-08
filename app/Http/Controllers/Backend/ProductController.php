<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('backend.product.index');
    }

    // create
    public function create()
    {
        return view('backend.product.create');    
    }

    public function edit($id)
    {
        $product = Product::with('categories')->find($id);
        // return $product;
        return view('backend.product.edit', compact('id'));    
    }
}
