@extends('layouts.app')

@section('title', ($page->meta_title ?: ($page->title ?: 'Страница')) . ' — EWLG')

@push('head')
  @if(filled($page->meta_description))
    <meta name="description" content="{{ e($page->meta_description) }}">
  @endif
  @php
    $ogTitle = $page->meta_title ?: ($page->title ?: 'EWLG');
    $ogDescription = $page->meta_description ?: '';
    $canonical = $page->publicCanonicalUrl();
    $ogImage = $page->firstBlockImageAbsoluteUrl();
  @endphp
  @if($canonical)
    <link rel="canonical" href="{{ $canonical }}">
  @endif
  <meta property="og:title" content="{{ e($ogTitle) }}">
  @if(filled($ogDescription))
    <meta property="og:description" content="{{ e($ogDescription) }}">
  @endif
  @if($canonical)
    <meta property="og:url" content="{{ $canonical }}">
  @endif
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="{{ e(config('app.name', 'EWLG')) }}">
  @if($ogImage)
    <meta property="og:image" content="{{ $ogImage }}">
  @endif
  <meta name="twitter:card" content="{{ $ogImage ? 'summary_large_image' : 'summary' }}">
  <meta name="twitter:title" content="{{ e($ogTitle) }}">
  @if(filled($ogDescription))
    <meta name="twitter:description" content="{{ e($ogDescription) }}">
  @endif
@endpush

@section('content')
  @if(!empty($cmsPreviewDraft))
    <div class="bg-amber-500 text-[#091242] text-center text-sm py-2 px-4 font-medium">
      Просмотр черновика — посетители сайта эту версию не видят. Опубликуйте страницу в админке.
    </div>
  @endif
  @php
    $cmsBlockTypes = ['hero', 'heading', 'text', 'html', 'image', 'cta_strip', 'spacer'];
  @endphp
  <div class="cms-page">
    @foreach($page->contentBlocks() as $block)
      @php
        $bt = $block['type'] ?? 'unknown';
        if (! in_array($bt, $cmsBlockTypes, true)) {
            $bt = 'unknown';
        }
      @endphp
      @include('pages.cms-blocks.' . $bt, ['block' => $block])
    @endforeach
  </div>
@endsection
