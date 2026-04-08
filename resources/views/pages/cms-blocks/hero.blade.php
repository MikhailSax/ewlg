@php
  $heading = $block['heading'] ?? '';
  $sub = $block['subheading'] ?? '';
  $cta = $block['cta_label'] ?? '';
@endphp
<section class="page-hero">
  <div class="container py-16 md:py-24">
    @if($heading !== '')
      <h1>{{ $heading }}</h1>
    @endif
    @if($sub !== '')
      <p class="mt-4 max-w-2xl text-white/90">{{ $sub }}</p>
    @endif
    @if($cta !== '')
      <button type="button" data-open-lead class="mt-6 bg-[#FFBE34] text-[#091242] px-5 py-3 rounded font-medium">{{ $cta }}</button>
    @endif
  </div>
</section>
