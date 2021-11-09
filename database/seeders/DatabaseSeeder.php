<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Karyawan;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        Karyawan::create([
            'nama' => 'Febryan Akhdani',
            'username' => 'akhdan',
            'email' => 'akhdan@email.com',
            'password' => 'admin123',
            'hak_akses' => '0',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'Firmansyah',
            'username' => 'firman',
            'email' => 'firman@email.com',
            'password' => 'user1',
            'hak_akses' => '1',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'D Evita',
            'username' => 'evi',
            'email' => 'evi@email.com',
            'password' => 'user2',
            'hak_akses' => '2',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nama' => 'Asep',
            'username' => '4s3p',
            'email' => 'asep@email.com',
            'password' => 'user3',
            'hak_akses' => '3',
            'unit' => 'IGD',
            'jabatan' => 'Kabag'
        ]);

        Karyawan::factory(10)->create();
    }
}