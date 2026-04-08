<?php

namespace App\Filament\Resources\WebPages\Pages;

use App\Filament\Resources\WebPages\WebPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWebPage extends CreateRecord
{
    protected static string $resource = WebPageResource::class;

    protected function afterFill(): void
    {
        $slug = request()->query('slug');
        if (! is_string($slug) || $slug === '') {
            return;
        }

        $this->form->fill([
            'slug' => $slug,
            'is_published' => false,
        ]);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
