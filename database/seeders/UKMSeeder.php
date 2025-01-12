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
            'nama' => 'Olah Raga',
            'nama_ketua' => 'Faang',
            'angkatan' => '2023',
            'image' => 'storage/olahragaukm.png',
        ]);
        \App\Models\UKM::create([
            'nama' => 'Kerohanian',
            'nama_ketua' => 'Hizaz',
            'angkatan' => '2022',
            'image' => 'storage/kerohanian.png',
        ]);
        \App\Models\UKM::create([
            'nama' => 'Terasi',
            'nama_ketua' => 'Cecep',
            'angkatan' => '2022',
            'image' => 'storage/terasi.png',
        ]);
        \App\Models\UKM::create([
            'nama' => 'Proclub',
            'nama_ketua' => 'Aang',
            'angkatan' => '2021',
            'image' => 'storage/proclub.png',
        ]);
    }
}
