<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function xinchao(){
        echo "xin chào các bạn";
    }
    public function view(){
        $name="Đây là tiêu đề";
        $age=20;
        $class="PNV22";
        $arr=['name'=>$name,'age'=>$age,'class'=>$class];
        return view('view')->with('student',$arr);
    }
}
