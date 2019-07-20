<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $headers = [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Headers' => 'Authorization, Content-Type',
        ];

        if ($request->method() === 'OPTIONS') {
            return response(null)->withHeaders($headers);
        }

        $response = $next($request);
        $response->withHeaders($headers);

        return $response;
    }
}
