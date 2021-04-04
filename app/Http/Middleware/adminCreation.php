<?php

namespace App\Http\Middleware;

use Closure;

class adminCreation
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
        if (Auth::user()->adminCreation == 1)
            return $next($request);
        else
            return redirect('home')->with('failed','You can\'t oppen this page!');
    }
}

