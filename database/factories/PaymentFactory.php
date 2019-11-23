<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'user_id' =>function(){return App\User::all()->random();},
        'order_id' =>function(){return App\Order::all()->random();},
        'amount'=>$faker->numberBetween(2000,10000),
        'creditcardnumber'=>$faker->creditcardnumber


    ];
});
