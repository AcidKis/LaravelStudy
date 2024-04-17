<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class Months extends Model
{
    use HasFactory;
    protected $table = 'months';

    public static function getMonthList()
    {
        $monthsList = DB::table('months')->orderBy('id')->pluck('name');
        return $monthsList;
    }
}
