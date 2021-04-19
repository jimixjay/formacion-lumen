<?php


namespace App\Services;


use Exception;
use Illuminate\Http\Request;

final class SumService
{
    public function __construct() {}

    public function execute(int $firstNumber, int $secondNumber)
    {
        try {
            return $firstNumber + $secondNumber;

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }
}
