<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class insertProducts extends Controller
{
    function products(){
        return view('products');
    }

    function add(Request $request){
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);

        $query = DB ::table('products')->insert([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'image'=>$request->input('image'),
        ]);

        if($query){
            return back()->with('success','Data have been success insert');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
