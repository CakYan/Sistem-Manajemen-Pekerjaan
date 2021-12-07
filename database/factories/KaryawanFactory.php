<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KaryawanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Karyawan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->unique()->numerify('##########'),
            'nama' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'alamat' => $this->faker->address(),
            'no_telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'password' => 'user',
            'role_id' => '3',
            'unit' => 'IGD',
            'profil_img' => 'user.png',
            'jabatan' => 'Magang'
        ];
    }
}