<?php

namespace App\Observers;

use App\Models\Page;
use Illuminate\Support\Facades\Cache;

class PageObserver
{
    public function saved(Page $page): void
    {
        $this->forgetCacheForSlug($page->slug);
        if ($page->wasChanged('slug')) {
            $original = $page->getOriginal('slug');
            if (is_string($original) && $original !== '') {
                $this->forgetCacheForSlug($original);
            }
        }
    }

    public function deleted(Page $page): void
    {
        $this->forgetCacheForSlug($page->slug);
    }

    protected function forgetCacheForSlug(string $slug): void
    {
        Cache::forget(Page::publishedCacheKey($slug));
    }
}
