@php
  $level = (int) ($block['level'] ?? 2);
  $level = in_array($level, [2, 3, 4], true) ? $level : 2;
  $tag = 'h'.$level;
  $text = $block['headline'] ?? $block['text'] ?? '';
@endphp
<div class="container py-4">
  @if($text !== '')
    <{{ $tag }} class="section-title text-{{ $level === 2 ? '3xl' : '2xl' }}">{{ $text }}</{{ $tag }}>
  @endif
</div>
