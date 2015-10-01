<?php

namespace App\Http\Middleware;

use Closure;

class UserPending
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
        if(auth()->user()->roles->isEmpty() || auth()->user()->hasRole('pending'))
            return redirect('/profile/setup');

        return $next($request);
    }
}
