<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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

    function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');
        $product->price = $request->get('price');
        $product->description = $request->get('description');

        $product->save();

        return "Se guardó el producto";


    }
}

