<?php

namespace App\Filament\Resources\Deals\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class DealForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Country & Destination Details')
                    ->description('Set country name, routing slug, and regional category')
                    ->columns(3)
                    ->schema([
                        TextInput::make('country')
                            ->label('Country Name')
                            ->placeholder('e.g. Australia, France, Japan, United Kingdom')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, ?string $state, $set) {
                                if ($operation === 'create' && $state) {
                                    $set('slug', Str::slug($state));
                                    $set('title', "Business Class to {$state} Deals");
                                }
                            }),

                        TextInput::make('slug')
                            ->label('URL Slug (/deals/{slug})')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('Public deal URL identifier e.g. "australia"'),

                        Select::make('region')
                            ->label('Region')
                            ->options([
                                'Oceania' => 'Oceania (Australia & NZ)',
                                'Europe' => 'Europe',
                                'Asia' => 'Asia & Pacific',
                                'Middle East' => 'Middle East',
                                'Americas' => 'Americas & Caribbean',
                                'Africa' => 'Africa',
                            ])
                            ->default('Oceania')
                            ->required()
                            ->searchable(),

                        TextInput::make('title')
                            ->label('Page Title / Hero Headline')
                            ->placeholder('Business Class to Australia Deals')
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('country_code')
                            ->label('Country Code (ISO 2-letter)')
                            ->placeholder('e.g. AU, FR, JP, GB')
                            ->maxLength(10)
                            ->columnSpan(1),

                        TagsInput::make('top_cities')
                            ->label('Major Destination Cities')
                            ->placeholder('Type city and press Enter (e.g. Sydney, Melbourne, Brisbane, Perth)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Pricing & Savings Tier')
                    ->description('Configure starting wholesale price and route benchmarks')
                    ->columns(3)
                    ->schema([
                        TextInput::make('starting_price')
                            ->label('Starting Wholesale Price ($ USD)')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('2895.00')
                            ->helperText('Lead "Fares from $X,XXX" displayed across deal cards.'),

                        TextInput::make('savings_tag')
                            ->label('Savings Badge')
                            ->default('30-60% OFF')
                            ->placeholder('30-60% OFF')
                            ->maxLength(50),

                        TextInput::make('cabin_class')
                            ->label('Cabin Class')
                            ->default('Business & First Class')
                            ->maxLength(100),
                    ]),

                Section::make('Sample City-to-City Flight Rates')
                    ->description('Sample wholesale flight prices from top US departure gateways')
                    ->schema([
                        Repeater::make('pricing_routes')
                            ->label('Popular Route Deals')
                            ->schema([
                                TextInput::make('origin')
                                    ->label('US Departure')
                                    ->placeholder('e.g. Los Angeles (LAX)')
                                    ->required(),
                                TextInput::make('destination')
                                    ->label('Arrival City')
                                    ->placeholder('e.g. Sydney (SYD)')
                                    ->required(),
                                TextInput::make('airline')
                                    ->label('Partner Carrier(s)')
                                    ->placeholder('e.g. Qantas / Virgin Australia')
                                    ->default('Flagship Carrier'),
                                TextInput::make('retail_price')
                                    ->label('Retail Rack Price')
                                    ->placeholder('$6,800'),
                                TextInput::make('our_price')
                                    ->label('Our Wholesale Price')
                                    ->placeholder('$2,895')
                                    ->required(),
                            ])
                            ->columns(5)
                            ->collapsible()
                            ->defaultItems(2)
                            ->addActionLabel('+ Add Sample Route Rate'),
                    ]),

                Section::make('Visual Media & Placement')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Country Visual Banner')
                            ->image()
                            ->disk('public')
                            ->directory('deals')
                            ->imageResizeMode('contain')
                            ->helperText('Upload an evocative destination visual (e.g. Sydney Opera House, Paris Eiffel Tower).')
                            ->columnSpan(1),

                        Section::make('Listing Controls')
                            ->schema([
                                Toggle::make('is_active')
                                    ->label('Active on Website')
                                    ->default(true)
                                    ->helperText('Visible on public deals directory.'),

                                Toggle::make('is_featured')
                                    ->label('Featured Deal')
                                    ->default(false)
                                    ->helperText('Highlight this destination in top hero showcases.'),

                                TextInput::make('sort_order')
                                    ->label('Sort Order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower values appear first.'),
                            ])
                            ->columnSpan(1),
                    ]),

                Section::make('Country Editorial & Rich Content')
                    ->description('Overview narrative, luxury cabin insights, arrival airports, and travel seasons')
                    ->schema([
                        Textarea::make('summary')
                            ->label('Overview Excerpt')
                            ->rows(3)
                            ->placeholder('e.g. Fly across the Pacific in lie-flat luxury with our unpublished business class fares to Sydney, Melbourne, and beyond.')
                            ->helperText('Shown on deal cards and under hero headlines.')
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Detailed Country Travel Guide & Cabin Intelligence')
                            ->placeholder('Write your comprehensive luxury travel overview, recommended airlines, lounges, best seasons to visit, and route tips...')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
