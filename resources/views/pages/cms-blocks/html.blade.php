@php
  $bodyHtml = \App\Support\CmsBlockBody::toHtml($block['body'] ?? null, 'html');
@endphp
<div class="container py-4 prose-custom max-w-4xl cms-rich-text cms-html">
  @if($bodyHtml !== '')
    {!! $bodyHtml !!}
  @endif
</div>
