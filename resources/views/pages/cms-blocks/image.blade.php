@php
  $mediaId = isset($block['media_id']) ? (int) $block['media_id'] : null;
  $fromLibrary = $mediaId ? \App\Models\Media::query()->find($mediaId) : null;
  $src = '';
  $alt = $block['alt'] ?? '';
  if ($fromLibrary) {
      $src = $fromLibrary->getUrl();
      if ($alt === '') {
          $alt = $fromLibrary->alt ?? $fromLibrary->title ?? '';
      }
  } else {
      $path = $block['image_path'] ?? '';
      $src = $path !== '' ? asset('storage/'.$path) : '';
  }
  $caption = $block['caption'] ?? '';
@endphp
<div class="container py-6">
  @if($src !== '')
    <figure class="max-w-4xl mx-auto">
      <img src="{{ $src }}" alt="{{ e($alt) }}" class="w-full rounded-lg border border-[#E5E8F0] object-cover">
      @if($caption !== '')
        <figcaption class="mt-2 text-sm text-[#666C89]">{{ $caption }}</figcaption>
      @endif
    </figure>
  @endif
</div>
