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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('address');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->integer('number_of_guests');
            $table->dateTime('departure_time');
            $table->string('departure_point');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->json('hotel_rule')->nullable();
            $table->integer('destination_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
