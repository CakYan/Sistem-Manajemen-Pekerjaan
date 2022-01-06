<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Kelas;
use App\Models\Proyek;
use App\Models\Status;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        // $sql = "SELECT COUNT(nama_task)FROM tasks JOIN proyeks ON tasks.proyek_id=proyeks.id;";
        $total_task = DB::table('tasks')->select('id')->join('proyeks', 'tasks.proyek_id', '=', 'proyeks.id')->count();
        $totask_selesai = DB::table('tasks')->where('kelas_id', 3)->count();
        $hasil = $totask_selesai * 100 / $total_task;
        $progres = DB::table('proyeks')->where('');
        $status = Status::all();
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with('status')->get();
        return view('proyek.projects', compact('proyeks', 'karyawans', 'status', 'totask_selesai', 'total_task', 'hasil', 'progres'));
    }

    public function detail_tugas(){
        return view('proyek.detail_tugas');
    }

    public function homeDireksi()
    {
        $total_task = DB::table('tasks')->count();
        $totask_selesai = DB::table('tasks')->where('kelas_id', 3)->count();
        $hasil = $totask_selesai * 100 / $total_task;
        $proyeks = Proyek::with('status')->get();
        return view('home.direksi', compact('proyeks', 'totask_selesai', 'total_task', 'hasil'));
    }

    public function ketuaProyek()
    {
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with('status')->get();
        return view('home.ketua_proyek', compact('proyeks', 'karyawans'));
    }

    public function anggotaProyek()
    {
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with('status')->get();
        return view('home.anggota_proyek', compact('proyeks', 'karyawans'));
    }

    public function prodet($id)
    {
        $total_task = Task::where('id', $id)->count();
        $kelas = Kelas::all();
        $tasks = Task::with('kelas')->get();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', ['proyeks' => $prodet, 'tasks' => $tasks, 'kelas' => $kelas, 'total' => $total_task]);
    }
}