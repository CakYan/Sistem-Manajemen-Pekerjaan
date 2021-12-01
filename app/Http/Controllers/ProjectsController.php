<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use App\Models\Task;

class ProjectsController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        $proyeks = Proyek::all();
        return view('proyek.projects', ['proyeks' => $proyeks], ['karyawans' => $karyawans]);
    }

    public function detail_tugas(){
        return view('proyek.detail_tugas');
    }

    public function prodet($id)
    {
        $tasks = Task::with('kelas')->get();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', ['proyeks' => $prodet], ['tasks' => $tasks]);
    }
}