<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index');    
    }


    // show create form
    public function create()
    {
        return view('backend.category.create');
    }

    // show create form
    public function edit($id)
    {
        return view('backend.category.edit', compact('id'));
    }
}
