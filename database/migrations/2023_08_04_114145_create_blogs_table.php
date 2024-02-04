<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->json('title'); //->default(json_encode(["en" => "", "kh" => ""]));
            $table->json('description'); //->default(json_encode(["en" => "", "kh" => ""]));
            $table->json('summary');
            $table->string('thumbnail')->nullable();
            $table->integer('ordering')->default(0);
            $table->integer('is_main_event')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
