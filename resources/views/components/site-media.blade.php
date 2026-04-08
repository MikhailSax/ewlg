@if(! empty($media))
  @if($media->isImage())
    <img
      src="{{ $media->getUrl() }}"
      alt="{{ e($media->alt ?? $media->title ?? '') }}"
      {{ $attributes->class(['max-w-full', 'h-auto']) }}
    >
  @elseif($media->isVideo())
    <video
      src="{{ $media->getUrl() }}"
      controls
      {{ $attributes->class(['max-w-full']) }}
    ></video>
  @else
    <a
      href="{{ $media->getUrl() }}"
      {{ $attributes->class(['text-[#091242]', 'underline']) }}
    >{{ $media->title ?? $media->original_filename }}</a>
  @endif
@endif
