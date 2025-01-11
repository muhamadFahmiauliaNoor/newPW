<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'public/storage/lapangan_olahraga.png',
            'public/storage/mesjid.png',
            'public/storage/perpustakaan.png',
        ];

        \App\Models\Facility::create([
            'name' => 'Lapangan Olahraga',
            'description' => 'Lapangan olahraga yang luas dan modern.',
            'image' => $images[0],
        ]);
        \App\Models\Facility::create([
            'name' => 'Mesjid',
            'description' => 'Mesjid yang besar dan bersih.',
            'image' => $images[1],

        ]);
        \App\Models\Facility::create([
            'name' => 'Perpustakaan',
            'description' => 'Perpustakaan yang lengkap dengan berbagai koleksi buku.',
            'image' => $images[2],
        ]);
    }
}
