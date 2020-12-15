<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table="transactions";
    protected $primary_key = "id";

    protected $attributes =[
        'user_id'=>0
    ];

    public function details(){
        return $this->hasMany('App\TransactionDetail');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
