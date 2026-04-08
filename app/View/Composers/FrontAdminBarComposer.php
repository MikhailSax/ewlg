<?php

namespace App\View\Composers;

use App\Filament\Pages\EditLegacyBladeTemplate;
use App\Filament\Resources\WebPages\WebPageResource;
use App\Models\Page;
use App\Support\SiteRoutes;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class FrontAdminBarComposer
{
    public function compose(View $view): void
    {
        $user = Auth::user();
        $panel = Filament::getDefaultPanel();

        $visible = $user !== null
            && method_exists($user, 'canAccessPanel')
            && $user->canAccessPanel($panel);

        $routeName = request()->route()?->getName();
        $slug = $routeName !== null
            ? (SiteRoutes::routeNameToSlug()[$routeName] ?? null)
            : null;

        $page = $slug !== null
            ? Page::query()->where('slug', $slug)->first()
            : null;

        $editPageUrl = null;
        $createPageUrl = null;
        $bladeEditUrl = null;
        if ($visible && $slug !== null) {
            $bladeEditUrl = EditLegacyBladeTemplate::getUrl(['slug' => $slug]);
            if ($page !== null) {
                $editPageUrl = WebPageResource::getUrl('edit', ['record' => $page]);
            } else {
                $createPageUrl = WebPageResource::getUrl('create').'?slug='.rawurlencode($slug);
            }
        }

        $view->with([
            'frontAdminBarVisible' => $visible,
            'frontAdminPageSlug' => $slug,
            'frontAdminPageRecord' => $page,
            'frontAdminPanelUrl' => $panel->getUrl(),
            'frontAdminEditPageUrl' => $editPageUrl,
            'frontAdminCreatePageUrl' => $createPageUrl,
            'frontAdminBladeEditUrl' => $bladeEditUrl,
        ]);
    }
}
