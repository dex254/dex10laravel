<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostRequestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->isMethod('post')) {
            // Handle POST requests here
            return $next($request);
        }

        // For other request methods, you can handle them differently or return a response
        return response('Method Not Allowed', 405);
    }
}
