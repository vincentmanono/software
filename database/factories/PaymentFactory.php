<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Order;
use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'user_id' =>function(){return User::all()->random();},
        'order_id' =>function(){return Order::all()->random();},
        'amount'=>$faker->numberBetween(2000,10000),
        'creditcardnumber'=>$faker->creditcardnumber


    ];
});
