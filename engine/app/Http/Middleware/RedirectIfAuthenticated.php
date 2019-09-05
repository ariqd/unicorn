<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;

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
    public function handle(Request $request, Closure $next)
    {
        if (!$request->is('login')) {
            if (!$request->session()->has('token')) {
                return redirect('login');
            }
        }

        return $next($request);
    }
}
