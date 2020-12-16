<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use App\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function  insert(Request $request)
    {
        // die($request);
        $id = $request->pid;
        $qty = $request->qty;
        $user_id = Auth::user()->id;; // sementara
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
        $user_id = Auth::user()->id;// retrieve user id using auth
        $cart = Cart::where('user_id',$user_id)->get();
        $products = array();
        foreach($cart as $c)
        {
            array_push($products,$c->product);
        }
        
        return view('viewcart',[
            "cart" =>$cart,
            "products"=>$products
        ]);
    }

    public function delete(Request $request){
        $id = $request->cart_id;
        Cart::where("id",$id)->delete();
        return redirect()->back();
    }

    public function checkout(Request $request)
    {
        //retrieve user id from auth / session
        // $id = $request->user_id;
        $id = Auth::user()->id;
        $transaction = new Transaction;
        $transaction->user_id = $id;
        $transaction->save();
        
        $cart = Cart::where('user_id',$id)->get();
        foreach($cart as $item)
        {
            $detail = new TransactionDetail;
            $detail->transaction_id = $transaction->id;
            $detail->product_id = $item->product_id;
            $detail->qty = $item->qty;
            $detail->save();
            $item->delete();
        }
        return redirect('/cart');
    }
}
