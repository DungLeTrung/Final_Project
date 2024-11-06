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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->dateTime('arrival');
            $table->dateTime('departure');
            $table->integer('user_id');
            $table->integer('hotel_id')->nullable();
            $table->integer('tour_id')->nullable();
            $table->decimal('total_price', 8, 2);
            $table->enum('booking_status', ['PENDING', 'CONFIRMED', 'CANCELLED']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
