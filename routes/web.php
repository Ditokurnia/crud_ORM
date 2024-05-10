<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/admin', [AdminController::class, 'index']); 
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
Route::put('/products/{product}', [ProductController::class, 'update']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);
Route::get('/products/{product}/detail', [ProductController::class, 'show']); // Mengubah rute ini

// Routes for Merchant
Route::get('/merchant', [MerchantController::class, 'index'])->name('merchant.index');
Route::get('/merchant/products/{product}/edit', [MerchantController::class, 'edit'])->name('merchant.products.edit');
Route::put('/merchant/products/{product}', [MerchantController::class, 'update'])->name('merchant.products.update');