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
        // $a = Karyawan::get();
        // echo $a;
        if (session('success') !=1) {
            return view('login');
        }
        return redirect('/home');
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
            // if ($request->session()->has('username')) {
            //     $request->session()->get('username');
            // }
            $karyawans = Karyawan::all();
            $karyawan = Karyawan::where('username', $request->username)->first();

            session(['success' => true,'username' => $request->input('username'), 
            'nama' => $karyawan->nama, 'foto' => $karyawan->profil_img]);

            return redirect('/home');
        } else {
            return back()->with('Login Gagal', 'Username atau Password Salah');
        }
    }
    public function logout(){
        Session ::flush();
        return redirect('/');
    }
}