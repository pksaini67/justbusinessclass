<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Airline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'slug',
        'logo',
        'alliance',
        'cabin_class',
        'rating',
        'summary',
        'content',
        'is_featured',
        'show_in_marquee',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'show_in_marquee' => 'boolean',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($airline) {
            if (empty($airline->slug)) {
                $airline->slug = Str::slug($airline->name);
            }
        });
    }

    public function getLogoUrlAttribute(): ?string
    {
        if (! empty($this->logo)) {
            if (str_starts_with($this->logo, 'http://') || str_starts_with($this->logo, 'https://')) {
                return $this->logo;
            }

            // Publicly accessible uploaded logo
            return asset('storage/' . ltrim($this->logo, '/'));
        }

        // Check if there is a curated vector logo for this carrier slug
        if (! empty($this->slug) && file_exists(public_path('images/airlines/' . $this->slug . '.svg'))) {
            return asset('images/airlines/' . $this->slug . '.svg');
        }

        return null;
    }
}
