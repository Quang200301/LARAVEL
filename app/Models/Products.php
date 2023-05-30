<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Products extends Model
{
    use  HasFactory;
    protected $fillable=[
        "name",
        "price",
        "image"
    ];
}