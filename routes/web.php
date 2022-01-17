<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TaskController;
use Illuminate\Routing\RouteGroup;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'index']);
Route::post('/login_cek', [LoginController::class, 'authenticate']);

// ----------------------------// CEK LOGIN //------------------------//
Route::group(['middleware' => 'cekLogin'], function () {
    // Route::get('/daftar_karyawan', [KaryawanController::class, 'daftar_karyawan']);
    // Route::get('/home', [KaryawanController::class, 'index']);
    // Route::post('/add_karyawan', [KaryawanController::class, 'add']);
    // Route::post('/update_karyawan', [KaryawanController::class, 'update'])->name('update_karyawan');
    // Route::get('/delete/{id}', [KaryawanController::class, 'delete']);
    // Route::get('/homeDireksi', [ProjectsController::class, 'homeDireksi']);
    // Route::get('/homeKetuaProyek', [ProjectsController::class, 'ketuaProyek']);
    // Route::get('/projects', [ProjectsController::class, 'index']);
    // Route::get('/detail_tugas', [ProjectsController::class, 'detail_tugas']);
    // Route::get('/delete_proyek/{id}', [FormController::class, 'delete_proyek']);
    // Route::get('/edit_proyek/{id}', [FormController::class, 'edit_proyek']);
    // Route::post('/update_proyek', [FormController::class, 'update_proyek'])->name('update_proyek');
    // Route::get('/form', [FormController::class, 'index']);
    // Route::post('/add_proyek', [FormController::class, 'add_proyek']);
    // Route::get('/projects/projects_detail/{id}', [ProjectsController::class, 'prodet']);
    // Route::get('/homeAnggotaProyek', [ProjectsController::class, 'anggotaProyek']);
    // Route::post('/add_tugas/{id}', [TaskController::class, 'store']);
    // Route::post('/add_progres/{id}', [TaskController::class, 'add_progres']);
    // Route::post('/add_selesai/{id}', [TaskController::class, 'add_selesai']);
    // Route::get('/delete_task/{id}', [TaskController::class, 'destroy']);
    // Route::post('/update_task', [TaskController::class, 'update'])->name('update_task');
    // Route::get('/calendar', [KalenderController::class, 'index']);
    // Route::get('/inbox', [InboxController::class, 'index']);
    // Route::get('/profile', [ProfileController::class, 'index']);
    // Route::get('/edit_profile', [ProfileController::class, 'edit']);
    // Route::get('/error', [LoginController::class, 'error']);    
    // Route::get('/logout', [LoginController::class, 'logout']);
    
    // ADMIN //
    Route::group(['middleware' => ['admin']], function (){
        Route::get('/daftar_karyawan', [KaryawanController::class, 'daftar_karyawan']);
        Route::get('/home', [KaryawanController::class, 'index']);
        Route::post('/add_karyawan', [KaryawanController::class, 'add']);
        Route::post('/update_karyawan', [KaryawanController::class, 'update'])->name('update_karyawan');
        Route::get('/delete/{id}', [KaryawanController::class, 'delete']);
    });
    // CEK AKSES (DIREKSI, KETUA PROYEK, DAN KABAG) //
    Route::group(['middleware' => 'cekAkses'], function (){
        Route::get('/projects', [ProjectsController::class, 'index']);
        Route::get('/delete_proyek/{id}', [FormController::class, 'delete_proyek']);
    });
    // CEK AKSES 2 (KETUA PROYEK DAN ANGGOTA PROYEK) //
    Route::group(['middleware' => 'cekAkses2'], function (){
        Route::get('/projects/projects_detail/{id}', [ProjectsController::class, 'prodet']);
        Route::post('/add_tugas/{id}', [TaskController::class, 'store']);
        Route::post('/add_progres/{id}', [TaskController::class, 'add_progres']);
        Route::post('/add_selesai/{id}', [TaskController::class, 'add_selesai']);
        Route::get('/delete_task/{id}', [TaskController::class, 'destroy']);
        Route::post('/update_task', [TaskController::class, 'update'])->name('update_task');
    });
    // CEK AKSES 3 (DIREKSI DAN KABAG) //
    Route::group(['middleware' => 'cekAkses3'], function (){
        Route::get('/form', [FormController::class, 'index']);
        Route::post('/add_proyek', [FormController::class, 'add_proyek']);
        Route::post('/update_proyek', [FormController::class, 'update_proyek'])->name('update_proyek');
    });

    Route::group(['middleware' => 'direksi'], function (){
        Route::get('/homeDireksi', [ProjectsController::class, 'homeDireksi']);
    });
    Route::group(['middleware' => 'ketuaProyek'], function (){
        Route::get('/homeKetuaProyek', [ProjectsController::class, 'ketuaProyek']);
    });
    Route::group(['middleware' => 'anggotaProyek'], function (){
        Route::get('/homeAnggotaProyek', [ProjectsController::class, 'anggotaProyek']);
    });
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/calendar', [KalenderController::class, 'index']);
    Route::get('/inbox', [InboxController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/edit_profile', [ProfileController::class, 'edit']);
    Route::get('/error', [LoginController::class, 'error']);
    Route::post('/upload/proses', [ProjectsController::class, 'proses_upload']);
    Route::get('/download/pdf/{id}', [ProjectsController::class, 'download']);
});