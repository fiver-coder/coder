<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->increments('id')->primary;
            $table->string('basement');
            $table->integer('meter');
            $table->integer('bed_num');
            $table->integer('floor_num');
            $table->integer('unit_num');
            $table->bigInteger('price');
            $table->string('parking');
            $table->string('stock');
            $table->string('lift');
            $table->string('security_camera');
            $table->string('electronic_door');
            $table->string('emergency_door');
            $table->string('photo_links');
            $table->string('video_links');
            $table->integer('property_id');
            // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_details');
    }
}
