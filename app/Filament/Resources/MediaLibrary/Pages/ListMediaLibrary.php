<?php

namespace App\Filament\Resources\MediaLibrary\Pages;

use App\Filament\Resources\MediaLibrary\MediaLibraryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class ListMediaLibrary extends ListRecords
{
    protected static string $resource = MediaLibraryResource::class;

    public function getSubheading(): string|Htmlable|null
    {
        return new HtmlString(
            'Скопируйте URL из таблицы. В Blade: <code class="text-xs bg-gray-100 dark:bg-white/10 px-1 rounded">&lt;x-site-media :id="ID" /&gt;</code> — подставьте числовой ID из первой колонки. В CMS в блоке «Изображение» можно выбрать файл из медиатеки.'
        );
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
