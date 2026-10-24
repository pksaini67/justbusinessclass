<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Client Testimonial & Review')
                    ->description('Client details, route flown, feedback quote, and star rating')
                    ->columns(2)
                    ->schema([
                        TextInput::make('author')
                            ->label('Client Name')
                            ->placeholder('e.g. Victoria Sterling')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('role')
                            ->label('Professional Role / Title')
                            ->placeholder('e.g. Managing Director, Global Capital')
                            ->maxLength(255),

                        TextInput::make('city')
                            ->label('Client Location')
                            ->placeholder('e.g. New York, NY')
                            ->maxLength(255),

                        TextInput::make('route')
                            ->label('Flight Route Flown')
                            ->placeholder('e.g. JFK → LHR Round Trip')
                            ->maxLength(255),

                        Select::make('rating')
                            ->label('Rating (Stars)')
                            ->options([
                                5 => '⭐⭐⭐⭐⭐ (5 Stars)',
                                4 => '⭐⭐⭐⭐ (4 Stars)',
                                3 => '⭐⭐⭐ (3 Stars)',
                            ])
                            ->default(5)
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower values appear first in the testimonial carousel.'),

                        Textarea::make('quote')
                            ->label('Client Feedback Quote')
                            ->rows(4)
                            ->placeholder('Enter the client testimonial...')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Display Controls')
                    ->columns(2)
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active on Website')
                            ->default(true)
                            ->helperText('Display this review on the homepage testimonial carousel.'),

                        Toggle::make('is_featured')
                            ->label('Featured Testimonial')
                            ->default(true)
                            ->helperText('Spotlight in homepage priority rotation.'),
                    ]),
            ]);
    }
}
