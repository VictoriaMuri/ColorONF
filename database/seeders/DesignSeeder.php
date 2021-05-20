<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designs')->insert([
            'name' => 'Рисунок',
            'price' => 20
        ]);

        DB::table('designs')->insert([
            'name' => 'Рисунок + стразы',
            'price' => 50
        ]);

        DB::table('designs')->insert([
            'name' => 'Весь ноготь в стразах',
            'price' => 100
        ]);
    }
}
