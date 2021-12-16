<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InputMaster
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('hak_akses')== 5) {
            # code...
            return $next($request);
            // return redirect('/daftar_karyawan');
        }
        return redirect('/error');
    }
}