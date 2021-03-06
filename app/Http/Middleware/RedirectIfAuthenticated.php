<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        // return $next($request);


        $destinations = [
            1 => 'office',
            2 => 'adjointe',
            3 => 'accueil',
        ];

        if (Auth::guard($guard)->check()) {
            return redirect()->route($destinations[Auth::user()->role]);
        }

        return $next($request);

    }
}
