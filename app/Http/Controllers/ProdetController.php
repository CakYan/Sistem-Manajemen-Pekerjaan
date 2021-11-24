<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProdetController extends Controller
{
    //
    public function index($id)
    {
        $prodet = Proyek::where('id', $id)->first();
        return view('proyek.projects_detail', ['proyeks' => $prodet]);
    }
}