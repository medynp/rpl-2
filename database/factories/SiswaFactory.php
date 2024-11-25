<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $kelas = ['XI-RPL-1','XI-RPL-2','XI-TKJ','XI-DKV'];
        return [
            'nama' => fake()->name(),
            'kelas' => $kelas[array_rand($kelas)],
            'alamat' =>fake()->address() ,
        ];
    }
}
