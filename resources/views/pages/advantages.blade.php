@extends('layouts.app')

@section('title', 'Преимущества — КаргоСайт')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Почему компании выбирают КаргоСайт</h1>
  <div class="grid md:grid-cols-2 gap-4 mt-8">
    <article class="border rounded p-4">Фиксация SLA и KPI в договоре</article>
    <article class="border rounded p-4">Сильная таможенная экспертиза</article>
    <article class="border rounded p-4">Покрытие ключевых торговых коридоров</article>
    <article class="border rounded p-4">Поддержка 24/7 в мессенджерах</article>
    <article class="border rounded p-4">Страхование и финансовая ответственность</article>
    <article class="border rounded p-4">Аналитика для оптимизации логистики</article>
    <article class="border rounded p-4">Гибкая маршрутизация в пиковые периоды</article>
    <article class="border rounded p-4">Единое окно управления поставками</article>
  </div>
  <section class="mt-10 bg-[#F4F4F4] rounded p-6">
    <h2 class="text-2xl font-semibold text-[#1C1F35]">Блок доверия</h2>
    <p class="mt-2">За 5 лет реализовали более 48 000 поставок для производственных и торговых компаний.</p>
  </section>
  <section class="mt-8 grid md:grid-cols-3 gap-4">
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">5+</p><p>лет опыта</p></div>
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">3200+</p><p>активных клиентов</p></div>
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">97%</p><p>доставок в срок</p></div>
  </section>
  <button type="button" data-open-lead class="mt-8 bg-[#091242] text-white px-5 py-3 rounded">Оставить заявку</button>
</div>
@endsection
