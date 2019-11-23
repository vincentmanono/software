<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' =>function(){return App\User::all()->random();},
        'total'=>$faker->numberBetween(2000,10000),
        'status'=>$faker->numberBetween(0,1),
    ];
});
