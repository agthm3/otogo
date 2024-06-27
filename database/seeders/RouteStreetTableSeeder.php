<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;
use App\Models\Street;
use App\Models\RouteStreet;

class RouteStreetTableSeeder extends Seeder
{
    public function run()
    {
        $routes = [
            'A' => [
                'depart' => ['BTN Minasa Upa', 'Syech Yusuf', 'Sultan Alauddin', 'Andi Tonro', 'Kumala', 'Ratulangi', 'Jendral Sudiriman (Karebosi Timur)', 'HOS Cokroaminoto (Sentral)', 'KH. Wahid Hasyim', 'Wahidin Sudirohusodo', 'Pasar Butung'],
                'return' => ['Pasar Butung', 'Sulawesi', 'Riburane Achmad Yani (Balaikota)', 'Jendral Sudirman', 'Ratulangi (MaRI)', 'Landak', 'Veteran', 'Sultan Alauddin', 'Syech Yusuf', 'BTN Minasa Upa']
            ],
            'B' => [
                'depart' => ['Terminal Tamalate', 'Malengkeri', 'Daeng Tata', 'Abdul Kadir', 'Dangko', 'Cendrawasih', 'Arief Rate', 'Sultan Hasanuddin', 'Patimura', 'Ujungpandang', 'Riburane', 'Jendral Achmad Yani (Balaikota)', 'Pasar Butung'],
                'return' => ['Pasar Butung', 'Sulawesi', 'Achmad Yani', 'Kajaolalido (Karebosi Timur)', 'Botolempangan', 'Arief Rate', 'Cendrawasih', 'Dangko', 'Abdul Kadir', 'Daeng Tata', 'Malengkeri', 'Terminal Tamalate']
            ],
            'C' => [
                'depart' => ['KH.Wahid.Hasyim', 'DR Wahidin Sudirohusodo- Buru', 'Bandang', 'Masjid Raya', 'Cumi-cumi', 'Pongtiku', 'Ujungpandang Baru', 'Gatot Subroto', 'Juanda', 'Regge', 'Rappokalling'],
                'return' => ['Rappokalling', 'Korban 40 ribu', 'Juanda', 'Gatot Subroto', 'Ujungpandang Baru', 'Pongtiku', 'Datok Ditiro', 'Sunu', 'Masjid Raya', 'Bawakaraeng', 'Jenderal Sudirman', 'HOS Cokroaminoto', 'KH.Wahid Hasyim', 'Makassar Mall']
            ],
            'D' => [
                'depart' => ['Terminal Daya', 'Perintis Kemerdekaan', 'Urip Sumoharjo', 'AP. Pettarani', 'Bawakaraeng', 'Latimojong', 'Andalas', 'Laiya', 'Selatan Makassar Mall'],
                'return' => ['Selatan Makassar Mall', 'HOS Cokroaminoto', 'Bulusaraung', 'Masjid Raya', 'Urip Sumoharjo', 'Perintis Kemerdekaan', 'Terminal Daya']
            ],
            'E' => [
                'depart' => ['Terminal Panakkukang', 'Toddoppuli', 'Tamalate', 'Emmy Saelan', 'Mapala', 'AP. Pettarani', 'Maccini Raya', 'Urip Sumoharjo', 'Bawakaraeng', 'Latimojong', 'Andalas', 'Laiya', 'KH.Agus Salim', 'Timur Makassar Mall'],
                'return' => ['KH. Agus Salim', 'Pangeran Diponegoro', 'Bandang', 'Masjid Raya', 'Urip Sumoharjo', 'AP. Pettarani', 'Mapala', 'Emmy Saelan', 'Tamalate', 'Toddoppuli', 'Terminal Panakkukang']
            ],
            'F' => [
                'depart' => ['Terminal Tamalate', 'Mallengkeri', 'Daeng Tata', 'Daeng Ngeppe', 'Kumala', 'Veteran', 'Bandang', 'Buru', 'Andalas', 'Satangnga', 'KH. Agus Salim', 'Timur Makassar Mall'],
                'return' => ['KH Agus Salim', 'Pangeran Diponegoro', 'Andalas', 'Buru', 'Bandung', 'Veteran', 'Sultan Alauddin', 'Andi Tonro', 'Kumala', 'Daeng Ngeppe', 'Daeng Tata', 'Mallengkeri', 'Terminal Tamalate']
            ],
            'G' => [
                'depart' => ['Terminal Daya', 'Kima', 'TOL (Ir. Sutami)', 'Tinumbu', 'Cakalang', 'Yos Sudarso', 'Tentara Pelajar', 'Kalimantan', 'Pasar Butung'],
                'return' => ['Pasar Butung', 'Kalimantan', 'Cakalang', 'Tinumbu', 'TOL (Ir. Sutami)', 'Kima', 'Terminal Daya']
            ],
            'H' => [
                'depart' => ['Perumnas Antang', 'Antang Raya', 'Urip Sumiharjo', 'Bawakaraeng', 'Jenderal Sudirman', 'DR. Wahidin Sudirohusodo', 'Satando', 'Kalimantan', 'Pasar Butung'],
                'return' => ['Pasar Butung', 'Kalimantan', 'Satando', 'DR. Wahidin Sudirohusodo', 'Tentara Pelajar', 'Ujung', 'Bandang', 'Masjid Raya', 'Perumnas Antang']
            ],
            'I' => [
                'depart' => ['Terminal Panakkukang', 'Toddopuli Raya', 'Borong', 'Batua Raya', 'Abdullah Daeng Sirua', 'AP. Pettarani', 'Pelita Raya', 'Sungai Sadang Baru', 'Sungai Saddang', 'Karungrung', 'Arif Rate', 'Sultan Hasanuddin', 'Pattimura', 'Pasar Baru'],
                'return' => ['Pasar Baru', 'Pattimura', 'Ujungpandang', 'Riburane', 'Ahmad Yani (Balaikota)', 'Kajaolalido', 'Botolempangan', 'Karungrung', 'Sungai Saddang', 'Sungai Saddang Baru', 'Pelita Raya', 'AP. Pettarani', 'Abdullah Daeng Sirua', 'Batua Raya', 'Borong', 'Toddopuli Raya', 'Terminal Panakkukang']
            ],
            'J' => [
                'depart' => ['Terminal Panakkukang', 'Toddopuli Raya', 'Tamalate', 'Emmy Saelan', 'Sultan Alauddin', 'Andi Tonro', 'Kumala', 'Ratulangi', 'Jenderal Sudirman', 'HOS Cokroaminoto', 'Nusakambangan'],
                'return' => ['Nusakambangan', 'Ahmad Yani', 'Jenderal Sudirman', 'DR. Sam Ratulangi', 'Landak', 'Veteran', 'Sultan Alaudin', 'Emmy Saelan', 'Tamalate', 'Toddopuli Raya', 'Terminal Panakkukang']
            ],
            // Add more routes as needed
        ];

        foreach ($routes as $code => $streets) {
            $route = Route::where('route_code', $code)->first();

            if (!$route) {
                $this->command->error("Route with code $code not found!");
                continue;
            }

            foreach ($streets['depart'] as $streetName) {
                $street = Street::where('name', trim($streetName))->first();

                if (!$street) {
                    $this->command->error("Street with name $streetName not found!");
                    continue;
                }

                RouteStreet::create([
                    'route_id' => $route->id,
                    'street_id' => $street->id,
                    'type' => 'depart'
                ]);
            }

            foreach ($streets['return'] as $streetName) {
                $street = Street::where('name', trim($streetName))->first();

                if (!$street) {
                    $this->command->error("Street with name $streetName not found!");
                    continue;
                }

                RouteStreet::create([
                    'route_id' => $route->id,
                    'street_id' => $street->id,
                    'type' => 'return'
                ]);
            }
        }
    }
}
