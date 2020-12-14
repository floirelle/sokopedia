<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function  insert(Request $request)
    {
        // die($request);
        $id = $request->pid;
        $qty = $request->qty;
        $user_id = $request->uid; // sementara
        //get user id using auth
        $cart = Cart::where([
            'user_id'=>$user_id,
            'product_id' =>$id
        ])->first();
        if($cart == NULL)
        {
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->product_id = $id;
            $cart->qty = $qty;
        }
        else{
            $cart->user_id = $user_id;
            $cart->product_id = $id;
            $cart->qty = $qty;
        }
        $cart->save();

        return redirect('/home');
    }

    public function viewCart()
    {
        $user_id = 3; // retrieve user id using auth
        $cart = Cart::where('user_id',$user_id)->get();
        $products = array();
        foreach($cart as $c)
        {
            array_push($products,$c->product);
        }
        
        return view('viewcart',[
            "cart" =>$cart,
            "products"=>$products,
            "search"=>""
        ]);
    }

    public function delete(Request $request){
        $id = $request->cart_id;
        Cart::where("id",$id)->delete();
        return redirect()->back();
    }
}
