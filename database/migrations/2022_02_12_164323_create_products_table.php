<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description');
            $table->integer('price')->default(0);
            $table->integer('old_price')->default(0);
            $table->integer('quantity')->default(0);
            $table->json('categories')->nullable();
            $table->json('attributes')->nullable();
            $table->string('primary_image');
            $table->json('images')->nullable();
            $table->json('specifications')->nullable();
            $table->json('shipping')->nullable();
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
        Schema::dropIfExists('products');
    }
};
