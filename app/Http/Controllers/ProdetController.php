<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;

class ProdetController extends Controller
{
    //
    public function index($id)
    {
        $prodet = Proyek::find('id', $id);
        return view('proyek.projects_detail', ['proyeks' => $prodet]);
    }
}