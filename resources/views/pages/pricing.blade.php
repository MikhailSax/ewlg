@extends('layouts.app')

@section('title', 'Тарифы — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Тарифы</h1></div></section>
<section class="container py-16">
  <p class="mb-8">Итоговая стоимость зависит от маршрута, типа груза и сроков. Оставьте заявку — подготовим персональное предложение.</p>
  <div class="grid md:grid-cols-3 gap-6">
    @foreach (['Базовый', 'Стандарт', 'Премиум'] as $tier)
    <article class="p-6 border rounded flex flex-col">
      <h3 class="font-['Rubik'] text-xl text-[#1C1F35]">{{ $tier }}</h3>
      <p class="mt-3 flex-1">Пакет услуг под регулярные или разовые поставки.</p>
      <button type="button" data-open-lead class="mt-4 bg-[#FFBE34] text-[#091242] py-2 rounded">Запросить предложение</button>
    </article>
    @endforeach
  </div>
</section>
<section class="bg-[#F4F4F4]"><div class="container py-16"><h2 class="section-title">Отзывы клиентов</h2><p class="mt-4">Блок можно дополнить реальными цитатами.</p></div></section>
@endsection
