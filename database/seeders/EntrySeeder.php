<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entries')->insert([
                'entry_name' => 'ビーチ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('entries')->insert([
                'entry_name' => 'ボート',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        DB::table('entries')->insert([
                'entry_name' => '不明',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
