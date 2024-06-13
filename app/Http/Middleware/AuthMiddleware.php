<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan pengguna masuk
        if (!auth()->check()) {
            // Jika tidak masuk, redirect ke halaman masuk
            return redirect()->route('login.show_form_login');
        }

        // Jika masuk, lanjutkan ke rute yang diminta
        return $next($request);
    }
}
