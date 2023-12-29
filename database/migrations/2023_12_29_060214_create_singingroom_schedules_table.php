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
        Schema::create('singingroom_schedules', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('singingroom_id');
            $table->foreign('singingroom_id')->references('id')->on('singingrooms');
            $table->time('schedule_time');
            $table->enum('reservation_status', ['Y', 'N'])->default('N');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('singingroom_schedules');
    }
};
