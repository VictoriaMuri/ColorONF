<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_services')->insert([
            'name' => 'Маникюр',
            'price' => 300
        ]);

        DB::table('type_services')->insert([
            'name' => 'Педикюр',
            'price' => 700
        ]);
    }
}
