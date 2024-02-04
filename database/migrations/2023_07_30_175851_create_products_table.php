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
            $table->id();
            $table->json('name');
            $table->string('code')->nullable();
            $table->text('capacity')->nullable();
            $table->text('type')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->json('short_des');
            $table->json('des');
            $table->json('additional_info');
            $table->text('image')->nullable();
            $table->text('image_back')->nullable();
            $table->json('galleries');
            $table->integer('status')->default(1);
            $table->integer('is_new')->default(0);
            $table->integer('is_feature')->default(0);
            $table->integer('is_hot')->default(0);
            $table->integer('ordering')->default(0);
            $table->double("price")->default(0);
            $table->double("discount")->default(0);
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
