<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Auth::check() && Auth::user()->role=="Admin"){
            
        //     return redirect('/admin');
        // }


        $products = Product::paginate(3);

        return view('home',[
            'products'=> $products
            
        ]);
    }

    public function adminHome(){
        return view('admin');
    }
}
