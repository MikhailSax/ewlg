<?php

namespace App\Filament\Widgets;

use App\Support\LegacySitePages;
use Filament\Widgets\Widget;

class LegacyStaticPagesHintWidget extends Widget
{
    protected string $view = 'filament.widgets.legacy-static-pages-hint-widget';

    protected int|string|array $columnSpan = 'full';

    protected static bool $isDiscovered = false;

    /**
     * @return array{rows: list<array<string, mixed>>}
     */
    protected function getViewData(): array
    {
        return [
            'rows' => LegacySitePages::rows(),
        ];
    }
}
