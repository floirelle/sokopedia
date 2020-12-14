<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table="carts";
    protected $attributes =[
        'user_id' => 0,
        'product_id'=>0,
        'qty'=>0,
    ];

    protected $fillable = [
        'user_id'
    ];
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
