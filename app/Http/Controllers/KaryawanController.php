<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Unit;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('home.index', compact('karyawans'));
    }

    public function daftar_karyawan()
    {
        $karyawans = Karyawan::with('role', 'jabatan', 'unit')->get();
        $jabatans = Jabatan::all();
        $roles = Role::all();
        $units = Unit::all();
        return view('karyawan.index', compact('karyawans', 'roles', 'jabatans', 'units'));
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
            'unit_id' => 'required',
            'jabatan_id' => 'required',
        ]);

        $query = DB::table('karyawans')->insert([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'password' => $request->input('username'),
            'unit_id' => $request->input('unit_id'),
            'no_telp' => $request->input('no_telp'),
            'jabatan_id' => $request->input('jabatan_id'),
            'role_id' => ('4'),
            'profil_img' => 'user.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

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
            'password' => 'required',
            'no_telp' => 'required',
            'unit_id' => 'required',
            'jabatan_id' => 'required',
        ]);

        $karyawan = Karyawan::where('id', $request->input('id'))->update([
            'nik' => $request->input('nik'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'unit_id' => $request->input('unit_id'),
            'no_telp' => $request->input('no_telp'),
            'jabatan_id' => $request->input('jabatan_id'),
        ]);

        if ($karyawan) {
            // dd($karyawan);
            return back()->with('update', 'Data telah diperbarui');
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