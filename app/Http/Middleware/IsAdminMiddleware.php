<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // <-- 1. TAMBAHKAN IMPORT INI

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 2. GUNAKAN FACADE Auth::check() BUKAN auth()->check()
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        abort(403, 'ACCESS DENIED');
    }
}
