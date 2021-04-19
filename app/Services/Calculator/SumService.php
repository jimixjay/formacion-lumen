<?php


namespace App\Services\Calculator;


use App\Services\Calculator\Calculator;
use Exception;
use Illuminate\Http\Request;

final class SumService implements Calculator
{
    public function __construct() {}

    public function calculate($firstNumber, $secondNumber)
    {
        try {
            return $firstNumber + $secondNumber;

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }
}
