@extends('layouts.app')

@section('title', 'Проект — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Проект</h1></div></section>
<section class="container py-16"><img src="{{ asset('assets/images/section-photo.svg') }}" alt="проект" class="w-full rounded"></section>
<section class="container pb-16 grid lg:grid-cols-3 gap-8">
  <article class="lg:col-span-2 prose-custom">
    <h2>Описание проекта</h2>
    <p>Содержание кейса и этапы доставки.</p>
    <p>Дополнительный абзац с деталями реализации.</p>
  </article>
  <aside class="bg-[#F4F4F4] p-6 rounded h-fit">
    <h3 class="font-['Rubik'] text-xl">Детали</h3>
    <ul class="mt-4 space-y-2"><li>Клиент: пример</li><li>Категория: перевозка</li><li>Срок: 2024</li><li>Статус: завершен</li></ul>
  </aside>
</section>
<section class="container py-16"><h2 class="section-title">Похожие проекты</h2><div class="grid md:grid-cols-3 gap-6 mt-8">@foreach (range(1,3) as $n)<article class="p-6 border rounded"><h3 class="font-['Rubik'] text-xl text-[#1C1F35]">Кейс {{ $n }}</h3><p class="mt-3">Краткое описание.</p></article>@endforeach</div></section>
@endsection
