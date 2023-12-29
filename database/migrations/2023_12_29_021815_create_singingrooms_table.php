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
        Schema::create('singingrooms', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('name');
            $table->string('lot_based_address')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('road_name_address')->nullable();
            $table->integer('street_postal_code')->nullable();
            $table->string('tel_number')->nullable();
            $table->integer('room_count')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['on', 'off'])->default('on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singingrooms');
    }
};
