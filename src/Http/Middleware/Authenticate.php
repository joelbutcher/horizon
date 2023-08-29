<?php

namespace Laravel\Horizon\Http\Middleware;

use Laravel\Horizon\Exceptions\UnauthorizedException;
use Laravel\Horizon\Horizon;

class Authenticate
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response|null
     */
    public function handle($request, $next)
    {
        if (! Horizon::check($request)) {
            throw new UnauthorizedException();
        }

        return $next($request);
    }
}
