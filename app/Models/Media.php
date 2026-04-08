<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $fillable = [
        'disk',
        'path',
        'original_filename',
        'mime_type',
        'size',
        'title',
        'alt',
    ];

    protected function casts(): array
    {
        return [
            'size' => 'integer',
        ];
    }

    protected static function booted(): void
    {
        static::deleting(function (Media $media): void {
            if ($media->path !== '' && Storage::disk($media->disk)->exists($media->path)) {
                Storage::disk($media->disk)->delete($media->path);
            }
        });
    }

    public function isImage(): bool
    {
        return str_starts_with((string) $this->mime_type, 'image/');
    }

    public function isVideo(): bool
    {
        return str_starts_with((string) $this->mime_type, 'video/');
    }

    /**
     * Публичный URL файла (абсолютный).
     */
    public function getUrl(): string
    {
        return url(Storage::disk($this->disk)->url($this->path));
    }

    public static function urlFor(?int $id): ?string
    {
        if ($id === null) {
            return null;
        }

        $media = static::query()->find($id);

        return $media?->getUrl();
    }

    /**
     * @return array{original_filename: string, mime_type: string, size: int}
     */
    public static function metaFromStoredPath(string $disk, string $path): array
    {
        $fs = Storage::disk($disk);

        return [
            'original_filename' => basename($path),
            'mime_type' => $fs->mimeType($path) ?: 'application/octet-stream',
            'size' => $fs->exists($path) ? (int) ($fs->size($path) ?: 0) : 0,
        ];
    }
}
