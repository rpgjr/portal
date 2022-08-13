<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('loginAdminID')) {
            return redirect(route('login'))->with('fail', "You need to login first!");
        }
        return $next($request);
    }
}
