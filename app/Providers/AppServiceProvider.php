<?php

namespace App\Providers;

use App\Models\Page;
use App\Observers\PageObserver;
use App\View\Composers\FrontAdminBarComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Page::observe(PageObserver::class);
        View::composer('layouts.app', FrontAdminBarComposer::class);
    }
}
