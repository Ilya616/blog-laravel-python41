<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $name): Response
    {

        dd($name);
        // if(isset($_GET['name']) && !empty($_GET['name'])){
        //     return $next($request);
        // }
        // else{
        //     dd("exit");
        // }
        
    }
}
