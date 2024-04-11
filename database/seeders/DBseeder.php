<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;

class DBseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $months = [
            'январь',
            'февраль',
            'март',
            'апрель',
            'май',
            'июнь',
            'июль',
            'август',
            'сентябрь',
            'октябрь',
            'ноябрь',
            'декабрь',
        ];
        $tonnages = [
            100,
            150,
            200,
            250,
        ];
        $types = [
            'жмых',
            'шрот',
            'соя'
        ];
        foreach ($months as $month) {
            DB::table('months')->insert(['name' => $month, 'created_at' => Date::now(), 'updated_at' => Date::now()]);
        }
        foreach ($tonnages as $tonnage) {
            DB::table('tonnages')->insert(['value' => $tonnage, 'created_at' => Date::now(), 'updated_at' => Date::now()]);
        }
        foreach ($types as $type) {
            DB::table('types')->insert(['name' => $type, 'created_at' => Date::now(), 'updated_at' => Date::now()]);
        }
    }
}
