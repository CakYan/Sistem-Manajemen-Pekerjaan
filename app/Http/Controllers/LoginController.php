<?php

namespace App\Http\Controllers;


use \App\Models\Karyawan;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    public function index()
    {
        if (session('success') !=1) {
            return view('login');
        }
        if (session('hak_akses')==1) {
            return redirect('/home');
            # code...
        }elseif(session('hak_akses')==2){
            return redirect('/homeDireksi');
        }elseif(session('hak_akses')==3){
            return redirect('/homeKetuaProyek');
        }elseif(session('hak_akses')==4){
            return redirect('/home');
        }elseif(session('hak_akses')==5){
            return redirect('/daftar_karyawan');
        }
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $cek = Karyawan::where('username', "=", $request->input('username'))
            ->where('password', "=", $request->input('password'))->first();

        if ($cek) {
            $karyawan = Karyawan::where('username', $request->username)->first();

            session(['success' => true,'username' => $request->input('username'), 
            'nama' => $karyawan->nama, 'nik' => $karyawan->nik, 'foto' => $karyawan->profil_img, 
            'hak_akses' => $karyawan->role_id]);

            if ($karyawan->role_id == 1) {
                # code...
                return redirect('/home');
            }elseif ($karyawan->role_id == 2){
                return redirect('/homeDireksi');
            }elseif ($karyawan->role_id == 3){
                return redirect('/homeKetuaProyek');
            }elseif ($karyawan->role_id == 4){
                return redirect('/homeAnggotaProyek');
            }elseif ($karyawan->role_id == 5){
                return redirect('/daftar_karyawan');
            }
        } else {
            return back()->with('Login Gagal', 'Username atau Password Salah');
        }
    }
    public function logout(){
        Session ::flush();
        return redirect('/');
    }

    public function error(){
        return view('error');
    }
}