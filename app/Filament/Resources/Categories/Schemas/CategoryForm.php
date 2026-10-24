<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Category Hierarchy & Details')
                    ->description('Organize categories and subcategories just like WordPress')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Category Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, ?string $state, $set) {
                                if ($operation === 'create' && $state) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->columnSpan(1),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('URL-friendly version of the name.')
                            ->columnSpan(1),

                        Select::make('parent_id')
                            ->label('Parent Category')
                            ->placeholder('None (Top-Level Category)')
                            ->options(function (?Category $record) {
                                $query = Category::whereNull('parent_id');
                                if ($record) {
                                    $query->where('id', '!=', $record->id);
                                }
                                return $query->orderBy('name')->pluck('name', 'id');
                            })
                            ->searchable()
                            ->helperText('Select a parent category to make this a subcategory, or leave blank to make it a main category.')
                            ->columnSpan(1),

                        TextInput::make('sort_order')
                            ->label('Display Order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first.')
                            ->columnSpan(1),

                        Textarea::make('description')
                            ->label('Description')
                            ->rows(3)
                            ->placeholder('Describe what this category or subcategory covers...')
                            ->helperText('The description is not prominent by default; however, some themes may show it.')
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->label('Category Banner / Thumbnail')
                            ->image()
                            ->disk('public')
                            ->directory('categories')
                            ->helperText('Optional category icon or banner visual.')
                            ->columnSpan(1),

                        Toggle::make('is_visible')
                            ->label('Visible on Website')
                            ->default(true)
                            ->helperText('Turn off to hide this category and its badges from public listings.')
                            ->columnSpan(1),
                    ]),

                Section::make('Search Engine Optimization (SEO Toolkit)')
                    ->description('Category page metadata and social preview settings')
                    ->collapsible()
                    ->collapsed(true)
                    ->columns(2)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('SEO Meta Title')
                            ->maxLength(255)
                            ->placeholder('e.g. Flight Reviews & Business Cabin Insights · JustBusinessClass.us')
                            ->columnSpanFull(),

                        Textarea::make('meta_description')
                            ->label('SEO Meta Description')
                            ->rows(2)
                            ->maxLength(500)
                            ->placeholder('Explore the best business class flight reviews...')
                            ->columnSpanFull(),

                        TextInput::make('canonical_url')
                            ->label('Canonical URL Override')
                            ->placeholder('https://justbusinessclass.us/blog?category=flight-reviews')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
