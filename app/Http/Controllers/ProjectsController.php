<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class ProjectsController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::get();
        return view('projects', ['proyeks' => $proyeks]);
    }
}