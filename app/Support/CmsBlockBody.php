<?php

namespace App\Support;

use Filament\Forms\Components\RichEditor\RichContentRenderer;
use Illuminate\Support\Str;

final class CmsBlockBody
{
    /**
     * Состояние для Filament RichEditor: TipTap JSON (doc) из БД или устаревшие строки.
     *
     * @param  mixed  $state
     * @return array<string, mixed>
     */
    public static function normalizeForRichEditor(mixed $state, string $blockType): array
    {
        if ($state === null || $state === '') {
            return self::emptyDoc();
        }

        if (is_array($state)) {
            return ($state['type'] ?? null) === 'doc' ? $state : self::emptyDoc();
        }

        if (! is_string($state)) {
            return self::emptyDoc();
        }

        $trim = ltrim($state);
        if ($trim !== '' && (($trim[0] === '{') || ($trim[0] === '['))) {
            $decoded = json_decode($state, true);
            if (is_array($decoded) && ($decoded['type'] ?? null) === 'doc') {
                return $decoded;
            }
        }

        if ($blockType === 'html' && str_contains($state, '<')) {
            try {
                $asArray = RichContentRenderer::make($state)->toArray();

                return ($asArray['type'] ?? null) === 'doc' ? $asArray : self::emptyDoc();
            } catch (\Throwable) {
                return self::plainTextDoc($state);
            }
        }

        return self::plainTextDoc($state);
    }

    /**
     * HTML для публичной страницы.
     *
     * @param  mixed  $body
     */
    public static function toHtml(mixed $body, string $blockType): string
    {
        if ($body === null || $body === '') {
            return '';
        }

        if (is_array($body) && ($body['type'] ?? null) === 'doc') {
            return RichContentRenderer::make($body)
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsVisibility('public')
                ->toHtml();
        }

        if (is_string($body)) {
            $trim = ltrim($body);
            if ($trim !== '' && (($trim[0] === '{') || ($trim[0] === '['))) {
                $decoded = json_decode($body, true);
                if (is_array($decoded) && ($decoded['type'] ?? null) === 'doc') {
                    return RichContentRenderer::make($decoded)
                        ->fileAttachmentsDisk('public')
                        ->fileAttachmentsVisibility('public')
                        ->toHtml();
                }
            }

            if ($blockType === 'html') {
                return Str::sanitizeHtml($body);
            }

            return '<p class="whitespace-pre-line">'.e($body).'</p>';
        }

        return '';
    }

    /**
     * @return array<string, mixed>
     */
    protected static function emptyDoc(): array
    {
        return [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [],
                ],
            ],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    protected static function plainTextDoc(string $text): array
    {
        return [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'paragraph',
                    'content' => [
                        ['type' => 'text', 'text' => $text],
                    ],
                ],
            ],
        ];
    }
}
