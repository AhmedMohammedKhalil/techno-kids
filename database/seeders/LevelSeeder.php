<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'مبتدئ',
            'range_start' => 0,
            'range_end' => 50,
        ]);
        DB::table('levels')->insert([
            'name' => 'متوسط',
            'range_start' => 50,
            'range_end' => 100,
        ]);
        DB::table('levels')->insert([
            'name' => 'ممتاز',
            'range_start' => 100,
            'range_end' => 150,
        ]);
        DB::table('levels')->insert([
            'name' => 'متقدم',
            'range_start' => 150,
            'range_end' => 200,
        ]);
    }
}
