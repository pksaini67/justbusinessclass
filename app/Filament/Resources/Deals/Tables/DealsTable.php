<?php

namespace App\Filament\Resources\Deals\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DealsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Visual')
                    ->circular()
                    ->disk('public'),

                TextColumn::make('country')
                    ->label('Country')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->slug ? "/deals/{$record->slug}" : null),

                TextColumn::make('region')
                    ->label('Region')
                    ->badge()
                    ->sortable(),

                TextColumn::make('starting_price')
                    ->label('Starting From')
                    ->money('USD')
                    ->sortable(),

                TextColumn::make('savings_tag')
                    ->label('Savings')
                    ->badge()
                    ->color('warning'),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('region')
                    ->options([
                        'Oceania' => 'Oceania',
                        'Europe' => 'Europe',
                        'Asia' => 'Asia',
                        'Middle East' => 'Middle East',
                        'Americas' => 'Americas',
                        'Africa' => 'Africa',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
