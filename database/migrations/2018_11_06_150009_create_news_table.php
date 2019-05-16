<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger("typeofnews_id");
            $table->foreign("typeofnews_id")->references('id')->on('typeofnews');
            $table->mediumText('intro')->nullable();
            $table->text('content')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('creator')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_key')->nullable();
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
        Schema::dropIfExists('news');
    }
}
