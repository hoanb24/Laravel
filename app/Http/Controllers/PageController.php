<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Comments;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){							
    	$slide =Slide::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = Product::where('new',1)->paginate(8);	
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8);				
        // dd($new_product); // giống consolog	// test thử 					
    	return view('home',compact('slide','new_product','sanpham_khuyenmai'));						
    }	

    public function getDetail(Request $request)
    {
        $sanpham = Product::where('id', $request->id)->first();
        $splienquan = Product::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type,)->paginate(3);
        $comments = Comments::where('id_product',$request->id)->get();
        return view('detailproduct',compact('sanpham','splienquan','comments'));
    }
    public function getContact()
    {
        return view('layout/contact');
    }
    public function getAbout()
    {
        return view('layout/about');
    }
    public function getAddCart(){
        return view('layout/themgiohang');
    }
}

