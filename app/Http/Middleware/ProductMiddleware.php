<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Product;

class ProductMiddleware
{
    public function handle($request, Closure $next)
    {
        // Fetch all products
        $product = Product::all();

        // Pass products to the controller
        $request->merge(['product' => $product]);

        return $next($request);
    }
}
