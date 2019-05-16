<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("customer_id");
            $table->foreign("customer_id")->references('id')->on('users');
            $table->unsignedInteger("doctor_id");
            $table->foreign("doctor_id")->references('id')->on('users');
            $table->dateTime('date');
            $table->time('time');
            $table->mediumText('note')->nullable();
            $table->string('authentication_code')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('appointment');
    }
}
