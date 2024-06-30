<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;


class ChefMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            if(Auth::User()->is_role == 2 ){
                return $next($request);
            }else{
                Auth::logout();
                return redirect()->route('login');
            }

        }
        else{
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
