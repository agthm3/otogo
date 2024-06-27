<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Street;

class StreetsTableSeeder extends Seeder
{
    public function run()
    {
        $streets = [
            'BTN Minasa Upa', 'Syech Yusuf', 'Sultan Alauddin', 'Andi Tonro', 'Kumala', 'Ratulangi', 'Jendral Sudiriman (Karebosi Timur)', 'HOS Cokroaminoto (Sentral)', 'KH. Wahid Hasyim', 'Wahidin Sudirohusodo', 'Pasar Butung',
            'Sulawesi', 'Riburane Achmad Yani (Balaikota)', 'Landak', 'Veteran', 
            'Terminal Tamalate', 'Malengkeri', 'Daeng Tata', 'Abdul Kadir', 'Dangko', 'Cendrawasih', 'Arief Rate', 'Sultan Hasanuddin', 'Patimura', 'Ujungpandang', 'Jendral Achmad Yani (Balaikota)', 
            'Achmad Yani', 'Kajaolalido (Karebosi Timur)', 'Botolempangan',
            'KH.Wahid.Hasyim', 'DR Wahidin Sudirohusodo- Buru', 'Bandang', 'Masjid Raya', 'Cumi-cumi', 'Pongtiku', 'Ujungpandang Baru', 'Gatot Subroto', 'Juanda', 'Regge', 'Rappokalling', 
            'Korban 40 ribu', 'Datok Ditiro', 'Sunu', 'Makassar Mall', 
            'Terminal Daya', 'Perintis Kemerdekaan', 'Urip Sumoharjo', 'AP. Pettarani', 'Bawakaraeng', 'Latimojong', 'Andalas', 'Laiya', 'Selatan Makassar Mall', 'Bulusaraung',
            'Terminal Panakkukang', 'Toddoppuli', 'Tamalate', 'Emmy Saelan', 'Mapala', 'Maccini Raya', 'Latimojong', 'Laiya', 'KH.Agus Salim', 'Timur Makassar Mall', 'Pangeran Diponegoro', 'Bandang', 'AP. Pettarani',
            'Mallengkeri', 'Daeng Ngeppe', 'Satangnga', 'Pangeran Diponegoro', 'Bandung', 'Sultan Alauddin', 
            'Kima', 'TOL (Ir. Sutami)', 'Tinumbu', 'Cakalang', 'Yos Sudarso', 'Tentara Pelajar', 'Kalimantan', 
            'Perumnas Antang', 'Antang Raya', 'Urip Sumiharjo', 'DR. Wahidin Sudirohusodo', 'Satando', 
            'Toddopuli Raya', 'Borong', 'Batua Raya', 'Abdullah Daeng Sirua', 'Pelita Raya', 'Sungai Sadang Baru', 'Sungai Saddang', 'Karungrung', 'Arif Rate', 'Pattimura', 'Pasar Baru', 'Nusakambangan', 
            'Ahmad Yani', 'DR. Sam Ratulangi', 'Sultan Alaudin', 'Taman Makam Pahlawan', 'Adiyaksa', 'Mallong Bassang', 'Mappaoddang', 'Mangerangi', 'Baji Ateka', 'Baji Minasa', 'Nuri', 'Rajawali', 'Penghibur', 'Pasar Ikan', 'Nusantara', 'Butung',
            'Somba Opu', 'Gagak', 'Cendrawasih', 'Dangko', 'Abd. Kadir', 'Tanjung Alang', 'Tanjung Rangas', 'Kakatua', 'Landak', 
            'Syeh Yusuf', 'Jipang Raya', 'SMA 9', 'Tidung Raya', 'Tala Salapang', 'Pengayoman', 'Bawakaraeng', 'Veteran Utara', 'Tarakan', 'Landak Baru', 'DR. Sam Ratulangi', 'Mappaoddang', 
            'Pasar Pannampu', 'Bulukunyi', 'Rusa', 'Lanto Dg. Pasewang', 'DR. Sam. Ratulangi', 'Pasar Baru', 'Tentara Pelajar', 'Usman Jafar', 'Terminal Daya', 'Paccerakkang', 'Mangga Tiga', 'Sudiang', 'KNPI', 'Mongcongloe', 'Pangnyangkallang', 
            'Kapasa', 'SMA 6', 'Salodong', 'Desa Nelayan', 'M. Tahir', 'AP. Pettarani', 'Abubakar Lambogo', 'Pettarani', 'Gunung Sari', 'PLTU',
            'Kartini', 'Botolempangan', 'Teuku Umar', 'Gatot Subroto'
        ];

        foreach ($streets as $streetName) {
            Street::firstOrCreate(['name' => $streetName]);
        }
    }
}
