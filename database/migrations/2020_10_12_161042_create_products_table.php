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
            $table->boolean('status')->default(1)->comment("1=active, 0=inactive");
            $table->integer('category_id');
            $table->integer('brand_id')->nullable();
            $table->string('name');

            $table->string('slug');
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('video_link')->nullable();
            $table->boolean('main_slider')->default(0);
            $table->boolean('hot_deal')->default(0);
            $table->boolean('best_rated')->default(0);
            $table->boolean('mid_slider')->default(0);
            $table->boolean('hot_new')->default(0);
            $table->boolean('trend')->default(0);
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();

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
}
