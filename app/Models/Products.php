<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenController extends Controller
{
    public function insertData()
    {
        $data = [
            'id' => '01',
            'name' => 'A Lực',
            'price' => '100',
            'image' => 'none',
        ];

        DB::table('products')->insert($data);

        return "Dữ liệu đã được chèn thành công.";
    }
}