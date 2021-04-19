<?php


namespace App\Services;


use Exception;
use Illuminate\Http\Request;

final class SumService
{
    private $request;

    public function __construct(
        Request $request
    )
    {
        $this->request             = $request;
    }

    public function execute()
    {
        try {
            $firstNum = $this->request->get('first_num');
            $secondNum = $this->request->get('second_num');

            return $firstNum + $secondNum;

        } catch (Exception $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }
}
