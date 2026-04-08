<?php

namespace App\Support;

use Illuminate\Support\Facades\File;

final class LegacyBladeTemplate
{
    /**
     * Читает исходник Blade по ключу страницы (slug из маршрутов).
     */
    public static function read(string $slug): ?string
    {
        $path = self::absolutePathForSlug($slug);
        if ($path === null || ! is_file($path)) {
            return null;
        }

        return File::get($path);
    }

    /**
     * Сохраняет файл. Разрешены только шаблоны из карты LegacySitePages.
     *
     * @throws \InvalidArgumentException
     */
    public static function write(string $slug, string $contents): void
    {
        $path = self::absolutePathForSlug($slug);
        if ($path === null) {
            throw new \InvalidArgumentException('Неизвестная страница: '.$slug);
        }

        $viewsRoot = realpath(resource_path('views'));
        $dir = dirname($path);
        $dirReal = realpath($dir);

        if ($viewsRoot === false || $dirReal === false || ! str_starts_with($dirReal, $viewsRoot)) {
            throw new \InvalidArgumentException('Недопустимый путь к шаблону.');
        }

        File::put($path, $contents);
    }

    public static function absolutePathForSlug(string $slug): ?string
    {
        $map = LegacySitePages::legacyViewBySlug();
        if (! isset($map[$slug])) {
            return null;
        }

        $view = $map[$slug];
        $relative = str_replace('.', DIRECTORY_SEPARATOR, $view).'.blade.php';

        return resource_path('views'.DIRECTORY_SEPARATOR.$relative);
    }
}
