<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Prueba
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->email == "andres.1dgm7@gmail.com"){
            return $next($request);
        }else{
            return redirect('auth.login');
        }
        // return $next($request);

        // return redirect('/');
    }
}
