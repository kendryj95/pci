<?php

namespace App\Http\Middleware;

use Closure;

class md_guard_login
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

        if ($request->session()->get('nombre')==null)
        {
            return redirect('/');            
        } else 
         
         return $next($request);
    }
}
