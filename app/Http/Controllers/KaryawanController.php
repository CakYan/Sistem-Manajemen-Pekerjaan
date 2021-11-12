<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('index', compact('karyawans'));
    }

    public function daftar_karyawan()
    {
        $karyawans = Karyawan::paginate(10);
        return view('karyawans', compact('karyawans'));
    }

    public function cari_karyawan(Request $request){
        $cari = $request->cari;

        $karyawans = DB::table('karyawans')->where('nama','like',"%".$cari."%")->paginate(10);
        return view('karyawans', ['karyawans'=>$karyawans]);
    }

    public function add(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'username' => 'required|unique:karyawans',
            'email' => 'required|email|unique:users',
            'unit' => 'required',
            'jabatan' => 'required'
        ]);

        $query = DB::table('karyawans')->insert([
            'id' => $request->input('id'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'unit' => $request->input('unit'),
            'jabatan' => $request->input('jabatan'),
            'email' => $request->input('email')
        ]);

        if ($query) {
            return back()->with('success', 'Data telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }
}



// /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Karyawan  $karyawan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Karyawan $karyawan)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Karyawan  $karyawan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Karyawan $karyawan)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Karyawan  $karyawan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Karyawan $karyawan)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Karyawan  $karyawan
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Karyawan $karyawan)
    // {
    //     //
    // }