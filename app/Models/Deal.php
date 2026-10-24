<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'country',
        'country_code',
        'region',
        'title',
        'slug',
        'cabin_class',
        'starting_price',
        'savings_tag',
        'featured_image',
        'summary',
        'content',
        'pricing_routes',
        'top_cities',
        'is_active',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'starting_price' => 'decimal:2',
        'sort_order' => 'integer',
        'pricing_routes' => 'array',
        'top_cities' => 'array',
    ];

    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (! $this->featured_image) {
            return null;
        }

        if (str_starts_with($this->featured_image, 'http')) {
            return $this->featured_image;
        }

        return asset('storage/' . $this->featured_image);
    }

    public function getDisplayTitleAttribute(): string
    {
        return $this->title ?: "Business Class to {$this->country} Deals";
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
