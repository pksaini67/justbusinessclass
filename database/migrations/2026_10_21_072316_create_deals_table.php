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
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('country'); // e.g. Australia
            $table->string('country_code', 10)->nullable(); // e.g. AU
            $table->string('region')->default('Oceania'); // e.g. Oceania, Europe, Asia, Americas
            $table->string('title')->nullable(); // e.g. Business Class to Australia Deals
            $table->string('slug')->unique(); // e.g. australia
            $table->string('cabin_class')->default('Business & First Class');
            $table->decimal('starting_price', 10, 2)->nullable(); // e.g. 2895.00
            $table->string('savings_tag')->default('30-60% OFF'); // e.g. 30-60% OFF
            $table->string('featured_image')->nullable();
            $table->text('summary')->nullable();
            $table->longText('content')->nullable(); // Rich text editor content
            $table->json('pricing_routes')->nullable(); // Array of popular city-pair routes with fares and airlines
            $table->json('top_cities')->nullable(); // Key destination cities e.g. Sydney, Melbourne, Brisbane
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
