<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('proyek.form', compact('karyawans'));
    }

    public function add_proyek(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required|unique:proyeks',
            'ketua_tim' => 'required',
            'anggota' => 'required',
            'unit_pengaju' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ]);

        foreach ($request->input('anggota') as $anggota) {
            $anggotanya [] = $anggota;
        }

        $anggotaMulti = implode(",",$anggotanya);
        $query = DB::table('proyeks')->insert([
            'nama_proyek' => $request->input('nama_proyek'),
            'ketua_tim' => $request->input('ketua_tim'),
            'anggota' => $anggotaMulti,
            'unit_pengaju' => $request->input('unit_pengaju'),
            'deskripsi' => $request->input('deskripsi'),
            'status_id' =>'1',
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($query) {
            return back()->with('berhasil', 'Proyek baru telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function delete_proyek($id)
    {
        DB::table('proyeks')->where('id', $id)->delete();
        return redirect('/projects');
    }

    // public function edit_proyek($id)
    // {
    //     $proyek = DB::table('proyeks')
    //     ->join('karyawans', 'proyeks.anggota', '=', 'karyawans.id')->get();
    // }

    public function update_proyek(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'ketua_tim' => 'required',
            'anggota' => 'required',
            'unit_pengaju' => 'required',
            'deskripsi' => 'required',
            'status_id' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ]);

        $proyek = Proyek::where('id', $request->input('id'))->update([
            'nama_proyek' => $request->input('nama_proyek'),
            'ketua_tim' => $request->input('ketua_tim'),
            'anggota' => $request->input('anggota'),
            'unit_pengaju' => $request->input('unit_pengaju'),
            'deskripsi' => $request->input('deskripsi'),
            'status_id' => $request->input('status_id'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir'),
            'updated_at' => now()
        ]);
        
        if ($proyek) {
            return back()->with('update', 'Data telah diperbarui');
        } else {
            return back()->with('gagal_update', 'Gagal memperbarui data');
        }
    }
}