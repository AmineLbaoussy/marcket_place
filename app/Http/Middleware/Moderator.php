<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class Moderator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {

        $destinations = [
            1 => 'office',
            3 => 'accueil',
        ];

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role != 2) {
            return redirect()->route($destinations[Auth::user()->role]);
        }

        return $next($request);
    }


}
