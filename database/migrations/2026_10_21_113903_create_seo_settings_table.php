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
        Schema::create('seo_settings', function (Blueprint $table) {
            $table->id();
            $table->string('page_identifier')->unique(); // e.g. 'global', 'home', 'about', 'deals', 'airlines', 'blog', 'contact'
            $table->string('page_name'); // e.g. 'Global / Default Settings', 'Home Page', 'Deals Page'
            
            // Core Meta
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('robots')->default('index, follow'); // index, follow / noindex, nofollow
            
            // Branding & Assets (used primarily on 'global' or per page)
            $table->string('site_name')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_dark')->nullable();

            // Open Graph (Social Sharing)
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->default('website');

            // Twitter Card
            $table->string('twitter_card')->default('summary_large_image');
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();

            // Schema & Scripts
            $table->longText('schema_json')->nullable(); // JSON-LD structured data
            $table->longText('header_scripts')->nullable(); // Google Analytics, GTM, custom tags
            $table->longText('footer_scripts')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_settings');
    }
};
