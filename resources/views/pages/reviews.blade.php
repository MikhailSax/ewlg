@extends('layouts.app')

@section('title', 'Отзывы — КаргоСайт')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Отзывы клиентов</h1>
  <div class="grid md:grid-cols-2 gap-4 mt-8">
    <article class="border rounded p-5"><h2 class="font-semibold text-[#1C1F35]">Андрей Козлов</h2><p class="text-sm">ООО «ТехИмпорт»</p><p class="mt-3">«КаргоСайт стабилизировал поставки комплектующих и сократил время доставки на 22%.»</p></article>
    <article class="border rounded p-5"><h2 class="font-semibold text-[#1C1F35]">Елена Миронова</h2><p class="text-sm">АО «МедСнаб Групп»</p><p class="mt-3">«Оперативно решили вопросы с таможней, поставка прошла без простоев.»</p></article>
    <article class="border rounded p-5"><h2 class="font-semibold text-[#1C1F35]">Сергей Панкратов</h2><p class="text-sm">ООО «НордТрейд»</p><p class="mt-3">«Удобная коммуникация и прозрачные статусы по маршруту на каждом этапе.»</p></article>
    <article class="border rounded p-5"><h2 class="font-semibold text-[#1C1F35]">Мария Осипова</h2><p class="text-sm">ООО «СитиМаркет»</p><p class="mt-3">«Команда быстро перестроила цепочку поставок в высокий сезон.»</p></article>
  </div>
  <section class="mt-10 bg-[#F4F4F4] rounded p-6">
    <h2 class="text-2xl font-semibold text-[#1C1F35]">Видеоотзывы (скоро)</h2>
    <p class="mt-2">Здесь будет размещен блок с видеоотзывами клиентов.</p>
  </section>
</div>
@endsection
