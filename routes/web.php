<?php

use App\Http\Controllers\PaymodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 

Route::get('/paymode', [PaymodeController::class, 'index'])->name('paymode.index');
Route::post('/paymode', [PaymodeController::class, 'store'])->name('paymode.store');
Route::get('/paymode/create', [PaymodeController::class, 'create'])->name('paymode.create');
Route::delete('/paymode/{paymode}', [PaymodeController::class, 'destroy'])->name('paymode.destroy');
Route::put('/paymode/{paymode}', [PaymodeController::class, 'update'])->name('paymode.update');
Route::get('/paymode/{paymode}/edit', [PaymodeController::class, 'edit'])->name('paymode.edit');
Route::get('/productos', [ProductController:: class, 'index'])->name('productos.index');
Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
Route::get('/productos/create', [ProductController::class, 'create'])->name('productos.create');
Route::delete('/productos/{product}', [ProductController::class, 'destroy'])->name('productos.destroy');
Route::put('/productos/{product}', [ProductController::class, 'update'])->name('productos.update');
Route::get('/productos/{product}/edit', [ProductController::class , 'edit'])->name('productos.edit');
Route::get('/categories', [CategoriesController::class,'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories/create', [CategoriesController::class,'create'])->name('categories.create');
Route::delete('/categories/{categorie}', [CategoriesController::class,'destroy'])->name('categories.destroy');
Route::put('/categories/{categorie}', [CategoriesController::class,'update'])->name('categories.update');
Route::get('/categories/{categorie}/edit', [CategoriesController::class,'edit'])->name('categories.edit');
