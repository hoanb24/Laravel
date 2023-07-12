<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongController extends Controller
{
    public function tinhTong(Request $request)
    {$tong = $request->soA +  $request->soB;
        return view('tong',compact('tong'));
    }
}
