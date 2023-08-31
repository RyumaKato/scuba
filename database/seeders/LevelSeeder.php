<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
                'level_name' => '初級',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('levels')->insert([
                'level_name' => '中級',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('levels')->insert([
                'level_name' => '上級',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('levels')->insert([
                'level_name' => '不明',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
