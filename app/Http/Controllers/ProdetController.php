<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdetController extends Controller
{
    //
    public function index()
    {
        return view('projects_detail');
    }
}