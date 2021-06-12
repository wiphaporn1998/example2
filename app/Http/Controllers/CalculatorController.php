<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CalculatorController extends Controller
{
    public function h($sum1,$sum2)
    {
        return
    {
        $data = [
            'num1' => $sum1,
            'num2' => $sum2
        ];
        return view('calculator.index',$data);
    }
}
