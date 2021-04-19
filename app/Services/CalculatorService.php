<?php


namespace App\Services;


use App\Services\Calculator\Calculator;
use Exception;

final class CalculatorService
{
    private $calculator;

    public function __construct(Calculator $calculator) {

        $this->calculator = $calculator;
    }

    public function execute($firstNumber, $secondNumber)
    {
        try {
            return $this->calculator->calculate($firstNumber, $secondNumber);

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }
}
