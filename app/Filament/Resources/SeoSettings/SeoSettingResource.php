<?php

namespace App\Filament\Resources\SeoSettings;

use App\Filament\Resources\SeoSettings\Pages\CreateSeoSetting;
use App\Filament\Resources\SeoSettings\Pages\EditSeoSetting;
use App\Filament\Resources\SeoSettings\Pages\ListSeoSettings;
use App\Filament\Resources\SeoSettings\Schemas\SeoSettingForm;
use App\Filament\Resources\SeoSettings\Tables\SeoSettingsTable;
use App\Models\SeoSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SeoSettingResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAlt;

    protected static ?string $navigationLabel = 'SEO Toolkit';

    protected static ?string $modelLabel = 'SEO Page Setting';

    protected static ?string $pluralModelLabel = 'SEO Toolkit';

    protected static string|\UnitEnum|null $navigationGroup = 'Site Content';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'page_name';

    public static function form(Schema $schema): Schema
    {
        return SeoSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SeoSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSeoSettings::route('/'),
            'create' => CreateSeoSetting::route('/create'),
            'edit' => EditSeoSetting::route('/{record}/edit'),
        ];
    }
}
