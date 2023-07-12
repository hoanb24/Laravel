<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function xinchao(){
    //     echo 'Xin chào các bạn PNV';
    // }
    public function index(){
        $title = "Đây là biến";
        return view('test')->with('title',$title);
        // lưu biến và truyền biến qua view
    }
    // public function getIndex(){
    //     $name ='Ho Thi Kieu';
    //     $age = '20';
    //     $class = 'PNV24A';
    //     $arr = ['name'->$name,'age'->$age,'class'->$class];
    //     return view('test')->with('student',$arr);
    // }
}
