<?php

namespace App\Filament\Resources\Reviews\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReviewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('author')
                    ->label('Client')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->role ? "{$record->role} · {$record->city}" : $record->city),

                TextColumn::make('route')
                    ->label('Route Flown')
                    ->searchable()
                    ->badge()
                    ->color('gray'),

                TextColumn::make('rating')
                    ->label('Stars')
                    ->formatStateUsing(fn ($state) => str_repeat('⭐', $state ?? 5))
                    ->sortable(),

                TextColumn::make('quote')
                    ->label('Quote')
                    ->limit(60)
                    ->tooltip(fn ($record) => $record->quote),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
            ])
            ->filters([
                //
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
