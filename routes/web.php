<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->controller(ProductController::class)->group(function ()  {
    Route::get('/', 'index')->name('products.index');             // /products
    Route::get('/create', 'create')->name('products.create');     // /products/create
    Route::get('/{id}/{category?}', 'show')->name('products.show'); // /products/1/categoria
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
