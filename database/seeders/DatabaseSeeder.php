<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoutesTableSeeder::class,
            StreetsTableSeeder::class,
            RouteStreetTableSeeder::class,
            UserSeeder::class
        ]);
    }
}
