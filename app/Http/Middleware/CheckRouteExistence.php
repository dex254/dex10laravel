<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class CheckRouteExistence
{
    public function handle($request, Closure $next, $routeName)
    {
        // Check if the named route exists
        if (!Route::has($routeName)) {
            throw new RouteNotFoundException("Route [$routeName] not defined.");
        }

        return $next($request);
    }
}
