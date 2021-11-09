<?php

namespace App\Http\Controllers;

use \App\Models\Karyawan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        // $a = Karyawan::get();
        // echo $a;
        return view('login');
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
            return view('index', ['karyawans' => $karyawans]);
        } else {
            return back()->with('loginError', 'Username atau Password Salah');
        }
    }
}