<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivered extends Model
{
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
}
