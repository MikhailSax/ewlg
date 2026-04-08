<?php

namespace App\Filament\Resources\MediaLibrary\Pages;

use App\Filament\Resources\MediaLibrary\MediaLibraryResource;
use App\Models\Media;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditMediaLibrary extends EditRecord
{
    protected static string $resource = MediaLibraryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if (! $record instanceof Media) {
            return parent::handleRecordUpdate($record, $data);
        }

        $oldPath = $record->path;
        $oldDisk = $record->disk;

        if (isset($data['path']) && is_string($data['path']) && $data['path'] !== $oldPath) {
            if ($oldPath !== '' && Storage::disk($oldDisk)->exists($oldPath)) {
                Storage::disk($oldDisk)->delete($oldPath);
            }
            $data['disk'] = 'public';
            $data = array_merge($data, Media::metaFromStoredPath('public', $data['path']));
        }

        $record->update($data);

        return $record;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
