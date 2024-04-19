<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator;
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/calculator', [Calculator::class, 'index'])->name('calculator');
Route::post('/calculator', [Calculator::class, 'store'])->name('calculator.store');
