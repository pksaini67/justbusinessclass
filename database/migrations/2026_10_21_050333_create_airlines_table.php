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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 10)->nullable(); // e.g. AF, EK, QR, BA
            $table->string('slug')->unique();
            $table->string('logo')->nullable(); // image path
            $table->string('alliance')->nullable(); // SkyTeam, Star Alliance, oneworld
            $table->string('cabin_class')->default('Business & First Class');
            $table->string('rating', 10)->default('4.9');
            $table->text('summary')->nullable(); // Short excerpt
            $table->longText('content')->nullable(); // Admin rich text editor content
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
