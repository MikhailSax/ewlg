@extends('layouts.app')

@section('title', 'Кейсы — КаргоСайт')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Кейсы перевозок</h1>
  <p class="mt-3">Реальные примеры доставки с указанием маршрута, сроков и типа груза.</p>
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/Наземная/ФУРА%201.webp') }}" alt="Фото груза: промышленное оборудование на автоперевозке" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Москва → Алматы</p><p class="text-sm">Тип груза: станки ЧПУ</p><p class="text-sm">Срок: 6 дней</p><p class="text-sm mt-2">Организовали выделенный транспорт и ускоренное оформление.</p></div></article>
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/АВИА/АВИА%202.jpg') }}" alt="Фото груза: медицинские товары в авиадоставке" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Стамбул → Санкт-Петербург</p><p class="text-sm">Тип груза: медизделия</p><p class="text-sm">Срок: 5 дней</p><p class="text-sm mt-2">Согласовали температурный режим и контроль на каждом участке.</p></div></article>
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/ЖД/ЖД%202.jpg') }}" alt="Фото груза: электроника в мультимодальной доставке" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Шанхай → Екатеринбург</p><p class="text-sm">Тип груза: электроника</p><p class="text-sm">Срок: 14 дней</p><p class="text-sm mt-2">Скомбинировали море+ж/д для оптимизации бюджета.</p></div></article>
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/ЖД/ЖД%201.webp') }}" alt="Фото груза: запчасти в железнодорожной доставке" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Минск → Казань</p><p class="text-sm">Тип груза: автозапчасти</p><p class="text-sm">Срок: 3 дня</p><p class="text-sm mt-2">Собрали сборный груз и сократили расходы на 18%.</p></div></article>
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/Складские услуги/СКЛАД%201.webp') }}" alt="Фото груза: текстиль на складе консолидации" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Ташкент → Москва</p><p class="text-sm">Тип груза: текстиль</p><p class="text-sm">Срок: 7 дней</p><p class="text-sm mt-2">Запустили регулярный график поставок каждую неделю.</p></div></article>
    <article class="border rounded overflow-hidden"><img src="{{ asset('Картинки/Картинки/Морская/МОРЕ%205.jpg') }}" alt="Фото груза: бытовая техника в морской доставке" class="w-full aspect-[4/3] object-cover" loading="lazy" decoding="async"><div class="p-4"><p class="font-semibold text-[#1C1F35]">Дубай → Новосибирск</p><p class="text-sm">Тип груза: бытовая техника</p><p class="text-sm">Срок: 10 дней</p><p class="text-sm mt-2">Взяли на себя ВЭД-документы и страхование партии.</p></div></article>
  </div>
</div>
@endsection
