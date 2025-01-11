<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UKM;

class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UKM::create([
            'nama_ukm' => 'Olah Raga',
            'nama_ketua' => 'Faang',
            'angkatan' => '2023',
        ]);
        \App\Models\UKM::create([
            'nama_ukm' => 'Kerohanian',
            'nama_ketua' => 'Hizaz',
            'angkatan' => '2022',
        ]);
        \App\Models\UKM::create([
            'nama_ukm' => 'Terasi',
            'nama_ketua' => 'Cecep',
            'angkatan' => '2022',
        ]);
        \App\Models\UKM::create([
            'nama_ukm' => 'Proclub',
            'nama_ketua' => 'Aang',
            'angkatan' => '2021',
        ]);
    }
}
