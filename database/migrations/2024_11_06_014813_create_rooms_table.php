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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_people');
            $table->integer('number_of_bed');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('room_price', 8, 2);
            $table->string('area')->nullable();
            $table->integer('room_type');
            $table->json('room_rule')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
