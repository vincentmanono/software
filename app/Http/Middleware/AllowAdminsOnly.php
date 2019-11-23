<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AllowAdminsOnly
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
        if ( Auth::user()->is_admin == true) {
            return $next($request);

        } else {
            # code...
            return redirect()->route('home')->with('error', 'Access allowed to admins only');
        }

        //return $next($request);
    }
}
