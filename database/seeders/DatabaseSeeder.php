<?php

namespace Database\Seeders;

use App\Models\hakAkses;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Kelas;
use App\Models\Proyek;
use App\Models\Role;
use App\Models\Status;
use App\Models\Task;
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
            'role_id' => '2',
            'unit' => 'SIRS',
            'profil_img' => '1.jpg',
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
            'role_id' => '3',
            'unit' => 'SIRS',
            'profil_img' => '2.jpg',
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
            'role_id' => '4',
            'unit' => 'SIRS',
            'profil_img' => '3.jpg',
            'jabatan' => 'Magang'
        ]);

        Karyawan::create([
            'nik' => '0000000001',
            'nama' => 'admin',
            'username' => 'admin',
            'alamat' => 'Jl. Merpati 10/09 Lamongan',
            'no_telp' => '081236471233',
            'email' => 'asep@email.com',
            'password' => 'admin',
            'role_id' => '1',
            'unit' => 'IGD',
            'profil_img' => 'user.png',
            'jabatan' => 'Kabag'
        ]);

        Karyawan::factory(100)->create();

        Proyek::create([
            'nama_proyek' => 'Sistem Manajemen Pekerjaan',
            'ketua_tim' => 'Febryan Akhdani',
            'anggota' => 'Firmansyah, Evi',
            'unit_pengaju' => 'SIRS',
            'deskripsi' => 'Sistem Manajemen Pekerjaan adalah ...',
            'status_id' => '1',
            'tgl_mulai' => '2021-10-04',
            'tgl_akhir' => '2022-02-12'
        ]);

        Role::create([
            'hak_akses' => 'admin'
        ]);
        Role::create([
            'hak_akses' => 'Direktur'
        ]);
        Role::create([
            'hak_akses' => 'Ketua Tim'
        ]);
        Role::create([
            'hak_akses' => 'Anggota Tim'
        ]);

        Role::create([
            'hak_akses' => 'Input Master'
        ]);

        Kelas::create([
            'kelas' => 'Tugas'
        ]);

        Kelas::create([
            'kelas' => 'Progres'
        ]);

        Kelas::create([
            'kelas' => 'Selesai'
        ]);

        Status::create([
            'nama_status' => 'Not On Progress'
        ]);
        
        Status::create([
            'nama_status' => 'On Progress'
        ]);

        Status::create([
            'nama_status' => 'Cancel'
        ]);

        Status::create([
            'nama_status' => 'Pending'
        ]);

        Status::create([
            'nama_status' => 'Done'
        ]);
    }
}