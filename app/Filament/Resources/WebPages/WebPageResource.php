<?php

namespace App\Filament\Resources\WebPages;

use App\Filament\Resources\WebPages\Pages\CreateWebPage;
use App\Filament\Resources\WebPages\Pages\EditWebPage;
use App\Filament\Resources\WebPages\Pages\ListWebPages;
use App\Filament\Resources\WebPages\Schemas\WebPageForm;
use App\Filament\Resources\WebPages\Tables\WebPagesTable;
use App\Models\Page;
use BackedEnum;
use Filament\Actions\ReplicateAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use UnitEnum;

class WebPageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $navigationLabel = 'Страницы';

    protected static ?string $modelLabel = 'Страница';

    protected static ?string $pluralModelLabel = 'Страницы';

    protected static string|UnitEnum|null $navigationGroup = 'Сайт';

    protected static ?int $navigationSort = 0;

    public static function form(Schema $schema): Schema
    {
        return WebPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WebPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWebPages::route('/'),
            'create' => CreateWebPage::route('/create'),
            'edit' => EditWebPage::route('/{record}/edit'),
        ];
    }

    public static function replicateAction(): ReplicateAction
    {
        return ReplicateAction::make()
            ->label('Дублировать')
            ->modalHeading('Дублировать страницу')
            ->modalSubmitActionLabel('Создать копию')
            ->successNotificationTitle('Создана копия страницы')
            ->mutateRecordDataUsing(function (array $data): array {
                $base = $data['slug'] ?? 'page';
                $newSlug = $base.'-kopia-'.Str::lower(Str::random(6));
                while (Page::query()->where('slug', $newSlug)->exists()) {
                    $newSlug = $base.'-kopia-'.Str::lower(Str::random(8));
                }
                $data['slug'] = $newSlug;
                $data['is_published'] = false;
                if (! empty($data['title'])) {
                    $data['title'] .= ' (копия)';
                }

                return $data;
            })
            ->successRedirectUrl(function (ReplicateAction $action): string {
                $replica = $action->getReplica();
                if (! $replica instanceof Page) {
                    return static::getUrl('index');
                }

                return static::getUrl('edit', ['record' => $replica]);
            });
    }
}
