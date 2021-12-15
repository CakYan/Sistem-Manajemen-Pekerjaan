<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class KetuaProyek
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
        if (session('hak_akses') == 3) {
            return $next($request);
            # code...
        }
        return redirect('/')->with('alert', 'Anda tidak memiliki hak akses pada halaman ini');
    }
}