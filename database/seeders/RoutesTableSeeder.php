<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RoutesTableSeeder extends Seeder
{
    public function run()
    {
        $routes = [
            [
                'name' => 'A BTN Minasa Upa - Pasar Butung',
                'route_code' => 'A',
                'route_color' => '#FF5733', // Random color
                'description' => 'Route A from BTN Minasa Upa to Pasar Butung',
            ],
            [
                'name' => 'B Terminal Tamalate - Pasar Butung',
                'route_code' => 'B',
                'route_color' => '#33FF57', // Random color
                'description' => 'Route B from Terminal Tamalate to Pasar Butung',
            ],
            [
                'name' => 'C KH.Wahid.Hasyim - Rappokalling',
                'route_code' => 'C',
                'route_color' => '#5733FF', // Random color
                'description' => 'Route C from KH.Wahid.Hasyim to Rappokalling',
            ],
            [
                'name' => 'D Terminal Daya - Selatan Makassar Mall',
                'route_code' => 'D',
                'route_color' => '#FF33A5', // Random color
                'description' => 'Route D from Terminal Daya to Selatan Makassar Mall',
            ],
            [
                'name' => 'E Terminal Panakkukang - Timur Makassar Mall',
                'route_code' => 'E',
                'route_color' => '#33FFA5', // Random color
                'description' => 'Route E from Terminal Panakkukang to Timur Makassar Mall',
            ],
            [
                'name' => 'F Terminal Tamalate - Timur Makassar Mall',
                'route_code' => 'F',
                'route_color' => '#A533FF', // Random color
                'description' => 'Route F from Terminal Tamalate to Timur Makassar Mall',
            ],
            [
                'name' => 'G Terminal Daya - Pasar Butung',
                'route_code' => 'G',
                'route_color' => '#FFA533', // Random color
                'description' => 'Route G from Terminal Daya to Pasar Butung',
            ],
            [
                'name' => 'H Perumnas Antang - Pasar Butung',
                'route_code' => 'H',
                'route_color' => '#A5FF33', // Random color
                'description' => 'Route H from Perumnas Antang to Pasar Butung',
            ],
            [
                'name' => 'I Terminal Panakkukang - Pasar Baru',
                'route_code' => 'I',
                'route_color' => '#33A5FF', // Random color
                'description' => 'Route I from Terminal Panakkukang to Pasar Baru',
            ],
            [
                'name' => 'J Terminal Panakkukang - Nusakambangan',
                'route_code' => 'J',
                'route_color' => '#FF33FF', // Random color
                'description' => 'Route J from Terminal Panakkukang to Nusakambangan',
            ],
            // Add more routes as needed
        ];

        foreach ($routes as $route) {
            Route::create($route);
        }
    }
}
