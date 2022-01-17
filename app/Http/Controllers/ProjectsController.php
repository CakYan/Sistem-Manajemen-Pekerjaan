<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use App\Models\Task;
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
        $pdfs=Pdf::all();
        $status = Status::all();
        $karyawans = Karyawan::all();
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
        return view('proyek.projects', compact('proyeks', 'karyawans', 'status', 'pdfs'));
    }

    public function detail_tugas(){
        return view('proyek.detail_tugas');
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
        $pdfs=Pdf::all();
        $kelas = Kelas::all();
        $tasks = Task::with('kelas')->get();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', compact('pdfs', 'kelas', 'tasks', 'prodet'));
    }

    public function getIconAttribute() {
    $extensions = [
        'jpg' => 'jpeg.png',
        'png' => 'png.png',
        'pdf' => 'pdfdocument.png',
        'doc' => 'wordicon.jpg',
    ];
    return redirect($extensions, $this->extension,'unknown.png');
    }
    
    public function proses_upload(Request $request){
        $pdfs=Pdf::all();
        $pdfs=Pdf::create($request->all());

        if($request->hasFile('file')){
            $request->file('file')->move('data_file/', $request->file('file')->getClientOriginalName());
            $pdfs->file=$request->file('file')->getClientOriginalName();
            $pdfs->save();
        }
        return redirect()->back();
    }

    public function download($id){
        $pdfs=Pdf::where('id', $id)->firstOrFail();
        $file=public_path('data_file/'. $pdfs->file);
        return response()->download($file);
    }
}