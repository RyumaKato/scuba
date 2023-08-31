<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
                'month_name' => '1月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '2月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '3月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '4月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '5月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '6月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '7月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '8月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '9月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '10月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '11月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('months')->insert([
                'month_name' => '12月',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
