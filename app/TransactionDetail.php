<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $table="transaction_details";
    protected $primary_key = "id";

    protected $attributes =[
        'transaction_id'=>0,
        'product_id' =>0,
        'qty' =>0
    ];

    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}
