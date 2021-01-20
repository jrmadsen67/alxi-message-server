<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->unique();
            $table->string('imei')->unique();
            $table->enum('os', ['iOS', 'Android']);
            $table->unsignedBigInteger('virtual_location_id')->nullable();
            $table->unsignedBigInteger('physical_location_id')->nullable();
            $table->unsignedInteger('physical_location_port')->nullable();
            $table->unsignedInteger('device_plan_id')->nullable();
            $table->timestamps();

            $table->unique([
                'physical_location_id',
                'physical_location_port'],
                'physical_id_and_port'
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devices');
    }
}
