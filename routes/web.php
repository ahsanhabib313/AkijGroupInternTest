<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductsController;
use  App\Http\Controllers\FilterController;


Route::get('products/filter', [FilterController::class, 'filter'])->name('products.filter');
Route::resource('products', 'ProductsController');


