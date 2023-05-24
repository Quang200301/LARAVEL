<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class getdataController extends Controller
{
    public function data()
    {
        $response = Http::get('https://api.covid19api.com/summary');
        $data = $response->json();
        $data=$data['Countries'];
        echo"<pre>";
        print_r($data);
        echo "</pre>";
        // return view("show",['data'=>$data]);
        # code...
    }
}
