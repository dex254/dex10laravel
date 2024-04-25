<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Patao;
use Illuminate\Support\Facades\Auth;

class PataoMiddleware
{
    public function handle($request, Closure $next)
    {
        // Fetch only the data that the authenticated user (sender) uploaded
        $senderId = Auth::id();
        $patao = Patao::where('sender_id', $senderId)->get();

        // Pass filtered data to the controller
        $request->merge(['patao' => $patao]);

        return $next($request);
    }
}
