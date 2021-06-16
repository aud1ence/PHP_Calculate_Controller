<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function getCalculate()
    {
        return view('calculate');
    }

    public function getResult()
    {
        $result = 0;
        return view('result', compact(['result']));
    }
}
