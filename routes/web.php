<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\packageController;
use App\Http\Controllers\ProductController;


Route::get('/', [packageController::class, 'index'])->name('products.index');
Route::get('/New-Packages', [packageController::class, 'add_package'])->name('add_package');
Route::post('/New-Packages', [packageController::class, 'store_package'])->name('store_package');

