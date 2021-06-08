<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Check_auth
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
if (Session::has('user_session')) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }       }
}
