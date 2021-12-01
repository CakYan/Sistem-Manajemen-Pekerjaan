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

Route::group(['middleware' => 'user.session'], function () {
    Route::get('/home', [KaryawanController::class, 'index']);
    Route::get('/add_karyawan', [KaryawanController::class, 'add_karyawan']);
    Route::post('/add', [KaryawanController::class, 'add']);
    Route::get('/daftar_karyawan', [KaryawanController::class, 'daftar_karyawan']);
    Route::post('/update_karyawan', [KaryawanController::class, 'update'])->name('update_karyawan');
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/edit_profile', [ProfileController::class, 'edit']);
    Route::get('/delete/{id}', [KaryawanController::class, 'delete']);

    Route::get('/form', [FormController::class, 'index']);
    Route::post('/add_proyek', [FormController::class, 'add_proyek']);
    Route::get('/delete_proyek/{id}', [FormController::class, 'delete_proyek']);
    Route::get('/edit_proyek/{id}', [FormController::class, 'edit_proyek']);
    Route::post('/update_proyek', [FormController::class, 'update_proyek'])->name('update_proyek');

    Route::get('/inbox', [InboxController::class, 'index']);

    Route::get('/projects', [ProjectsController::class, 'index']);
    Route::get('/projects/projects_detail/{id}', [ProjectsController::class, 'prodet']);
    Route::get('/detail_tugas', [ProjectsController::class, 'detail_tugas']);

    Route::post('/add_tugas/{id}', [TaskController::class, 'store']);
    Route::post('/add_progres/{id}', [TaskController::class, 'add_progres']);
    Route::post('/add_selesai/{id}', [TaskController::class, 'add_selesai']);
    Route::get('/delete_task/{id}', [TaskController::class, 'destroy']);

    Route::get('/calendar', [KalenderController::class, 'index']);

    Route::get('/logout', [LoginController::class, 'logout']);
});