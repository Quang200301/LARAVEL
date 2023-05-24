<?php

use App\Http\Controllers\CaculatorController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\getdataController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\tableController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\insertProducts;

/*

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/caculator',[CaculatorController::class,'caculator']);
// Route::post('/caculator',[CaculatorController::class,'tong']);
// ---
// Route::get('/getdata',[getdataController::class,'data']);
// Route::get('/LoginForm',"LoginController@index");
// Route::post('/LoginForm',"LoginController@displayInfor");
// Route::get('trangchu',function(){
//     return view("trangchu");
// });

// Route::get('/',[tableController::class,'create']);
// Route::get('/add',[PostController::class,'add']);

Route::get('view',[insertProducts::class, 'products']);
Route::post('add',[insertProducts::class, 'add']);