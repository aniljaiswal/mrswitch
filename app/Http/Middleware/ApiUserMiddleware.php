<?php

namespace App\Http\Middleware;

use Closure;

class ApiUserMiddleware
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
        //Check if API Token is present
        if (!$request->has('_token') || $request->input('_token') == "") {
            return response()
                ->json([
                    'status' => 'UNAUTHORIZED',
                    'message' => 'The API Token is invalid'
                    ], 403);
        }

        return $next($request);
    }
}
