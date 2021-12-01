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
        $karyawans = Karyawan::with('role')->get();
        return view('karyawan.index', compact('karyawans'));
    }

    public function add_karyawan(){
        return view('karyawan.add_karyawan');
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
            'jabatan' => 'required',
            'role_id' => 'required'
        ]);

        $query = DB::table('karyawans')->insert([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'unit' => $request->input('unit'),
            'no_telp' => $request->input('no_telp'),
            'jabatan' => $request->input('jabatan'),
            'role_id' => $request->input('role_id')
        ]);

        // if ($query) {
        //     dd($query);
        // }
        if ($query) {
            return back()->with('berhasil', 'Data telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function update(Request $request){
        
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'unit' => 'required',
            'jabatan' => 'required',
        ]);

        $karyawan = Karyawan::where('id', $request->input('id'))->update([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'unit' => $request->input('unit'),
            'no_telp' => $request->input('no_telp'),
            'jabatan' => $request->input('jabatan'),
        ]);

        if ($karyawan) {
            return back()->with('berhasil', 'Data telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function delete($id){
        Karyawan::where('id', $id)->delete();
        return back();
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