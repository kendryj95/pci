<?php

namespace App\Http\Middleware;

use Closure;

class configuracion
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
        if (\Helper::validarAcceso(1, session()->get('user_id'))) {
            return $next($request);
        } else {
            \Helper::messageFlash('danger', 'Accesos', 'Acceso Denegado');
            return redirect('/');
        }
        
    }
}
