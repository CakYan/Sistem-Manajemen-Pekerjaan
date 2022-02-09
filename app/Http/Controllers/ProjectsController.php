<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use App\Models\File;
use App\Models\Task;
use App\Models\Unit;
use App\Models\Kelas;
use App\Models\Proyek;
use App\Models\Status;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ProjectsController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        $status = Status::all();
        $karyawans = Karyawan::all();
        $proyeks = Proyek::with(['status', 'task', 'unit'])->get();

        for ($i=0; $i < count($proyeks) ; $i++) { 
            # code...
            $tasks = isset($proyeks[$i]['task']) ? $proyeks[$i]['task'] : [];
            $totalTask = count($tasks);
            $finishedTask = 0;
            
            foreach ($tasks as $task) {
                if ($task['kelas_id'] == 3) {
                    $finishedTask++;
                }
            }

            $proyeks[$i]['finishedTask'] = $finishedTask;
            $proyeks[$i]['totalTask'] = count($tasks);
        }
        return view('proyek.projects', compact('proyeks', 'karyawans', 'status', 'units'));
    }

    public function homeDireksi()
    {
        $proyeks = Proyek::with(['status', 'task'])->get();

        for ($i=0; $i < count($proyeks) ; $i++) { 
            # code...
            $tasks = isset($proyeks[$i]['task']) ? $proyeks[$i]['task'] : [];
            $totalTask = count($tasks);
            $finishedTask = 0;
            
            foreach ($tasks as $task) {
                if ($task['kelas_id'] == 3) {
                    $finishedTask++;
                }
            }

            $proyeks[$i]['finishedTask'] = $finishedTask;
            $proyeks[$i]['totalTask'] = count($tasks);
        }
        return view('home.direksi', compact('proyeks'));
    }

    public function ketuaProyek()
    {
        $proyeks = Proyek::with(['status', 'task'])->get();

        for ($i=0; $i < count($proyeks) ; $i++) { 
            # code...
            $tasks = isset($proyeks[$i]['task']) ? $proyeks[$i]['task'] : [];
            $totalTask = count($tasks);
            $finishedTask = 0;
            
            foreach ($tasks as $task) {
                if ($task['kelas_id'] == 3) {
                    $finishedTask++;
                }
            }

            $proyeks[$i]['finishedTask'] = $finishedTask;
            $proyeks[$i]['totalTask'] = count($tasks);
        }
        $karyawans = Karyawan::all();
        return view('home.ketua_proyek', compact('proyeks', 'karyawans'));
    }

    public function anggotaProyek()
    {
        $proyeks = Proyek::with(['status', 'task'])->get();

        for ($i=0; $i < count($proyeks) ; $i++) { 
            # code...
            $tasks = isset($proyeks[$i]['task']) ? $proyeks[$i]['task'] : [];
            $totalTask = count($tasks);
            $finishedTask = 0;
            
            foreach ($tasks as $task) {
                if ($task['kelas_id'] == 3) {
                    $finishedTask++;
                }
            }

            $proyeks[$i]['finishedTask'] = $finishedTask;
            $proyeks[$i]['totalTask'] = count($tasks);
        }
        $karyawans = Karyawan::all();
        return view('home.anggota_proyek', compact('proyeks', 'karyawans'));
    }

    public function prodet($id)
    {
        $files = File::all();
        $kelas = Kelas::all();
        $tasks = Task::with('kelas')->get();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', compact('files', 'kelas', 'tasks', 'prodet'));
    }

    public function download($id){
        $files=File::where('id', $id)->firstOrFail();
        $file=public_path('data_file/'. $files->file);
        return response()->download($file);
    }
}