<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Brand;

class ProductController extends Controller
{
    function index(Request $request)
    {
        $categories = Category::orderBy('name')->get();

        $productsQuery = Product::with(['category', 'brand'])
            ->orderBy('created_at', 'desc');

        if ($request->filled('category')) {
            $productsQuery->where('category_id', $request->get('category'));
        }

        $products = $productsQuery->paginate(12)->withQueryString();

        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
            'currentCategory' => $request->get('category')
        ]);
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
        $request->validate([

            'name' => 'required|string|max:255',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id',
            'price' => 'required|numeric|min:0|max:9999999.99',
            'image' => 'nullable|url',
            'description' => 'required|string'

        ]);


        $product = new Product();

        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->brand_id = $request->get('brand');
        $product->price = $request->get('price');
        $product->description = $request->get('description');

        $product->save();

        return redirect()->route('admin.products.table');

    }

    public function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('products.table', [
            'products' => $products
        ]);
    }
}
