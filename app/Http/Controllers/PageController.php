<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PageController extends Controller
// {
//     public function getLoaiSp(){				
//     	return view('page.loai_sanpham');			
//     }				
// }				
				
namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\products;
use Illuminate\Http\Request;				
                
class PageController extends Controller				
{				
    public function getIndex(){	
        // $slide =Slide::all();
        //return view('page.trangchu',['slide'=>$slide]);
               $new_product = products::where('new',1)->paginate(8);	
               $sanpham_khuyenmai= products::where('promotion_price','<>',0)->paginate(4);
        //dd($new_product);	
        return view('master',compact('new_product','sanpham_khuyenmai'));
    }	
    public function getDetail(Request $request){							
    	$sanpham = products:: where('id',$request->id)->first();
        $splienquan = products::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);						
        $comments =	comments::where('id_product',$request->id)->get();					
    	return view('chitiet_sanpham',compact('sanpham','splienquan','comments'));						
    }		
    
        
}				
                

