<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminOnly
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
	    if (!Auth::user()->admin) {
		    return abort(403);
	    }

        return $next($request);
    }
}
