<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  public function run() {
    $this->call(DesignSeeder::class);
    $this->call(OtherServiceSeeder::class);
    $this->call(ServiceSeeder::class);
    $this->call(TypeServiceSeeder::class);
  }
}
