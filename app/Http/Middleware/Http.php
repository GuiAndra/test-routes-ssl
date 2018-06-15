<?php

namespace App\Http\Middleware;

use Closure;

class Http
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
            $url = url()->full();
            $unsecure_url = 'http://'.explode('://', $url)[1];
            return redirect($unsecure_url);
        }

        return $next($request); 
    }
}
