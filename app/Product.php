<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model
{
   // use Gloudemans\Shoppingcart\CanBeBought;
   // use Gloudemans\Shoppingcart\CanBeBought;

    protected $guarded=[];

    // public function getBuyableIdentifier($options = null) {
    //     return $this->id;
    // }
    // public function getBuyableDescription($options = null) {
    //     return $this->name;
    // }
    // public function getBuyablePrice($options = null) {
    //     return $this->price;
    // }
    // public function getBuyableWeight($options = null){
    //     return $this->version;
    // }



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
   public function getAttributePrice($key)
   {
     
       return intval($key) ;
   }
}
