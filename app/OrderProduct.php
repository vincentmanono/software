<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
