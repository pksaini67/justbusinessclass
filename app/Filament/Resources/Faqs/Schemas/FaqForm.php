<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('FAQ Question & Answer')
                    ->description('Frequently asked question and detailed answer content')
                    ->schema([
                        TextInput::make('question')
                            ->label('Question')
                            ->placeholder('e.g. Why are your business class rates lower than airline websites?')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('answer')
                            ->label('Answer')
                            ->rows(5)
                            ->placeholder('Provide a comprehensive, clear, and reassuring answer...')
                            ->required()
                            ->columnSpanFull(),
                    ]),

                Section::make('Organization & Visibility')
                    ->columns(3)
                    ->schema([
                        Select::make('category')
                            ->label('Category')
                            ->options([
                                'General' => 'General / How It Works',
                                'Pricing' => 'Pricing & Wholesale Discounts',
                                'Booking' => 'Booking & Flexibility',
                                'Amenities' => 'Cabin Amenities & Lounges',
                            ])
                            ->default('General')
                            ->required(),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower values appear first in the accordion.'),

                        Toggle::make('is_active')
                            ->label('Active on Website')
                            ->default(true)
                            ->helperText('Visible on homepage FAQ accordion.'),
                    ]),
            ]);
    }
}
