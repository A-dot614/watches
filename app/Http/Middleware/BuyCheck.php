<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BuyCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::user()==="buy"){
            return $next($request);
            }else{
                abort(403, "You are not a buyer,please log in with a buyer account to access this page");
            }
        } else {
            abort(403, "You must be logged in to access this page");
        } 
    }
}
