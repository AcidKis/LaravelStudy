<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';

    public static function getTypeList()
    {
        $typesList = DB::table('types')->orderBy('id')->pluck('name');
        return $typesList;

    }
}
