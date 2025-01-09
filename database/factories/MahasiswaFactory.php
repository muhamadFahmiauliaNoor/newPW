<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MahasiswaModel>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $faker->name,
            'nim' => $faker->unique()->numerify('############'),
            'email' => $faker->unique()->safeEmail,
            'jurusan' => $faker->word,
        ];
    }
}
