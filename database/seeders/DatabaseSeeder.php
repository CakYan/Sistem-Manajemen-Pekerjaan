<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Task;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Proyek;
use App\Models\Status;
use App\Models\Jabatan;
use App\Models\hakAkses;
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
            'nik' => '0000000001',
            'nama' => 'Admin',
            'username' => 'admin',
            'alamat' => 'Jl. Merpati 10/09 Lamongan',
            'no_telp' => '081236471233',
            'email' => 'asep@email.com',
            'password' => 'admin',
            'role_id' => '1',
            'unit_id' => '1',
            'profil_img' => 'user.png',
            'jabatan_id' => '1'
        ]);
        
        Karyawan::create([
            'nik' => '0000000002',
            'nama' => 'Direksi',
            'username' => 'direksi',
            'alamat' => 'Jl. Made Mulyo 14/18 Lamongan',
            'no_telp' => '081554253922',
            'email' => 'direksi@email.com',
            'password' => 'direksi',
            'role_id' => '2',
            'unit_id' => '2',
            'profil_img' => '1.jpg',
            'jabatan_id' => '2'
        ]);

        Karyawan::create([
            'nik' => '0000000003',
            'nama' => 'Ketua Proyek',
            'username' => 'ketua proyek',
            'alamat' => 'Serang, Banten',
            'no_telp' => '081236475833',
            'email' => 'ketuaProyek@email.com',
            'password' => 'kp',
            'role_id' => '3',
            'unit_id' => '3',
            'profil_img' => '2.jpg',
            'jabatan_id' => '3'
        ]);

        Karyawan::create([
            'nik' => '0000000004',
            'nama' => 'Anggota Proyek',
            'username' => 'anggota proyek',
            'alamat' => 'Tidore, Maluku Utara',
            'no_telp' => '081236475144',
            'email' => 'anggotaProyek@email.com',
            'password' => 'ap',
            'role_id' => '4',
            'unit_id' => '4',
            'profil_img' => '3.jpg',
            'jabatan_id' => '4'
        ]);

        Karyawan::create([
            'nik' => '1911501012',
            'nama' => 'Febryan Akhdani',
            'username' => 'akhdan',
            'alamat' => 'Jl. Made Mulyo 14/18 Lamongan',
            'no_telp' => '081554253947',
            'email' => 'akhdan@email.com',
            'password' => 'admin123',
            'role_id' => '2',
            'unit_id' => '2',
            'profil_img' => '1.jpg',
            'jabatan_id' => '2'
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
            'unit_id' => '3',
            'profil_img' => '2.jpg',
            'jabatan_id' => '3'
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
            'unit_id' => '4',
            'profil_img' => '3.jpg',
            'jabatan_id' => '4'
        ]);

        Karyawan::factory(100)->create();

        Proyek::create([
            'nama_proyek' => 'Sistem Manajemen Pekerjaan',
            'ketua_tim' => 'Firmansyah',
            'anggota' => 'Febryan Akhdani, Evi',
            'unit_id' => '1',
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
            'hak_akses' => 'Ketua Proyek'
        ]);
        Role::create([
            'hak_akses' => 'Anggota Proyek'
        ]);

        Role::create([
            'hak_akses' => 'Kabag'
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

        Jabatan::create([
            'nama_jabatan' => 'Direktur'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Superviser'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Kabag'
        ]);

        Jabatan::create([
            'nama_jabatan' => 'Karyawan'
        ]);

        Task::create([
            'nama_task' => 'perancangan',
            'kelas_id' => '3',
            'proyek_id' => '1'
        ]);

        Unit::create([
            'nama_unit' => 'SIRS'
        ]);
        
        Unit::create([
            'nama_unit' => 'MR'
        ]);

        Unit::create([
            'nama_unit' => 'IPS'
        ]);

        Unit::create([
            'nama_unit' => 'IGD'
        ]);
    }
}