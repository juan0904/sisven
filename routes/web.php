<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductController:: class, 'index'])->name('productos.index');
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/create', [ProductController::class, 'create'])->name('productos.create');
Route::delete('/productos/{product}', [ProductController::class, 'destroy'])->name('productos.destroy');
Route::put('/productos/{product}', [ProductController::class, 'update'])->name('productos.update');
Route::get('/productos/{product}/edit', [ProductController::class , 'edit'])->name('productos.edit');