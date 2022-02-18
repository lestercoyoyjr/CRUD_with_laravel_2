<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
});

// This route is to show products
Route::get('/products', [ProductsController::class, 'index'] )->name('products.index');

// this route is to create products
Route::get('/products/create', [ProductsController::class, 'create'] )->name('products.create');
