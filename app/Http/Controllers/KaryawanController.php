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
        $karyawans = Karyawan::all();
        return view('karyawans', compact('karyawans'));
    }

    public function add_karyawan(){
        return view('add_karyawan');
    }

    public function add(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:karyawans',
            'nama' => 'required',
            'username' => 'required|unique:karyawans',
            'alamat' => 'required',
            'email' => 'required|email|unique:karyawans',
            'no_telp' => 'required',
            'unit' => 'required',
            'jabatan' => 'required'
        ]);

        $query = DB::table('karyawans')->insert([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'unit' => $request->input('unit'),
            'no_telp' => $request->input('no_telp'),
            'jabatan' => $request->input('jabatan')
        ]);

        if ($query) {
            return back()->with('success', 'Data telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function update(Request $request, $id){
        $karyawan = Karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/daftar_karyawan')->with('success', 'Data berhasil diupdate');
        
        // $request->validate([
        //     'nik' => 'required|unique:karyawans',
        //     'nama' => 'required',
        //     'username' => 'required|unique:karyawans',
        //     'alamat' => 'required',
        //     'email' => 'required|email|unique:karyawans',
        //     'no_telp' => 'required',
        //     'unit' => 'required',
        //     'jabatan' => 'required'
        // ]);

        // $query = DB::table('karyawans')->where('id', $id)->update([
        //     'nik' => $request->input('nik'),
        //     'nama' => $request->input('nama'),
        //     'username' => $request->input('username'),
        //     'alamat' => $request->input('alamat'),
        //     'email' => $request->input('email'),
        //     'unit' => $request->input('unit'),
        //     'no_telp' => $request->input('no_telp'),
        //     'jabatan' => $request->input('jabatan')
        // ]);

        // if ($query) {
        //     return back()->with('success', 'Data telah ditambahkan');
        // } else {
        //     return back()->with('fail', 'Ada sesuatu yang salah');
        // }
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