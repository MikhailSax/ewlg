@php
  $h = $block['heading'] ?? '';
  $text = $block['text'] ?? '';
  $btn = $block['button_label'] ?? 'Оставить заявку';
@endphp
<section class="bg-[#FFBE34]">
  <div class="container py-14 text-[#091242]">
    @if($h !== '')
      <h2 class="font-['Rubik'] text-2xl md:text-3xl">{{ $h }}</h2>
    @endif
    @if($text !== '')
      <p class="mt-2 max-w-2xl">{{ $text }}</p>
    @endif
    @if($btn !== '')
      <button type="button" data-open-lead class="mt-5 bg-[#091242] text-white px-6 py-3 rounded">{{ $btn }}</button>
    @endif
  </div>
</section>
