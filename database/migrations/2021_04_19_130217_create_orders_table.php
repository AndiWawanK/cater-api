<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('merchant_id')->references('id')->on('merchants');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('note');
            $table->integer('order_fee');
            $table->integer('total_price');
            $table->string('status');
            $table->datetime('ends_at',0);
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
        Schema::dropIfExists('orders');
    }
}
