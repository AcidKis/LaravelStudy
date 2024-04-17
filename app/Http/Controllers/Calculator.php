<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Months;
use App\Models\Tonnages;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class Calculator extends Controller
{
    public function index()
    {
        return view('calculator', ['monthsList' => Months::getMonthList()]);
    }
}
