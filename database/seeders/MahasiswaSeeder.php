<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\MahasiswaModel;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MahasiswaModel::factory()->count(50)->create(); // Sesuaikan jumlah seeder sesuai kebutuhan
    }
}
