<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Karyawan;
use App\Models\Proyek;
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
            'nik' => '1911501012',
            'nama' => 'Febryan Akhdani',
            'username' => 'akhdan',
            'alamat' => 'Jl. Made Mulyo 14/18 Lamongan',
            'no_telp' => '081554253947',
            'email' => 'akhdan@email.com',
            'password' => 'admin123',
            'hak_akses' => '0',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nik' => '1911501006',
            'nama' => 'Firmansyah',
            'username' => 'firman',
            'alamat' => 'Serang, Banten',
            'no_telp' => '081236475869',
            'email' => 'firman@email.com',
            'password' => 'user1',
            'hak_akses' => '1',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nik' => '1911501015',
            'nama' => 'D Evita',
            'username' => 'evi',
            'alamat' => 'Tidore, Maluku Utara',
            'no_telp' => '081236475121',
            'email' => 'evi@email.com',
            'password' => 'user2',
            'hak_akses' => '2',
            'unit' => 'SIRS',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nik' => '1911501019',
            'nama' => 'Asep',
            'username' => '4s3p',
            'alamat' => 'Jl. Merpati 10/09 Lamongan',
            'no_telp' => '081236471233',
            'email' => 'asep@email.com',
            'password' => 'user3',
            'hak_akses' => '3',
            'unit' => 'IGD',
            'jabatan' => 'Kabag'
        ]);

        Karyawan::factory(100)->create();

        Proyek::create([
            'nama_proyek' => 'Sistem Manajemen Pekerjaan',
            'ketua_tim' => 'Febryan Akhdani',
            'anggota' => 'Firmansyah, Evi',
            'unit_pengaju' => 'SIRS',
            'deskripsi' => 'Sistem Manajemen Pekerjaan adalah ...',
            'tgl_mulai' => '2021-10-04',
            'tgl_akhir' => '2022-02-12'
        ]);
    }
}