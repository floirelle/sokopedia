<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ViewController extends Controller
{
    
    public function home(){
        $products = Product::paginate(3);

        return view('home',[
            'products'=> $products,
            'search'=> "",
        ]);
    }

    public function adminHome() {
        return view('admin');
    }
}
