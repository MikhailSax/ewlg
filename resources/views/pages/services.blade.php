@extends('layouts.app')

@section('title', 'Услуги — КаргоСайт')

@section('content')
<div class="container py-14">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Услуги логистики под задачи бизнеса</h1>
  <p class="mt-4">Организуем международные и внутрироссийские перевозки, таможенное сопровождение и складскую обработку.</p>
  <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Автоперевозки</h2><p class="mt-2 text-sm">FTL и LTL-перевозки с контролем температуры и сроков.</p><a href="{{ route('service.road') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Авиадоставка</h2><p class="mt-2 text-sm">Экспресс-поставки срочных и высокоценных грузов.</p><a href="{{ route('service.single') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Морская доставка</h2><p class="mt-2 text-sm">FCL/LCL из Азии, Ближнего Востока и Европы.</p><a href="{{ route('service.sea') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Железнодорожная доставка</h2><p class="mt-2 text-sm">Стабильные сроки для регулярных поставок из Китая.</p><a href="{{ route('service.rail') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Таможенное оформление</h2><p class="mt-2 text-sm">Подготовка деклараций, расчет платежей, сопровождение досмотров.</p><a href="{{ route('service.single') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Консолидация грузов</h2><p class="mt-2 text-sm">Объединяем партии на складе и снижаем стоимость доставки.</p><a href="{{ route('service.single') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
    <article class="border rounded p-4"><h2 class="font-semibold text-[#1C1F35]">Складские услуги</h2><p class="mt-2 text-sm">Приемка, маркировка, паллетирование и кросс-докинг.</p><a href="{{ route('service.single') }}" class="text-[#091242] mt-3 inline-block">Подробнее</a></article>
  </div>
  <section class="mt-10 bg-[#F4F4F4] rounded p-6">
    <h2 class="text-2xl font-semibold text-[#1C1F35]">Почему наши услуги выгодны</h2>
    <ul class="mt-3 list-disc pl-6"><li>Сокращаем совокупную стоимость логистики до 15%</li><li>Снижаем риски простоев и штрафов</li><li>Даем прогнозируемые сроки доставки</li></ul>
    <button type="button" data-open-lead class="mt-5 bg-[#091242] text-white px-5 py-2 rounded">Оставить заявку</button>
  </section>
</div>
@endsection
