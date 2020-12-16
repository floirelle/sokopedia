<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionDetail;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
class TransactionController extends Controller
{
    public function viewHistory(){
        $id = Auth::user()->id; // get id from session/auth
        $transaction = Transaction::where("user_id",$id)->get();
        return view('history',[
            "transactions" =>$transaction
        ]);
    }

    public function getDetail(Request $request)
    {
        $details = TransactionDetail::where('transaction_id',$request->trid)->get();
        return view('detailtransaction',[
            "detail"=>$details
        ]);
    }
}
