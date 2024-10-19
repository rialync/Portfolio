<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Log the request
        Log::info('Request to home page', [
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
        ]);

        return $next($request);
    }
}
