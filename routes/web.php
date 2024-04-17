<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Calculator;

Route::get('/', [Calculator::class, 'index'])->name('calculator');
