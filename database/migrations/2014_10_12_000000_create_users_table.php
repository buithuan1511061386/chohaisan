<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->dateTime('birthday')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->unsignedInteger("region_id")->nullable();
            $table->foreign("region_id")->references('id')->on('region');
            $table->unsignedInteger("hospital_id")->nullable();
            $table->foreign("hospital_id")->references('id')->on('hospital');
            $table->unsignedInteger("department_id")->nullable();
            $table->foreign("department_id")->references('id')->on('department');
            $table->boolean('sex');
            $table->string('image')->nullable();
            $table->mediumText('description')->nullable();
            $table->text('content')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedInteger("user_level_id");
            $table->foreign("user_level_id")->references('id')->on('user_level');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
