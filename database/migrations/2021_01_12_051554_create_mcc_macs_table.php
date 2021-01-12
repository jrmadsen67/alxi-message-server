<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMccMacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcc_mncs', function (Blueprint $table) {
            $table->id();
            $table->string('mcc');
            $table->string('mnc');
            $table->unsignedBigInteger('network_id');
            $table->timestamps();

            $table->unique(['mcc', 'mnc']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcc_macs');
    }
}
