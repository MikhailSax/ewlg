<?php

namespace App\Models;

use App\Support\LegacySitePages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'meta_title',
        'meta_description',
        'is_published',
        'blocks',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'blocks' => 'array',
        ];
    }

    /**
     * @return list<array<string, mixed>>
     */
    public function contentBlocks(): array
    {
        $blocks = $this->blocks ?? [];

        return array_values(array_filter($blocks, fn ($b) => is_array($b) && ! empty($b['type'] ?? null)));
    }

    public function hasRenderableBlocks(): bool
    {
        return $this->contentBlocks() !== [];
    }

    public static function publishedCacheKey(string $slug): string
    {
        return 'cms:published-page:'.$slug;
    }

    /**
     * Канонический URL страницы на сайте (если slug есть в карте маршрутов).
     */
    public function publicCanonicalUrl(): ?string
    {
        $routeName = LegacySitePages::slugToRouteName()[$this->slug] ?? null;

        if ($routeName === null) {
            return null;
        }

        return route($routeName);
    }

    /**
     * Абсолютный URL первой картинки из блоков (og:image).
     */
    public function firstBlockImageAbsoluteUrl(): ?string
    {
        foreach ($this->contentBlocks() as $block) {
            if (($block['type'] ?? '') !== 'image') {
                continue;
            }
            $mediaId = isset($block['media_id']) ? (int) $block['media_id'] : null;
            if ($mediaId > 0) {
                $media = Media::query()->find($mediaId);
                if ($media !== null && $media->isImage()) {
                    return $media->getUrl();
                }
            }
            $path = $block['image_path'] ?? '';
            if ($path === '') {
                continue;
            }

            return url(Storage::disk('public')->url($path));
        }

        return null;
    }
}
