<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    // $filepath = storage_path('products');
    // if(!File::exists($filepath)){
    //     File::makeDirectory($filepath);
    // }
    return [
        'category_id' =>function(){return App\Category::all()->random();},
        'name'=>$faker->word,
        ///color/800/400/technics/Faker/,
        'image' => $faker->imageUrl(640, 540, 'technics', true, 'Faker', true),
        'url'=>$faker->url,
        'price'=>$faker->randomNumber(2),
        'size'=>$faker->randomFloat(2,10,120),
        'description'=>$faker->realText(30,2),
        'version'=>$faker->randomFloat(2,0,6),
        'status'=>$faker->randomElement(['0','1'])

    ];
});
