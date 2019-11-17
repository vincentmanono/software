<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' =>function(){return App\Category::all()->random();},
        'name'=>$faker->word,
        'url'=>$faker->url,
        'price'=>$faker->numberBetween(1334,1000000),
        'price'=>$faker->numberBetween(1334,10000),
        'description'=>$faker->realText(20,4),
        'version'=>$faker->numberBetween(0,10),
        'status'=>$faker->randomElement(['0','1'])

    ];
});
