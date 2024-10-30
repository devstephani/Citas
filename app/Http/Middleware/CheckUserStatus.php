<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->active === 0) {
            if (Auth::check()) {
                Auth::guard('web')->logout();
            }

            return redirect()->route('login')->withErrors(['inactive' => 'Su cuenta se encuentra inactiva.']);
        }

        return $next($request);
    }
}
