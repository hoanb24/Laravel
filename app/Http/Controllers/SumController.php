<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function showForm()
    {
        return view('sum');
    }

    public function tinhTong(Request $request)
    {
        $a = $request->input('a');
        $b = $request->input('b');
        $sum = $a + $b;

        return view('sum', compact('sum'));
    }
}
