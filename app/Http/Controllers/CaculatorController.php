<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculatorController extends Controller
{
    // public function caculator(){
    //     return view("caculator");

        
    // }
    // public function tong(Request $request){
    //     $operator = $request ->caculator;
    //     $so1 = $request -> sothunhat;
    //     $so2 = $request -> sothuhai;
    //     $tong=0;

    //     switch($operator){
    //         case "+":
    //             $tong = $so1+$so2;
    //             break;
    //         case "-":
    //             $tong = $so1-$so2;
    //             break;
    //         case "*":
    //             $tong = $so1*$so2;
    //             break;
    //         case "%":
    //             $tong = $so1%$so2;
    //             break;
    //     }
    //     return view("caculator",['tong'=>$tong]) ;
    // }
    public function caculator(){
        return view('caculator');
    } 
    public function tong( Request $request){
        $operator = $request->caculator;
        $st1 =$request->sothunhat;
        $st2 =$request-> sothuhai;
        $tong=0;
        switch($operator){
            case "+":
                $tong= $st1 + $st2;
                break;
            case "-":
                $tong= $st1 - $st2;
                break;
            case "*":
                $tong= $st1 * $st2;
                break;
            case "%":
                $tong= $st1 % $st2;
                break;
        }
        return view('caculator',['tong'=>$tong]);
    }
    }