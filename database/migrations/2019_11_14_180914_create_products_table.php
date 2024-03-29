<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->string('image')->nullable()->default('noimage.jpg');
            $table->string('url')->nullable();
            $table->string('price')->nullable();
            $table->string('size')->nullable();
            $table->string('description')->nullable();
            $table->string('version')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
          

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
