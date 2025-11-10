<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function table()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);

        return view('admin.brand.table', [
            'brands' => $brands,
        ]);
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:brand,name',
        ]);

        Brand::create($validated);

        return redirect()
            ->route('admin.brand.table')
            ->with('status', 'Marca creada correctamente.');
    }
}
