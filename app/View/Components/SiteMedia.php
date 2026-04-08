<?php

namespace App\View\Components;

use App\Models\Media;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteMedia extends Component
{
    public function __construct(
        public ?int $id = null,
    ) {}

    public function file(): ?Media
    {
        return $this->id !== null ? Media::query()->find($this->id) : null;
    }

    public function render(): View|Closure|string
    {
        return view('components.site-media', [
            'media' => $this->file(),
        ]);
    }
}
