<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    public function delivereds()
    {
        return $this->hasMany('App\Delivered', 'product_id', 'id');
    }
   public function orders()
   {
       return $this->belongsToMany('App\Order', 'order_product', 'product_id', 'order_id');
   }
}
