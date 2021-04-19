<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function __construct()
    {

    }

    public function __invoke()
    {
        return response()->json('Hello world');
    }
}
