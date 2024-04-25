<?php

namespace App\Http\Middleware;

use Closure;

class HandlePostRequests
{
    public function handle($request, Closure $next)
    {
        // Check if the request method is POST
        if ($request->isMethod('post')) {
            // Perform actions specific to POST requests
            // For example, log the request or perform validation
            // You can also modify the request if needed
            // Example: $request->merge(['key' => 'value']);
        }

        // Continue with the request
        return $next($request);
    }
}
