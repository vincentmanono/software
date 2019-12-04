<?php

namespace App;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
//     public  $username = 'sandbox'; // use 'sandbox' for development in the test environment
//    public  $apiKey  ='780e17a21f92160e83ac1ac387d562e4f203fa4a8cc071026a5127c7c288637e'; // use your sandbox app API key for development in the test environment
//     $AT       = new AfricasTalking($username, $apiKey);

    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }





}
