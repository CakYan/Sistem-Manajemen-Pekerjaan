<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Direksi
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
        if (session('hak_akses')== 2) {
            # code...
            return $next($request);
        }
        return redirect('/error');
    }
}