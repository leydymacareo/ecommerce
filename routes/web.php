<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/',[ProductController::class, 'index']);

Route::prefix('products')->controller(ProductController::class)->group(function ()  {
    Route::get('/', 'index')->name('products.index');             // /products
    Route::get('/create', 'create')->name('products.create');     // /products/create
    Route::get('/{id}/{category?}', 'show')->name('products.show'); // /products/1/categoria
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.category.create');

    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.category.store');
});
