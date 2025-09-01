<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;

Route::get('/', [CakeController::class, 'index'])->name('home');
Route::get('/cakes', [CakeController::class, 'index'])->name('cakes.index');
Route::get('/cakes/{cake}', [CakeController::class, 'show'])->name('cakes.show');
