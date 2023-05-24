<?php

namespace App\Http\Controllers;

use App\Http\Requests\Loginrequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('LoginForm');
    }

	
	/* laravel message and form validation */
	public function displayInfor(Loginrequest $Request) {
        $user=[
            'ten'=>$ten=$Request->input("ten"),
            'tuoi'=>$tuoi=$Request->input("tuoi"),
            'ngay'=>$ngay=$Request->input("ngay"),
            'web'=>$web=$Request->input("web"),
            'diachi'=>$ten=$Request->input("diachi"),
        ];
        return view('LoginForm')->with('user',$user);
    }
	
}
