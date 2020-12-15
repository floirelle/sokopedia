<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function viewAllCategory() {
        $categories = Category::with('products')->get();
        
        return view('/list-category', [
            'categories' => $categories
        ]);
    }

    public function add() {
        return view('add-category');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required|unique:categories,name'
        ]);

        $category = new Category([
            'name' => $request->get('name')
        ]);

        $category->save();
    
        return redirect('/add-category')->with('success', 'category added!');
    }
}
