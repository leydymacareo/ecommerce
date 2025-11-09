<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Brand;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    function show($id, $category = null)
    {
        return view('products.show');
    }
}

