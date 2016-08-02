<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('name_short', 20);
            $table->string('description');
            $table->integer('order')->unsigned()->default(0);
            $table->string('barcode');
            $table->string('barcode_type');
            $table->double('price_cost');
            $table->double('price_sell');
            $table->integer('product_category_id')->unsigned();
            $table->integer('pos_category_id')->unsigned();
            $table->boolean('sell_on_tpv');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
