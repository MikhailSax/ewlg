<?php

namespace App\Filament\Resources\MediaLibrary;

use App\Filament\Resources\MediaLibrary\Pages\CreateMediaLibrary;
use App\Filament\Resources\MediaLibrary\Pages\EditMediaLibrary;
use App\Filament\Resources\MediaLibrary\Pages\ListMediaLibrary;
use App\Filament\Resources\MediaLibrary\Schemas\MediaForm;
use App\Filament\Resources\MediaLibrary\Tables\MediaLibraryTable;
use App\Models\Media;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MediaLibraryResource extends Resource
{
    protected static ?string $slug = 'media';

    protected static ?string $model = Media::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    protected static ?string $navigationLabel = 'Медиатека';

    protected static ?string $modelLabel = 'Файл';

    protected static ?string $pluralModelLabel = 'Медиатека';

    protected static string|UnitEnum|null $navigationGroup = 'Сайт';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return MediaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MediaLibraryTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMediaLibrary::route('/'),
            'create' => CreateMediaLibrary::route('/create'),
            'edit' => EditMediaLibrary::route('/{record}/edit'),
        ];
    }
}
