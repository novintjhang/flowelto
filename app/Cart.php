<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Cart extends Model
{
    protected $table = 'carts';
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
