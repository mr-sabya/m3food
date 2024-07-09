<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all products
    public function index()
    {
        return view('backend.product.index');
    }

    // create
    public function create()
    {
        return view('backend.product.create');    
    }

    // show edit form by id
    public function edit($id)
    {
        return view('backend.product.edit', compact('id'));    
    }

    //show product by id
    public function show($id)
    {
        return view('backend.product.show', compact('id'));    
    }
}
