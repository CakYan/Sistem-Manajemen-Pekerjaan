<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Proyek;
use App\Models\Status;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kelas;

class ProjectsController extends Controller
{
    public function index()
    {
        $status = Status::all();
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with('status')->get();
        return view('proyek.projects', compact('proyeks', 'karyawans', 'status'));
    }

    public function detail_tugas(){
        return view('proyek.detail_tugas');
    }

    public function homeDireksi()
    {
        $proyeks = Proyek::with('status')->get();
        return view('home.direksi', compact('proyeks'));
    }

    public function ketuaProyek()
    {
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with('status')->get();
        return view('home.ketua_proyek', compact('proyeks', 'karyawans'));
    }

    public function prodet($id)
    {
        $kelas = Kelas::all();
        $tasks = Task::with('kelas')->get();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', ['proyeks' => $prodet, 'tasks' => $tasks, 'kelas' => $kelas]);
    }
}