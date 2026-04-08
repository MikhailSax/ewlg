@extends('layouts.app')

@section('title', 'Авиадоставка — КаргоСайт')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Авиадоставка грузов</h1>
  <img src="{{ asset('assets/images/section-photo.svg') }}" alt="Авиаперевозка коммерческих грузов" class="mt-6 w-full rounded">
  <p class="mt-6">Шаблон страницы услуги можно копировать для любых направлений: меняйте заголовок, преимущества и FAQ под конкретный сервис.</p>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">Преимущества услуги</h2>
  <ul class="list-disc pl-6 mt-3"><li>Доставка срочных грузов от 1 дня</li><li>Приоритетная обработка в аэропортах</li><li>Поддержка температурных режимов</li></ul>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">Этапы работы</h2>
  <ol class="grid md:grid-cols-3 gap-3 mt-4">
    <li class="border rounded p-3">1. Бриф и сбор данных</li>
    <li class="border rounded p-3">2. Подбор рейса и тарифов</li>
    <li class="border rounded p-3">3. Забор и упаковка</li>
    <li class="border rounded p-3">4. Оформление документов</li>
    <li class="border rounded p-3">5. Перелет и контроль статусов</li>
    <li class="border rounded p-3">6. Доставка получателю</li>
  </ol>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">FAQ по услуге</h2>
  <div class="mt-4 space-y-2">
    <div class="border rounded"><button type="button" data-accordion class="w-full p-3 flex justify-between text-left"><span>Какие грузы подходят для авиадоставки?</span><span data-icon>+</span></button><div class="hidden px-3 pb-3">Срочные, высокоценные и небольшие по объему партии.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-3 flex justify-between text-left"><span>Можно ли оформить опасный груз?</span><span data-icon>+</span></button><div class="hidden px-3 pb-3">Да, при соблюдении IATA-требований и корректной маркировке.</div></div>
  </div>
  <button type="button" data-open-lead class="mt-8 bg-[#091242] text-white px-5 py-3 rounded">Оставить заявку</button>
</div>
@endsection
