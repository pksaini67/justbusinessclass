<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->label('Cover')
                    ->disk('public')
                    ->circular(false)
                    ->square()
                    ->defaultImageUrl(asset('images/hero/hero.svg')),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(55)
                    ->description(fn ($record) => "/blog/{$record->slug}"),

                TextColumn::make('blogCategory.name')
                    ->label('Category')
                    ->badge()
                    ->color('amber')
                    ->searchable()
                    ->description(fn ($record) => $record->subcategory?->name ? '↳ ' . $record->subcategory->name : null),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'warning',
                        default => 'gray',
                    }),

                IconColumn::make('is_featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Published')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'published' => 'Published',
                        'draft' => 'Draft',
                    ]),
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('blogCategory', 'name', fn ($query) => $query->whereNull('parent_id')->orderBy('sort_order')->orderBy('name')),
                SelectFilter::make('subcategory_id')
                    ->label('Subcategory')
                    ->relationship('subcategory', 'name', fn ($query) => $query->whereNotNull('parent_id')->orderBy('name')),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
