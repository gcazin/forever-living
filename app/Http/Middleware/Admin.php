<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check()) {
            if (auth()->user()->role_id !== 1) {
                return redirect(route('login.fbo'));
            }
        } else if(!auth()->check()) {
            return redirect(route('home'));
        }
        return $next($request);
    }
}
