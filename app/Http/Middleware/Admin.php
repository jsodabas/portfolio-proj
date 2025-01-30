<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (Auth::user()->usertype != 'admin') {
    //         return redirect('/home');
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->usertype === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Unauthorized access.');
    }

}
