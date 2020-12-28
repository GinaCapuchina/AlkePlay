<?php

namespace App\Http\Middleware;

use Closure;



class DeveloperMiddleware
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
        if ($request->user()-> role=='developer') //el usuario es developer?
         return $next($request);
        
         return redirect('/');
    }
}
