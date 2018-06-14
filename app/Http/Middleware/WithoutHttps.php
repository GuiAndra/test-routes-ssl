<?php

namespace App\Http\Middleware;

use Closure;

class WithoutHttps
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
        if ($request->secure()) {
            return redirect()->$request->getRequestUri();
        }

        return $next($request); 
    }
}
