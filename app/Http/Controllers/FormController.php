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
        return view('form');
    }

    public function add_proyek(Request $request)
    {
        $karyawans = Karyawan::all();

        $request->validate([
            'nama_proyek' => 'required|unique:proyeks',
            'ketua_tim' => 'required',
            'anggota' => 'required',
            'unit_pengaju' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ]);

        $query = DB::table('proyeks')->insert([
            'nama_proyek' => $request->input('nama_proyek'),
            'ketua_tim' => $request->input('ketua_tim'),
            'anggota' => $request->input('anggota'),
            'unit_pengaju' => $request->input('unit_pengaju'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if ($query) {
            return back()->with('success', 'Proyek baru telah ditambahkan');
        } else {
            return back()->with('fail', 'Ada sesuatu yang salah');
        }
    }

    public function delete_proyek($id)
    {
        DB::table('proyeks')->where('id', $id)->delete();
        return redirect('/projects');
    }

    public function edit_proyek($id)
    {
        $proyek = DB::table('proyeks')->where('id', $id)->first();
        $karyawans = Karyawan::first();
        return view('/edit_proyek', ['proyeks' => $proyek], compact('karyawans'));
    }

    public function update_proyek(Request $request)
    {
        $request->validate([
            'nama_proyek' => 'required',
            'ketua_tim' => 'required',
            'anggota' => 'required',
            'unit_pengaju' => 'required',
            'deskripsi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_akhir' => 'required'
        ]);

        // $proyek = Proyek::find($id);
        // $proyek->nama_proyek = $request->nama_proyek;
        // $proyek->ketua_tim = $request->ketua_tim;
        // $proyek->anggota = $request->anggota;
        // $proyek->unit_pengaju = $request->unit_pengaju;
        // $proyek->deskripsi = $request->deskripsi;
        // $proyek->tgl_mulai = $request->tgl_mulai;
        // $proyek->tgl_akhir = $request->tgl_akhir;
        // $proyek->updated_at = now();
        // $proyek->save();

        // return redirect('projects');

        $proyek = Proyek::where('id', $request->input('id'))->update([
            'nama_proyek' => $request->input('nama_proyek'),
            'ketua_tim' => $request->input('ketua_tim'),
            'anggota' => $request->input('anggota'),
            'unit_pengaju' => $request->input('unit_pengaju'),
            'deskripsi' => $request->input('deskripsi'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_akhir' => $request->input('tgl_akhir')
            // 'updated_at' => now()
        ]);
        // if($proyek){
        //     return "sukses";
        // }else{
        //     return "gagal";
        // }
        if ($proyek) {
            return redirect('/projects')->with('success', 'Data telah diperbarui');
        } else {
            return back()->with('fail', 'Gagal memperbarui data');
        }
        
        
        // $query = DB::table('proyeks')
        // ->where('nama_proyek', $nama_proyek)->update(['nama_proyek' => $request->nama_proyek]);
        // dd($query);
        
        // if($query){
        //     return redirect('/projects');
        // }else{
        //     return back()->with('fail', 'Ada sesuatu yang salah');
        // }
    }
}