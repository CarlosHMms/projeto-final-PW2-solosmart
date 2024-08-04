<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('esp32_table_dht11_leds_update', function (Blueprint $table) {
            $table->id();
            $table->float('temperature');
            $table->integer('humidity');
            $table->string('status_read_sensor_dht11');
            $table->string('led_01');
            $table->string('led_02');
            $table->time('time');
            $table->date('date');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esp32_table_dht11_leds_update');
    }
};
