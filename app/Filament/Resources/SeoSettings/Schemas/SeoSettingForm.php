<?php

namespace App\Filament\Resources\SeoSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class SeoSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Page & Target Route')
                    ->description('Identify which webpage or global route this SEO rule applies to')
                    ->columns(3)
                    ->schema([
                        TextInput::make('page_name')
                            ->label('Page Name / Section')
                            ->placeholder('e.g. Homepage, Best Deals, Australia Page')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('page_identifier')
                            ->label('Page Route Key')
                            ->placeholder('e.g. global, home, about, deals, airlines, blog, contact')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(100)
                            ->helperText('Use "global" for default site-wide fallback or route name (e.g. home, deals).'),

                        Toggle::make('is_active')
                            ->label('Rule Active')
                            ->default(true)
                            ->helperText('When enabled, overrides default meta tags on this page.'),
                    ]),

                Section::make('Search Engine Meta Tags (Google & Bing)')
                    ->description('Snippet optimization: Title tags, Meta descriptions, canonical URL, and index directives')
                    ->columns(2)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('SEO Meta Title (<title>)')
                            ->placeholder('Brand · Business Class Flights | Discount Unlisted Fares')
                            ->maxLength(255)
                            ->helperText('Recommended 50–60 characters. Appears as the headline in search engine results.')
                            ->columnSpanFull(),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3)
                            ->placeholder('Save 30% to 60% on international business class flights with private consolidator contracts...')
                            ->helperText('Recommended 140–160 characters. Summarizes page content in search results.')
                            ->columnSpanFull(),

                        TextInput::make('meta_keywords')
                            ->label('Target Focus Keywords (comma-separated)')
                            ->placeholder('business class flights, wholesale airfare, discount lie-flat seats')
                            ->columnSpan(1),

                        TextInput::make('canonical_url')
                            ->label('Canonical URL')
                            ->placeholder('https://justbusinessclass.us/deals')
                            ->helperText('Helps search engines prevent duplicate content indexing issues.')
                            ->columnSpan(1),

                        Select::make('robots')
                            ->label('Robots Directives')
                            ->options([
                                'index, follow' => 'index, follow (Default - Allow search engines to index and follow links)',
                                'noindex, follow' => 'noindex, follow (Hide from search engines but follow internal links)',
                                'noindex, nofollow' => 'noindex, nofollow (Complete block from search indexes)',
                            ])
                            ->default('index, follow')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('site_name')
                            ->label('Site Brand Name')
                            ->placeholder('JustBusinessClass.us')
                            ->default('JustBusinessClass.us')
                            ->columnSpan(1),
                    ]),

                Section::make('Branding, Logo & Favicon Assets')
                    ->description('Upload or manage site icon, transparent header logo, and dark mode logo')
                    ->columns(3)
                    ->schema([
                        FileUpload::make('favicon')
                            ->label('Browser Favicon (.ico, .png, .svg)')
                            ->disk('public')
                            ->directory('seo')
                            ->image()
                            ->helperText('Recommended 32x32 or 48x48 icon.'),

                        FileUpload::make('logo')
                            ->label('Primary Website Logo (.svg, .png)')
                            ->disk('public')
                            ->directory('seo')
                            ->image()
                            ->imageResizeMode('contain')
                            ->helperText('Appears in the header navigation bar.'),

                        FileUpload::make('logo_dark')
                            ->label('Alternative / Dark Logo')
                            ->disk('public')
                            ->directory('seo')
                            ->image()
                            ->imageResizeMode('contain')
                            ->helperText('Optional contrast logo for dark backgrounds.'),
                    ]),

                Section::make('Social Media Sharing (Open Graph - Facebook, LinkedIn, WhatsApp)')
                    ->description('Controls how this page appears when shared on social messaging platforms')
                    ->columns(2)
                    ->schema([
                        TextInput::make('og_title')
                            ->label('Open Graph Title (og:title)')
                            ->placeholder('Wholesale Business Class Flights · JustBusinessClass.us')
                            ->maxLength(255)
                            ->columnSpan(1),

                        Select::make('og_type')
                            ->label('Open Graph Type (og:type)')
                            ->options([
                                'website' => 'website',
                                'article' => 'article',
                                'product' => 'product',
                            ])
                            ->default('website')
                            ->columnSpan(1),

                        Textarea::make('og_description')
                            ->label('Open Graph Description (og:description)')
                            ->rows(3)
                            ->placeholder('Unpublished business class airfares. Save 30% to 60% with private consolidator desk.')
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('Social Share Card Image (1200x630px recommended)')
                            ->disk('public')
                            ->directory('seo')
                            ->image()
                            ->columnSpanFull()
                            ->helperText('Appears as the large preview card when shared on WhatsApp, Facebook, iMessage, and LinkedIn.'),
                    ]),

                Section::make('Twitter / X Card Optimization')
                    ->description('Configures the interactive summary card shown on X / Twitter')
                    ->columns(2)
                    ->schema([
                        Select::make('twitter_card')
                            ->label('Twitter Card Format')
                            ->options([
                                'summary_large_image' => 'summary_large_image (Large preview photo - Recommended)',
                                'summary' => 'summary (Small square thumbnail)',
                            ])
                            ->default('summary_large_image'),

                        TextInput::make('twitter_title')
                            ->label('Twitter Title')
                            ->placeholder('JustBusinessClass.us · Wholesale Business Class Flights'),

                        Textarea::make('twitter_description')
                            ->label('Twitter Description')
                            ->rows(2)
                            ->placeholder('Consolidator contracts and unlisted net fares on flagship global airlines.')
                            ->columnSpanFull(),
                    ]),

                Section::make('Advanced Code Injection & Schema.org JSON-LD')
                    ->description('Add Google Analytics, GTM, Meta Pixel, or Rich Snippet JSON-LD structured data')
                    ->schema([
                        Textarea::make('schema_json')
                            ->label('JSON-LD Structured Data (<script type="application/ld+json">)')
                            ->rows(6)
                            ->placeholder('{"@context": "https://schema.org", "@type": "TravelAgency", ...}')
                            ->helperText('Provide valid JSON-LD schema for rich search results (FAQ, LocalBusiness, Breadcrumbs).'),

                        Textarea::make('header_scripts')
                            ->label('Header Code (<head> Injection)')
                            ->rows(4)
                            ->placeholder('<!-- Google Tag Manager, Analytics, or Verification meta tags -->')
                            ->helperText('Rendered directly inside <head> before page rendering.'),

                        Textarea::make('footer_scripts')
                            ->label('Footer Code (Before </body> Injection)')
                            ->rows(4)
                            ->placeholder('<!-- Live chat widgets, tracking pixels, or conversion scripts -->')
                            ->helperText('Rendered right before the closing </body> tag.'),
                    ]),
            ]);
    }
}
