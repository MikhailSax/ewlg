<?php

namespace App\Support;

final class SiteRoutes
{
    /**
     * Имя маршрута Laravel => ключ страницы в CMS (slug).
     *
     * @return array<string, string>
     */
    public static function routeNameToSlug(): array
    {
        return [
            'home' => 'home',
            'about' => 'about',
            'services' => 'services',
            'service.single' => 'service-aviation',
            'advantages' => 'advantages',
            'reviews' => 'reviews',
            'faq' => 'faq',
            'contacts' => 'contacts',
            'blog' => 'blog',
            'blog.single' => 'blog-sample',
            'team' => 'team',
            'projects' => 'projects',
            'project.single' => 'project-sample',
            'pricing' => 'pricing',
            'licenses' => 'licenses',
            'changelog' => 'changelog',
            'protected' => 'protected',
        ];
    }
}
