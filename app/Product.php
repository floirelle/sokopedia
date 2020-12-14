<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $primary_key="id";

    protected $attributes =[
        'name' => "",
        'category_id'=>0,
        'description'=>"",
        'price'=>0,
        'image'=>""
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
