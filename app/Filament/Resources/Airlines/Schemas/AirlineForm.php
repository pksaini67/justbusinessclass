<?php

namespace App\Filament\Resources\Airlines\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class AirlineForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Airline Details')
                    ->description('Primary airline identity and carrier codes')
                    ->columns(3)
                    ->schema([
                        TextInput::make('name')
                            ->label('Airline Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, ?string $state, $set) {
                                if ($operation === 'create' && $state) {
                                    $set('slug', Str::slug($state));
                                }
                            }),

                        TextInput::make('code')
                            ->label('IATA / Airline Code')
                            ->placeholder('e.g. AF, EK, QR, BA')
                            ->maxLength(10),

                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),

                        Select::make('alliance')
                            ->label('Alliance / Global Network')
                            ->options([
                                'SkyTeam' => 'SkyTeam',
                                'Star Alliance' => 'Star Alliance',
                                'oneworld' => 'oneworld',
                                'Independent' => 'Independent / Partner',
                            ])
                            ->default('SkyTeam')
                            ->searchable(),

                        TextInput::make('cabin_class')
                            ->label('Primary Cabin Service')
                            ->default('Business & First Class')
                            ->maxLength(100),

                        TextInput::make('rating')
                            ->label('Client / Cabin Rating')
                            ->default('4.9')
                            ->maxLength(10),
                    ]),

                Section::make('Media & Visibility')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Airline Logo (SVG or PNG)')
                            ->image()
                            ->disk('public')
                            ->directory('airlines')
                            ->imageResizeMode('contain')
                            ->helperText('Upload a clean transparent vector logo or high-resolution PNG.'),

                        Section::make('Publishing & Ranking')
                            ->schema([
                                Toggle::make('is_active')
                                    ->label('Active on Website')
                                    ->default(true)
                                    ->helperText('Visible on public airlines directory and booking pages.'),

                                Toggle::make('is_featured')
                                    ->label('Featured Airline')
                                    ->default(false)
                                    ->helperText('Highlighted on premier airline cards.'),

                                Toggle::make('show_in_marquee')
                                    ->label('Show Logo in Homepage Marquee')
                                    ->default(true)
                                    ->helperText('Shows airline logo in the homepage partner ribbon right after hero section.'),

                                TextInput::make('sort_order')
                                    ->label('Display Priority')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower numbers appear first in listings.'),
                            ]),
                    ]),

                Section::make('Editorial & Rich Article Content')
                    ->description('Detailed airline overview, business class seating, dining, amenities, and fleet intelligence')
                    ->schema([
                        Textarea::make('summary')
                            ->label('Short Excerpt / Deck')
                            ->rows(2)
                            ->placeholder('e.g. Indulge in world-renowned French culinary artistry, 180° lie-flat suites with direct aisle access, and priority lounge comfort.')
                            ->helperText('Shown on airline cards and hero subheadings.'),

                        RichEditor::make('content')
                            ->label('Full Airline Guide & Review')
                            ->placeholder('Describe the cabin experience, seat specifications, lounges, dining, entertainment, baggage allowances, and routes...')
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
