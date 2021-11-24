<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Proyek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::all();
        return view('proyek.projects', ['proyeks' => $proyeks]);
    }

    public function detail_tugas(){
        return view('proyek.detail_tugas');
    }

    public function prodet($id)
    {
        $tugas = Tugas::all();
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', ['proyeks' => $prodet], ['tugas' => $tugas]);
    }
}