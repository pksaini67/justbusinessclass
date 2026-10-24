<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Article Identity & Header')
                    ->description('Primary article headline, SEO URL slug, and category attribution')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->label('Article Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, ?string $state, $set) {
                                if ($operation === 'create' && $state) {
                                    $set('slug', Str::slug($state));
                                }
                            })
                            ->columnSpan(2),

                        TextInput::make('slug')
                            ->label('URL Slug (/blog/{slug})')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->helperText('Auto-generated from title. Controls the public webpage URL.'),

                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('blogCategory', 'name', fn ($query) => $query->whereNull('parent_id')->orderBy('sort_order')->orderBy('name'))
                            ->required()
                            ->searchable()
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function ($state, $set) {
                                $set('subcategory_id', null);
                                if ($state) {
                                    $category = \App\Models\Category::find($state);
                                    if ($category) {
                                        $set('category', $category->name);
                                    }
                                }
                            })
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Textarea::make('description'),
                            ])
                            ->helperText('Select a main category or click + to create a new one.')
                            ->columnSpan(1),

                        Select::make('subcategory_id')
                            ->label('Subcategory')
                            ->options(function ($get) {
                                $categoryId = $get('category_id');
                                if (! $categoryId) {
                                    return [];
                                }
                                return \App\Models\Category::where('parent_id', $categoryId)
                                    ->orderBy('sort_order')
                                    ->orderBy('name')
                                    ->pluck('name', 'id');
                            })
                            ->searchable()
                            ->placeholder(fn ($get) => $get('category_id') ? 'Select a subcategory (optional)' : 'Select category first')
                            ->helperText('Optional WordPress-style subcategory under the chosen category.')
                            ->columnSpan(1),

                        TextInput::make('author_name')
                            ->label('Author / Editorial Byline')
                            ->default('Aviation Editorial Desk')
                            ->maxLength(100),

                        TextInput::make('read_time')
                            ->label('Estimated Read Time (Minutes)')
                            ->numeric()
                            ->default(5)
                            ->suffix('min'),
                    ]),

                Section::make('Featured Image & Visibility')
                    ->description('Visual banner asset, publishing status, and featured placement')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Feature Image (Landscape 16:9 recommended)')
                            ->image()
                            ->disk('public')
                            ->directory('blog')
                            ->imageResizeMode('contain')
                            ->helperText('Upload a high-resolution luxury cabin, destination, or aircraft visual.')
                            ->columnSpan(1),

                        Section::make('Publishing Controls')
                            ->schema([
                                Select::make('status')
                                    ->label('Publication Status')
                                    ->options([
                                        'published' => 'Published (Live on Website)',
                                        'draft' => 'Draft (Unlisted / In Progress)',
                                    ])
                                    ->default('published')
                                    ->required(),

                                DateTimePicker::make('published_at')
                                    ->label('Publication Date & Time')
                                    ->default(now())
                                    ->native(false),

                                Toggle::make('is_featured')
                                    ->label('Feature on Blog Showcase')
                                    ->default(false)
                                    ->helperText('Pins the article to the top hero spot on the blog index.'),
                            ])
                            ->columnSpan(1),
                    ]),

                Section::make('Article Content & Body')
                    ->description('Summary deck and full editorial body crafted with the website design typography')
                    ->schema([
                        Textarea::make('excerpt')
                            ->label('Excerpt / Lead Deck')
                            ->rows(3)
                            ->placeholder('Enter a concise, compelling 2-sentence summary of the article...')
                            ->helperText('Displayed on blog index cards and metadata previews.')
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Article Body')
                            ->required()
                            ->placeholder('Write your comprehensive luxury travel article here...')
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

                Section::make('Search Engine Optimization (SEO Toolkit)')
                    ->description('Snippet previews, custom title tags, meta descriptions, canonical URLs, and index directives')
                    ->collapsible()
                    ->collapsed(false)
                    ->columns(2)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('SEO Meta Title (<title>)')
                            ->placeholder('e.g. Air France Business Class Review (2026) · JustBusinessClass.us')
                            ->maxLength(255)
                            ->helperText('Defaults to the article title if left blank. Optimal length: 50–60 characters.')
                            ->columnSpanFull(),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3)
                            ->placeholder('Detailed review of Air France business class lie-flat suites, Michelin gastronomy, and Champagne service...')
                            ->helperText('Defaults to the article excerpt if left blank. Optimal length: 140–160 characters.')
                            ->columnSpanFull(),

                        TextInput::make('meta_keywords')
                            ->label('Focus Keywords (comma-separated)')
                            ->placeholder('air france business class, lie flat seat, skyteam flight review')
                            ->columnSpan(1),

                        TextInput::make('canonical_url')
                            ->label('Canonical URL Override')
                            ->placeholder('https://justbusinessclass.us/blog/sample-slug')
                            ->helperText('Auto-generated from the article URL by default.')
                            ->columnSpan(1),

                        Select::make('robots')
                            ->label('Robots Directives')
                            ->options([
                                'index, follow' => 'index, follow (Default - Allow search indexing)',
                                'noindex, follow' => 'noindex, follow (Hide from search engines)',
                                'noindex, nofollow' => 'noindex, nofollow (Complete block)',
                            ])
                            ->default('index, follow')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('og_title')
                            ->label('Social Share Title (og:title)')
                            ->placeholder('Custom title when shared on Facebook / WhatsApp')
                            ->columnSpan(1),

                        Textarea::make('og_description')
                            ->label('Social Share Description (og:description)')
                            ->rows(2)
                            ->placeholder('Custom summary card description for social media')
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('Social Share Card Image (1200x630px)')
                            ->disk('public')
                            ->directory('blog/seo')
                            ->image()
                            ->helperText('Defaults to the featured article cover image if not uploaded.')
                            ->columnSpanFull(),

                        Textarea::make('schema_json')
                            ->label('Article Schema.org JSON-LD (<script type="application/ld+json">)')
                            ->rows(4)
                            ->placeholder('{"@context": "https://schema.org", "@type": "Article", ...}')
                            ->helperText('Optional custom JSON-LD schema payload.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
