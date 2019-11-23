<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Delivered;
use Faker\Generator as Faker;

$factory->define(Delivered::class, function (Faker $faker) {
    return [
        'user_id' =>function(){return App\User::all()->random();},
        'product_id' =>function(){return App\Product::all()->random();},

    ];
});
