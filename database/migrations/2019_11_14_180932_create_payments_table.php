<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('amount');
            $table->string('creditcardnumber');
            $table->integer('user_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
