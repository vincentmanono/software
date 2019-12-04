<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderProduct;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'product_id' =>function(){return App\Product::all()->random();},
        'order_id' =>function(){return App\Order::all()->random();},
    ];
});
