<?php
namespace App\Http\Controllers;

use App\Http\Requests\Loginrequest;
use Illuminate\Http\Request;
class PostController extends Controller
{
public function add()
{
    $dataInsert = [
        'title'=>'xin chào bạn',
        'content'=>'xin chào bạn',
        'status'=>1
    ];
    // $post = Post::create($dataInsert);
}
}
?>