<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        // die($request->name);
        $products = Product::where('name','like',"%{$request->name}%")->paginate(3);
        $products->appends($request->only('name'));
        return view('search',[
            'products'=>$products,
            'search'=>""
        ]);
    }

    public function viewDetail($id){
        $product = Product::where('id',$id)->first();
        
        return view('detail',[
            'product'=>$product,
            'search'=>""
        ]);

    }

    public function addToCart($id){
        $product = Product::where('id',$id)->first();
        
        return view('addtocart',[
            'product'=>$product,
            'search'=>""
        ]);

    }
}
