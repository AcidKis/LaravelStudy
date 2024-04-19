<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tonnages extends Model
{
    use HasFactory;
    protected $table = 'tonnages';

    public static function getTonnageList()
    {
        $tonnagesList = DB::table('tonnages')->orderBy('id')->pluck('value');
        return $tonnagesList;

    }
}
