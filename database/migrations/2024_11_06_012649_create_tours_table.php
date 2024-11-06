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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('number_of_guests');
            $table->dateTime('departure_time');
            $table->string('departure_point');
            $table->string('duration');
            $table->string('address');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('tour_price', 8, 2);
            $table->integer('tour_type');
            $table->json('tour_rule')->nullable();
            $table->integer('faq')->nullable();
            $table->integer('destination_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
