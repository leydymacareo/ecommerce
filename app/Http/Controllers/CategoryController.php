<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function table()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);

        return view('admin.category.table', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:category,name',
        ]);

        Category::create($validated);

        return redirect()
            ->route('admin.category.table')
            ->with('status', 'Categoría creada correctamente.');
    }
}
