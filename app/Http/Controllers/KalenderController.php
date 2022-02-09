<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Kalender;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KalenderController extends Controller
{
    //
    public function index()
    {
        $kalender = Kalender::all();
        return view('kalendar', compact('kalender'));
    }

    public function add(Request $request){
        $kalender = DB::table('kalenders')->insert([
            'kegiatan' => $request->input('kegiatan'),
            'mulai' => $request->input('mulai'),
            'akhir' => $request->input('akhir')
        ]);

        if ($kalender){
            return back();
        }
    }
}