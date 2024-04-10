<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Months;

class Calculator extends Controller
{
    public function index()
    {
        return view('calculator');
    }
}
