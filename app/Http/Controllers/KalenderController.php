<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    //
    public function index()
    {
        $proyek = Proyek::all();
        return view('calendar', compact('proyek'));
    }
}