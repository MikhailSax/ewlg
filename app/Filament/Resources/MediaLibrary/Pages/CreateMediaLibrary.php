<?php

namespace App\Filament\Resources\MediaLibrary\Pages;

use App\Filament\Resources\MediaLibrary\MediaLibraryResource;
use App\Models\Media;
use Filament\Resources\Pages\CreateRecord;

class CreateMediaLibrary extends CreateRecord
{
    protected static string $resource = MediaLibraryResource::class;

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['disk'] = 'public';
        if (! empty($data['path']) && is_string($data['path'])) {
            $data = array_merge($data, Media::metaFromStoredPath('public', $data['path']));
        }

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
