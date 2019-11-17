<?php

use Illuminate\Database\Seeder;

class AllTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\Admin::class, 5)->create();
        factory(App\Category::class, 10)->create();
        factory(App\Product::class, 30)->create();
        factory(App\Order::class, 50)->create();
        factory(App\Payment::class, 40)->create();
        factory(App\Delivered::class, 30)->create();
        factory(App\OrderProduct::class, 20)->create();


    }
}
