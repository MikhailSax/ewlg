@extends('layouts.app')

@section('title', 'FAQ — КаргоСайт')

@section('content')
<div class="container py-12 max-w-[1000px]">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Часто задаваемые вопросы</h1>
  <div class="mt-8 space-y-3">
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Как быстро вы готовите коммерческое предложение?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Обычно в течение 30–60 минут после получения параметров груза и маршрута.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>С какими странами вы работаете?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Основные направления: Россия, Китай, Турция, ОАЭ, СНГ и страны Европы.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Можно ли перевезти опасный груз?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Да, организуем перевозки при соблюдении требований ADR/IATA/IMDG.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Берете ли вы на себя таможню?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Да, подготавливаем декларации, сопровождаем досмотры и контролируем выпуск.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Как отслеживается груз?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Предоставляем регулярные статусы и уведомления по контрольным точкам маршрута.</div></div>
    <div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Работаете со сборными партиями?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Да, консолидируем грузы на партнерских складах в ключевых хабах.</div></div>
  </div>
</div>
@endsection
