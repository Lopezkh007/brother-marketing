<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('subtitle');
            $table->json('des');
            $table->json('label');
            $table->string('navigate_to')->nullable();
            $table->string('image'); // 1920 x 1080
            $table->integer('ordering')->default(0);
            $table->integer('status')->default(1);
            $table->integer('redirect_new_tap')->default(0);
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
        Schema::dropIfExists('sliders');
    }
}
