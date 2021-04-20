<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;

class CheckKeyMiddleware
{
    const API_KEY = 'formacion-lumen-api-key';

    public function handle($request, Closure $next)
    {
        if ($request->header('api-key') != self::API_KEY) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
