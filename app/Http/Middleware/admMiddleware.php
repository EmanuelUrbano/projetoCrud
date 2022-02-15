<?php

namespace App\Http\Middleware;

use Closure;
use App\admMidmodel;

class admMiddleware
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
        $ip = $request->server->get("REMOTE_ADDR");
        $rota =$request->getRequestUri();
        admMidmodel::create(['log'=>"hei o cara do ip ".$ip." ta querendo ir para ".$rota." "]);
     
       return $next($request);
       
    }
}
