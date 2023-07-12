<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $operation = $request->input('operation');
        $operand1 = $request->input('operand1');
        $operand2 = $request->input('operand2');
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $operand1 + $operand2;
                break;
            case 'subtract':
                $result = $operand1 - $operand2;
                break;
            case 'multiply':
                $result = $operand1 * $operand2;
                break;
            case 'divide':
                if ($operand2 != 0) {
                    $result = $operand1 / $operand2;
                }
                break;
        }

        return view('calculator', ['result' => $result]);
    }
}
