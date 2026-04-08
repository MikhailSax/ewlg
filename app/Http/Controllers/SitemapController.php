<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Support\LegacySitePages;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $entries = [];

        foreach (LegacySitePages::rows() as $row) {
            if ($row['url'] === '#') {
                continue;
            }

            $lastmod = Page::query()->where('slug', $row['slug'])->value('updated_at');

            $entries[] = [
                'loc' => $row['url'],
                'lastmod' => $lastmod,
            ];
        }

        return response()
            ->view('sitemap-xml', ['entries' => $entries])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
