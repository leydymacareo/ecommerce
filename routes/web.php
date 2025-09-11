<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->controller(ProductController::class)-> group (function ()  {
    
    Route::get('/','index');
    Route::get('/', 'create')->name('products.create');
    Route::get('/{id}/{category?}', 'show')->name('products.show');

});

