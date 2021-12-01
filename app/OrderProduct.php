<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $guarded=[];
    public function getAttributePrice($key)
    {
        return intval($key) ;
    }

}
