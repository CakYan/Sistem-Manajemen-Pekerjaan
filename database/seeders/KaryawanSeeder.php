<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Karyawan::factory(10)->create();

        Karyawan::create([
            'nama' => 'Febryan Akhdani',
            'username' => 'akhdan',
            'email' => 'akhdan@email.com',
            'hak_akses' => '0',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'Firmansyah',
            'username' => 'firman',
            'email' => 'firman@email.com',
            'hak_akses' => '1',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'D Evita',
            'username' => 'evi',
            'email' => 'evi@email.com',
            'hak_akses' => '2',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'Asep',
            'username' => '4s3p',
            'email' => 'asep@email.com',
            'hak_akses' => '3',
            'unit' => 'IGD',
            'jabatan' => 'Kabag'
        ]);
    }
}