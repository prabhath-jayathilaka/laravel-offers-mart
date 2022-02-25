<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('transaction_id');
            $table->integer('total');
            $table->integer('no_of_items');
            $table->string('status');
            $table->json('item_list');
            $table->json('shipping_address');
            $table->date('order_date');
            $table->date('deliver_date')->nullable();
            $table->date('return_date')->nullable();
            $table->string('return_reason')->nullable()->default('null');
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
};
