<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', [ProductController::class,'create'])->name('products.create');

Route::get('products/{id}/{category?}', [ProductController::class,'show'])->name('products.show');
