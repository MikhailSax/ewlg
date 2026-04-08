@php $h = (int) ($block['height'] ?? 32); $h = max(8, min(200, $h)); @endphp
<div class="w-full" style="min-height: {{ $h }}px" aria-hidden="true"></div>
