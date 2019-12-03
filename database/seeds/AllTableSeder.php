<?php

use Illuminate\Database\Seeder;

class AllTableSeder extends Seeder
{

    public function run()
    {
        factory(App\User::class,2 )->create();
        factory(App\Category::class, 2)->create();
        factory(App\Product::class, 5)->create();
        factory(App\Order::class, 4)->create();
        factory(App\Payment::class, 2)->create();
        factory(App\OrderProduct::class, 3)->create();

        App\User::create([
            'name' => 'Abraham Kivondo',
            'email' => 'abrahamkivondo@gmail.com',
            'phone' => '+254 707 585566',
            'type' => 'super',
            'is_admin' => true,
            'password' => bcrypt('12345678')
        ]);
    }
}
