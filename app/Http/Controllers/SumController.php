<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Services\SumService;
use Exception;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke(Request $request)
    {
        try {
            $sumService = new SumService($request);

            $response = [
                'msg' => $sumService->execute()
            ];

            return response()->json($response);
            
        } catch (Exception $e) {
            $response = [
                'error' => $e->getMessage(),
                'code' => $e->getCode()
            ];

            return response()->json($response);
        }
    }
}
