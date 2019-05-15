<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::check()) {
                if (Auth::user()->role_id == 1) {
                    return redirect('admin');
                }
                if (Auth::user()->role_id == 2) {
                    return redirect('user');
                }
            }
        }

        return $next($request);
    }
}
