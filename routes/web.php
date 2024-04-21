<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator;
use App\Http\Controllers\Controller;

Route::get('/', [Calculator::class, 'about'])->name('calculator.about');
Route::get('/calculator', [Calculator::class, 'index'])->name('calculator');
Route::post('/calculator', [Calculator::class, 'store'])->name('calculator.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
