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

        $cross = DB::table('months')
            ->select([
                'months.id',
                't1.id as tonnage_id',
                't2.id as type_id'
            ])
            ->crossJoin('tonnages as t1')
            ->crossJoin('types as t2')
            ->get();

        foreach ($cross as $value) {
            DB::table('prices')
                ->insert([
                    'month_id' => $value->id,
                    'tonnage_id' => $value->tonnage_id,
                    'type_id' => $value->type_id,
                    'price' => rand(100, 200),
                    'updated_at' => Date::now(),
                    'created_at' => Date::now(),
                ]);
        }

    }
}
