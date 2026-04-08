<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Support\LegacySitePages;
use Filament\Facades\Filament;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class PageController extends Controller
{
    /** Длительность кэша опубликованной CMS-страницы (секунды). */
    protected int $publishedCmsCacheTtl = 3600;

    public function show(string $slug): View
    {
        $page = $this->resolveCmsPageForRequest($slug);

        if ($page && $page->hasRenderableBlocks()) {
            if ($page->is_published) {
                return view('pages.cms', ['page' => $page, 'cmsPreviewDraft' => false]);
            }

            if ($this->viewerMayPreviewCmsDraft()) {
                return view('pages.cms', ['page' => $page, 'cmsPreviewDraft' => true]);
            }
        }

        $view = LegacySitePages::legacyViewBySlug()[$slug] ?? null;

        if ($view === null) {
            abort(404);
        }

        return view($view);
    }

    protected function viewerMayPreviewCmsDraft(): bool
    {
        $user = Auth::user();

        if ($user === null || ! method_exists($user, 'canAccessPanel')) {
            return false;
        }

        return $user->canAccessPanel(Filament::getDefaultPanel());
    }

    protected function resolveCmsPageForRequest(string $slug): ?Page
    {
        if ($this->viewerMayPreviewCmsDraft()) {
            return Page::query()->where('slug', $slug)->first();
        }

        $key = Page::publishedCacheKey($slug);

        $cached = Cache::get($key);

        if ($cached instanceof Page) {
            return $cached;
        }

        if ($cached === false) {
            return null;
        }

        $page = Page::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->first();

        if ($page !== null && $page->hasRenderableBlocks()) {
            Cache::put($key, $page, now()->addSeconds($this->publishedCmsCacheTtl));

            return $page;
        }

        Cache::put($key, false, now()->addSeconds($this->publishedCmsCacheTtl));

        return null;
    }
}
