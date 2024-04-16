<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Months;
use Illuminate\Support\Facades\DB;

class Calculator extends Controller
{
    public function index()
    {
        $cross = DB::table('months')
            ->select([
                'months.id',
                't1.id as tonnage_id',
                't2.id as type_id'
            ])
            ->crossJoin('tonnages as t1')
            ->crossJoin('types as t2')
            ->get();
        dd($cross);
        return view('calculator');
    }
}
