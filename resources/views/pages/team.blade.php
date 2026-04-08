@extends('layouts.app')

@section('title', 'Команда — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Команда</h1></div></section>
<section class="container py-16">
  <div class="grid md:grid-cols-3 gap-6">
    @foreach (['Руководство логистики', 'Отдел ВЭД', 'Клиентский сервис', 'Операционный блок', 'Таможенные специалисты', 'IT и аналитика'] as $unit)
    <article class="p-6 border rounded">
      <h3 class="font-['Rubik'] text-xl text-[#1C1F35]">{{ $unit }}</h3>
      <p class="mt-3">Подразделение компании КаргоСайт.</p>
    </article>
    @endforeach
  </div>
</section>
<section class="bg-[#F4F4F4]"><div class="container py-16"><h2 class="section-title">Почему мы</h2><div class="grid md:grid-cols-3 gap-6 mt-8"><div class="flex gap-3"><span class="h-6 w-6 bg-[#FFBE34] inline-block shrink-0"></span><span>Единый стандарт сервиса</span></div><div class="flex gap-3"><span class="h-6 w-6 bg-[#FFBE34] inline-block shrink-0"></span><span>Прозрачная коммуникация</span></div><div class="flex gap-3"><span class="h-6 w-6 bg-[#FFBE34] inline-block shrink-0"></span><span>Опыт на сложных маршрутах</span></div></div></div></section>
@endsection
