<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', [CategoriesController::class,'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories/create', [CategoriesController::class,'create'])->name('categories.create');
Route::delete('/categories/{categorie}', [CategoriesController::class,'destroy'])->name('categories.destroy');
Route::put('/categories/{categorie}', [CategoriesController::class,'update'])->name('categories.update');
Route::get('/categories/{categorie}/edit', [CategoriesController::class,'edit'])->name('categories.edit');