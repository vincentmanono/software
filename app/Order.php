<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product', 'order_product', 'order_id', 'product_id');
    }
    public function payment()
    {
        return $this->hasOne('App\Payment', 'order_id', 'id');
    }
    public function getAttributeTotal($key)
    {
        return intval($key) ;
    }
}
