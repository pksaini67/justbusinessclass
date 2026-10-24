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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('author'); // e.g. Victoria Sterling
            $table->string('role')->nullable(); // e.g. Managing Director, Global Capital
            $table->string('city')->nullable(); // e.g. New York, NY
            $table->string('route')->nullable(); // e.g. JFK → LHR Round Trip
            $table->text('quote');
            $table->unsignedTinyInteger('rating')->default(5); // 1-5 stars
            $table->string('avatar')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
