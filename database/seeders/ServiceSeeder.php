<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'Покрытие',
            'price' => 300
        ]);

        DB::table('services')->insert([
            'name' => 'Покрытие + укрепление',
            'price' => 450
        ]);
    }
}
