<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Months;
use App\Models\Tonnages;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class Calculator extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('calculator', [
            'monthsList' => Months::getMonthList(),
            'typesList' => Type::getTypeList(),
            'tonnagesList' => Tonnages::getTonnageList(),
        ]);
    }
    public function store(Request $request)
    {
        $result = DB::table('prices')
            ->join('months', 'prices.month_id', '=', 'months.id')
            ->join('types', 'prices.type_id', '=', 'types.id',)
            ->join('tonnages', 'prices.tonnage_id', '=', 'tonnages.id')
            ->where('months.name', '=', "$request->month")
            ->where('types.name', '=', "$request->type")
            ->where('tonnages.value', '=', "$request->tonnage")
            ->first('price');

        return view('calculator', [
            'monthsList' => Months::getMonthList(),
            'typesList' => Type::getTypeList(),
            'tonnagesList' => Tonnages::getTonnageList(),
            'result' => $result
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
