<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_plans', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->unique();
            $table->integer('hourly_capacity')->default(0);
            $table->integer('daily_capacity')->default(0);
            $table->integer('monthly_capacity')->default(0);
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
        Schema::dropIfExists('device_plans');
    }
}
