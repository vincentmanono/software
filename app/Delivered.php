<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Delivered extends Model
{
    protected $guarded=[];
    // public function user()
    // {
    //     return $this->belongsTo('App\User', 'user_id', 'id');
    // }
    // public function product()
    // {
    //     return $this->belongsTo('App\Product', 'product_id', 'id');
    // }
}
