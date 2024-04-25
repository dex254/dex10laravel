<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Yetu;
use App\Models\patao;
use Illuminate\Support\Facades\Auth;

class YetuMiddleware
{
    
    public function handle($request, Closure $next)
    {
        // Fetch all products
       
          // Fetch all products
          $senderId = Auth::id();
        $yetu = yetu::where('sender_id', $senderId)->get();

        // Pass filtered data to the controller
        $request->merge(['yetu' => $yetu]);

        return $next($request);
    }
}
