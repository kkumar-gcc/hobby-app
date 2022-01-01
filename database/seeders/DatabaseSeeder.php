<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use TagSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(class:TagSeeder::class);
       $this->call(class:UserSeeder::class);
    }
}
