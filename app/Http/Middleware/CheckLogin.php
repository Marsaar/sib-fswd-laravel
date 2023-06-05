<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // Pengguna telah login, lanjutkan ke rute berikutnya
            return $next($request);
        } else {
            // Pengguna belum login, alihkan ke halaman login
            return redirect('/login');
        }
    }
}
