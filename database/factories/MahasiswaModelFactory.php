<?php

namespace Database\Factories;

use App\Models\MahasiswaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaModelFactory extends Factory
{
    protected $model = MahasiswaModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'nim' => $this->faker->unique()->numerify('############'),
            'email' => $this->faker->unique()->safeEmail,
            'jurusan' => $this->faker->word,
            // Tambahkan kolom lainnya jika diperlukan
        ];
    }
}
