<?php

namespace App\Filament\Resources\SeoSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_name')
                    ->label('Page / Section')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->description(fn ($record) => $record->page_identifier === 'global' ? 'Site-Wide Global Fallback' : "Route: {$record->page_identifier}"),

                TextColumn::make('meta_title')
                    ->label('Title Tag (<title>)')
                    ->searchable()
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->meta_title),

                TextColumn::make('meta_description')
                    ->label('Meta Description')
                    ->limit(65)
                    ->tooltip(fn ($record) => $record->meta_description),

                TextColumn::make('robots')
                    ->label('Robots')
                    ->badge()
                    ->color(fn ($state) => str_contains($state, 'noindex') ? 'danger' : 'success'),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y')
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
