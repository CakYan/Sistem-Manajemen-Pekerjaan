<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::get();
        $proyeks = Proyek::all();
        return view('profile', compact('proyeks'));
    }

    public function edit()
    {
        return view('edit_profile');
    }
}