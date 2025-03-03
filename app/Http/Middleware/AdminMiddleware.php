<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        //jodi admin hoi taile access dibe niale dibe na
        if (Auth::check() && Auth::user()->usertype === 'admin') {
            return $next($request); 
        }
        // Redirect if not an admin
        return redirect('/')->with('error', 'Access denied: Admins only.');
    }
}