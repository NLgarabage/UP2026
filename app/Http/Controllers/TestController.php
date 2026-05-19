<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sum(int $num1, int $num2){
        return $num1 + $num2;
    }
}
