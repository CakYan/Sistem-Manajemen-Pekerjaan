<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $proyek = Proyek::get();
        return view('form');
    }

    public function add_proyek(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required|unique:proyeks',
            'ketua_tim' => 'required',
            'anggota' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ]);

        $query = DB::table('proyeks')->insert([
            'nama_proyek' => $request->input('nama_proyek'),
            'ketua_tim' => $request->input('ketua_tim'),
            'anggota' => $request->input('anggota'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir')
        ]);

        if ($query) {
            return back()->with('success', 'Proyek baru telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function delete_proyek($nama_proyek)
    {
        DB::table('proyeks')->where('nama_proyek', $nama_proyek)->delete();
        return redirect('/projects');
    }

    public function edit_proyek($nama_proyek)
    {
        // dd($nama_proyek);
        $proyek = DB::table('proyeks')->where('nama_proyek', $nama_proyek)->first();
        // dd($proyek);
        return view('/edit_proyek', ['proyeks' => $proyek]);
    }

    // public function update_proyek($nama_proyek, Request $request)
    // {
    //     $this->validate($request[

    //     ]);
    // }
}