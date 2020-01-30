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
            $table->increments('id');
            $table->string('name', 50)->unique();
            $table->integer('price');
            $table->integer('size'); 
            $table->float('abv'); //nồng độ cồn
            $table->year('vintage'); //năm sản xuất, hái nho
            $table->text('image');
            $table->integer('discount');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('instock');
            $table->boolean('isFeatured')->default(false); //nổi bật

            $table->unsignedInteger('prodcategory_id');
            $table->foreign('prodcategory_id')
                ->references('id')->on('product_categories')
                ->onDelete('cascade');
            $table->unsignedInteger('origin_id');
            $table->foreign('origin_id')
                ->references('id')->on('origins')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
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
