<?php

namespace App\Support;

use App\Filament\Pages\EditLegacyBladeTemplate;
use App\Filament\Resources\WebPages\WebPageResource;
use App\Models\Page;

final class LegacySitePages
{
    /**
     * Slug страницы => имя Blade-шаблона (как в view()).
     *
     * @return array<string, string>
     */
    public static function legacyViewBySlug(): array
    {
        return [
            'home' => 'pages.home',
            'about' => 'pages.about',
            'services' => 'pages.services',
            'service-aviation' => 'pages.service-single',
            'service-road' => 'pages.service-single',
            'service-sea' => 'pages.service-single',
            'service-rail' => 'pages.service-single',
            'advantages' => 'pages.advantages',
            'reviews' => 'pages.reviews',
            'faq' => 'pages.faq',
            'contacts' => 'pages.contacts',
            'blog' => 'pages.blog',
            'blog-sample' => 'pages.blog-single',
            'team' => 'pages.team',
            'projects' => 'pages.project',
            'project-sample' => 'pages.project-single',
            'pricing' => 'pages.pricing',
            'licenses' => 'pages.licenses',
            'changelog' => 'pages.changelog',
            'protected' => 'pages.protected',
        ];
    }

    /**
     * @return array<string, string> slug => имя маршрута Laravel
     */
    public static function slugToRouteName(): array
    {
        return array_flip(SiteRoutes::routeNameToSlug());
    }

    /**
     * @return list<array{slug: string, blade: string, blade_path: string, url: string, route_name: string|null, in_cms: bool, cms_edit_url: ?string, cms_create_url: string, blade_edit_url: string}>
     */
    public static function rows(): array
    {
        $legacy = self::legacyViewBySlug();
        $slugToRoute = self::slugToRouteName();
        $cmsBySlug = Page::query()->get()->keyBy('slug');

        $rows = [];
        foreach ($legacy as $slug => $view) {
            $routeName = $slugToRoute[$slug] ?? null;
            $url = $routeName !== null ? route($routeName) : '#';
            $record = $cmsBySlug->get($slug);
            $inCms = $record !== null;
            $rows[] = [
                'slug' => $slug,
                'blade' => $view,
                'blade_path' => 'resources/views/'.$view.'.blade.php',
                'url' => $url,
                'route_name' => $routeName,
                'in_cms' => $inCms,
                'cms_edit_url' => $record
                    ? WebPageResource::getUrl('edit', ['record' => $record])
                    : null,
                'cms_create_url' => WebPageResource::getUrl('create').'?slug='.rawurlencode($slug),
                'blade_edit_url' => EditLegacyBladeTemplate::getUrl(['slug' => $slug]),
            ];
        }

        return $rows;
    }
}
