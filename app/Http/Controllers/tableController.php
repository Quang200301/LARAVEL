<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
class tableController extends Controller
{
    public function create()
    {
        # code...
        Schema::create('product',function($table)
        {
            # code...
            $table->increments("id");
            $table->string('name');
            $table->string('img');
            $table->integer('quantity');
            $table->string('desc');
            $table->timestamps();
        });
    }
}
