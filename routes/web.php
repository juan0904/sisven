<?php

use App\Http\Controllers\PaymodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/paymode', [PaymodeController::class, 'index'])->name('paymode.index');
Route::post('/paymode', [PaymodeController::class, 'store'])->name('paymode.store');
Route::get('/paymode/create', [PaymodeController::class, 'create'])->name('paymode.create');
Route::delete('/paymode/{paymode}', [PaymodeController::class, 'destroy'])->name('paymode.destroy');
Route::put('/paymode/{paymode}', [PaymodeController::class, 'update'])->name('paymode.update');
Route::get('/paymode/{paymode}/edit', [PaymodeController::class, 'edit'])->name('paymode.edit');