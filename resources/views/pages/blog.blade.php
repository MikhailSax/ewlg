@extends('layouts.app')

@section('title', 'Блог — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Блог</h1></div></section>
<section class="container py-16 space-y-6">
  @foreach ([
    ['title' => 'Тренды международной логистики в 2026', 'excerpt' => 'Как меняются маршруты и сроки поставок.'],
    ['title' => 'Таможня и документооборот: чек-лист', 'excerpt' => 'Что подготовить до отправки груза.'],
    ['title' => 'Мультимодальные перевозки из Азии', 'excerpt' => 'Когда выгодно комбинировать море и ж/д.'],
  ] as $post)
  <article class="p-6 border rounded">
    <h3 class="font-['Rubik'] text-xl text-[#1C1F35]">{{ $post['title'] }}</h3>
    <p class="mt-3">{{ $post['excerpt'] }}</p>
    <a href="{{ route('blog.single') }}" class="mt-3 inline-block text-[#091242] font-['Rubik']">Читать далее →</a>
  </article>
  @endforeach
</section>
@endsection
