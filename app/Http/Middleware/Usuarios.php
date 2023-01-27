<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Usuarios
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
        if(auth()->user()->admin == true){
            return $next($request);
        }else{
            return redirect("form_beneficio");
        }
            
        // return redirect("/");
    }
}
