@php
  $bodyHtml = \App\Support\CmsBlockBody::toHtml($block['body'] ?? null, 'text');
@endphp
<div class="container py-4 prose-custom max-w-3xl cms-rich-text">
  @if($bodyHtml !== '')
    {!! $bodyHtml !!}
  @endif
</div>
