<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use App\Services\Calculator\SumService;
use App\Services\CalculatorService;
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
            switch ($request->get('operator')) {
                case '+':
                    $calculator = new SumService();
                    break;
                default:
                    throw new Exception('Incorrect operator');
            }

            $calculatorService = new CalculatorService($calculator);

            $response = [
                'msg' => $calculatorService->execute($request->get('first_number'), $request->get('second_number'))
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
