<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLogin
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
        $user = \App\Models\Karyawan::where('username', $request->username)->first();
        if ($user->role_id=='1') {
            return redirect('/home');
        } else {
            return back();
        }

        return $next($request);
    }
}