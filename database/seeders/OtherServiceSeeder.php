<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtherServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('other_services')->insert([
            'name' => 'Ремонт ногтя',
            'price' => 50
        ]);

        DB::table('other_services')->insert([
            'name' => 'Наращивание',
            'price' => 100
        ]);

        DB::table('other_services')->insert([
            'name' => 'Снятие чужого покрытия',
            'price' => 150
        ]);

        DB::table('other_services')->insert([
            'name' => 'Снятие нарощенных ногтей',
            'price' => 300
        ]);
    }
}
