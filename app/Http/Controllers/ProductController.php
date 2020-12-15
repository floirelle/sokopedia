<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;

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
            'product' => $product,
            'search' => ""
        ]);

    }

    public function addToCart($id){
        $product = Product::where('id',$id)->first();
        
        return view('addtocart',[
            'product' => $product,
            'search' => ""
        ]);
    }

    public function add() {
        $categories = Category::all();

        return view('add-product', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required|unique:products,name',
            'category'=>'required',
            'description'=>'required',
            'price' => 'required|numeric|min:100',
            'image' => 'required|image|max:10000'
        ]);

        $category = Category::where('name', 'like', "{$request->category}")->first();

        $image_path = Storage::disk('public')->putFile('storage/imgs/' . $category['name'], $request->file('image'));
        $hashed_name = $request->file('image')->hashName();
        $product = new Product([
            'name' => $request->get('name'),
            'category_id' => $category['id'],
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'image' => 'imgs/' . $category['name'] . '/' . $hashed_name
        ]);

        $product->save();
    
        return redirect('/add-product')->with('success', 'product added!');
    }

    public function viewAllProduct() {
        $products = Product::all();

        return view('/list-product', [
            'products' => $products
        ]);
    }

    public function deleteProduct($id) {
        $product = Product::find($id);

        $product->delete();

        return redirect('/list-product');
    }
}
