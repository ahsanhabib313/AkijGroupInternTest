<?php

use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/product/create', [PageController::class, 'create'])->name('product.create');
Route::post('/product/store', [PageController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [PageController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [PageController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [PageController::class, 'destroy'])->name('product.delete');
Route::get('product/filter', [PageController::class, 'filter'])->name('product.filter');



