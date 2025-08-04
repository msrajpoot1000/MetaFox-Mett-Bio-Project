<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$roles  One or more allowed roles (e.g. admin, student)
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // User logged‑in है?
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Logged‑in user का role allowed list में है?
        if (!in_array(Auth::user()->role, $roles)) {
            abort(403);   // Unauthorized
        }

        return $next($request);
    }
}
