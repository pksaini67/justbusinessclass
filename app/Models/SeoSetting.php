<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoSetting extends Model
{
    protected $fillable = [
        'page_identifier',
        'page_name',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'robots',
        'site_name',
        'favicon',
        'logo',
        'logo_dark',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'schema_json',
        'header_scripts',
        'footer_scripts',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getFaviconUrlAttribute(): ?string
    {
        if (! $this->favicon) {
            return asset('favicon.ico');
        }
        return str_starts_with($this->favicon, 'http') ? $this->favicon : asset('storage/' . $this->favicon);
    }

    public function getLogoUrlAttribute(): ?string
    {
        if (! $this->logo) {
            return asset('images/logo.svg');
        }
        return str_starts_with($this->logo, 'http') ? $this->logo : asset('storage/' . $this->logo);
    }

    public function getOgImageUrlAttribute(): ?string
    {
        if (! $this->og_image) {
            return null;
        }
        return str_starts_with($this->og_image, 'http') ? $this->og_image : asset('storage/' . $this->og_image);
    }

    /**
     * Resolve SEO data for a page identifier, falling back to global settings.
     */
    public static function forPage(string $identifier = 'home'): self
    {
        $global = static::where('page_identifier', 'global')->first();
        $page = static::where('page_identifier', $identifier)->where('is_active', true)->first();

        if (! $page) {
            return $global ?? new static([
                'page_identifier' => $identifier,
                'page_name' => ucfirst($identifier),
                'meta_title' => 'JustBusinessClass.us · Wholesale Business Class Flight Concierge',
                'meta_description' => 'Save 30% to 60% on international business & first class flights with unlisted wholesale consolidator seat blocks.',
                'robots' => 'index, follow',
            ]);
        }

        // Inherit global defaults if page fields are empty
        if ($global) {
            $page->site_name = $page->site_name ?: $global->site_name;
            $page->favicon = $page->favicon ?: $global->favicon;
            $page->logo = $page->logo ?: $global->logo;
            $page->header_scripts = $page->header_scripts ?: $global->header_scripts;
            $page->footer_scripts = $page->footer_scripts ?: $global->footer_scripts;
            $page->og_image = $page->og_image ?: $global->og_image;
        }

        return $page;
    }
}
