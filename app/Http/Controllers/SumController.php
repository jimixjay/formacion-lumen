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

    public function __invoke(Request $request, SumService $sumService)
    {
        try {
            $response = [
                'msg' => $sumService->execute($request->get('first_number'), $request->get('second_number'))
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
