<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke(Request $request)
    {
        $apiKey = ApiKey::where(ApiKey::COL_KEY_VALUE, $request->header('api-key'))->first();

        $response = [
            'api_key' => $apiKey,
            'api_key_id' => $apiKey->getApiKeyId(),
            'params' => $request->get('params'),
        ];

        return response()->json($response);
    }
}
