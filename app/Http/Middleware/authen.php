<?php

namespace App\Http\Middleware;

use Closure;

class authen
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
        session_start();
        if (isset($_SESSION['name'] )&& $_SESSION['name'] !='' ) {
            return  $next($request);
        }else{
           return Response('epa rapaz ta tentando entrar sem login (≖_≖ ) <br> <a href="'.route('login').'">Fazer login</a>');
        }
    }
}
