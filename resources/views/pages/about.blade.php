@extends('layouts.app')

@section('title', 'О компании — КаргоСайт')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">О компании КаргоСайт</h1>
  <p class="mt-4">Мы строим устойчивые логистические цепочки для B2B-клиентов и сопровождаем поставки от заявки до передачи груза получателю.</p>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">Наша миссия</h2>
  <p class="mt-2">Делать международную и внутреннюю логистику прозрачной, предсказуемой и экономически эффективной для бизнеса.</p>
  <section class="grid md:grid-cols-3 gap-4 mt-8">
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">12+</p><p>лет опыта</p></div>
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">48 000+</p><p>перевозок</p></div>
    <div class="border rounded p-4 text-center"><p class="text-3xl font-bold text-[#1C1F35]">3 200+</p><p>клиентов</p></div>
  </section>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">Преимущества</h2>
  <ul class="list-disc pl-6 mt-2">
    <li>Глубокая экспертиза в ВЭД и таможне</li>
    <li>Широкая сеть международных партнеров</li>
    <li>Единый стандарт сервиса на всех маршрутах</li>
  </ul>
  <h2 class="text-2xl font-semibold text-[#1C1F35] mt-8">Партнеры</h2>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-3">
    <div class="bg-[#F4F4F4] p-4 rounded text-center">Партнер A</div>
    <div class="bg-[#F4F4F4] p-4 rounded text-center">Партнер B</div>
    <div class="bg-[#F4F4F4] p-4 rounded text-center">Партнер C</div>
    <div class="bg-[#F4F4F4] p-4 rounded text-center">Партнер D</div>
  </div>
  <button type="button" data-open-lead class="mt-8 bg-[#091242] text-white px-5 py-3 rounded">Оставить заявку</button>
</div>
@endsection
