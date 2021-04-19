<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;

class CheckKeyMiddleware
{
    //const API_KEY = 'formacion-lumen-api-key';

    public function handle($request, Closure $next)
    {
        $apiKey = ApiKey::where(ApiKey::COL_KEY_VALUE, $request->header('api-key'))->first();

        if (!$apiKey) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
