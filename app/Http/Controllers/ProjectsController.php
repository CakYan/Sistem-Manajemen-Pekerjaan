<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class ProjectsController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::all();
        return view('projects', ['proyeks' => $proyeks]);
    }

    public function detail_tugas(){
        return view('detail_tugas');
    }
}