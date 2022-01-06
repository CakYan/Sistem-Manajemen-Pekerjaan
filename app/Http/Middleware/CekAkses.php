<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekAkses
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
        if (session('hak_akses') == 1) {
            return $next($request);
            # code...
        } elseif (session('hak_akses') == 2) {
            return $next($request);
            # code...
        }
        elseif (session('hak_akses') == 3) {
            return $next($request);
            # code...
        }
        return redirect('/error');
    }
}