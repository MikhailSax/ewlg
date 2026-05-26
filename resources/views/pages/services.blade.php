@extends('layouts.app')

@section('title', 'Услуги и направления')

@section('content')
    <div class="container mx-auto px-4 py-14 max-w-7xl">
        <!-- Заголовок страницы -->
        <h1 class="text-4xl font-bold text-[#1C1F35]">Услуги логистики под задачи бизнеса</h1>
        <p class="mt-4 text-gray-600 max-w-3xl">Организуем международные и внутрироссийские перевозки, таможенное сопровождение и складскую обработку.</p>

        <!-- Сетка карточек услуг -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">

            <!-- Автоперевозки -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Автоперевозки</h2>
                    <p class="mt-2 text-sm text-gray-600">FTL и LTL перевозки с контролем температуры и сроков.</p>
                </div>
                <a href="{{ route('service.road') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Авиадоставка -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Авиадоставка</h2>
                    <p class="mt-2 text-sm text-gray-600">Экспресс-доставка срочных, ценных и высокоценных грузов.</p>
                </div>
                <a href="{{ route('service.single') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Морская доставка -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Морская доставка</h2>
                    <p class="mt-2 text-sm text-gray-600">FCL/LCL из Китая, Ближнего Востока и Европы.</p>
                </div>
                <a href="{{ route('service.sea') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Железнодорожная доставка -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Железнодорожная доставка</h2>
                    <p class="mt-2 text-sm text-gray-600">Стабильные сроки для регулярных поставок из Китая.</p>
                </div>
                <a href="{{ route('service.rail') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Таможенное оформление -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Таможенное оформление</h2>
                    <p class="mt-2 text-sm text-gray-600">Подготовка деклараций, расчет платежей, сопровождение досмотров.</p>
                </div>
                <a href="{{ route('service.customs') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Консолидация грузов -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Консолидация грузов</h2>
                    <p class="mt-2 text-sm text-gray-600">Объединение партий на складе с целью снижения стоимости доставки.</p>
                </div>
                <a href="{{ route('service.warehouse') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

            <!-- Складские услуги -->
            <article class="border border-gray-200 rounded-xl p-5 bg-white shadow-xs flex flex-col justify-between">
                <div>
                    <h2 class="font-bold text-lg text-[#1C1F35]">Агентские и финансовые услуги</h2>
                    <p class="mt-2 text-sm text-gray-600">Агентские и финансовые услуги включают представление интересов клиента при внешнеэкономических операциях, взаимодействие с поставщиками</p>
                </div>
                <a href="{{ route('service.agency') }}" class="text-[#091242] font-semibold text-sm mt-4 inline-block hover:underline">Подробнее →</a>
            </article>

        </div>

        <!-- Блок «Почему наши услуги выгодны» -->
        <section class="mt-16 bg-[#F4F4F4] rounded-2xl p-8 border border-gray-200/60 max-w-3xl">
            <h2 class="text-2xl font-bold text-[#1C1F35]">Почему наши услуги выгодны</h2>

            <ul class="mt-5 space-y-3 list-disc pl-5 text-gray-700">
                <li><strong class="text-gray-900">Оптимизация логистических затрат:</strong> Снижаем совокупную стоимость логистики до 15%.</li>
                <li><strong class="text-gray-900">Минимизация операционных рисков:</strong> Снижаем риски простоев и штрафов благодаря профессиональному сопровождению.</li>
                <li><strong class="text-gray-900">Прогнозируемые сроки доставки:</strong> Даем прогнозируемые сроки доставки за счет прозрачности процессов.</li>
            </ul>

            <button type="button" data-open-lead class="mt-6 bg-[#091242] hover:bg-[#151f54] text-white font-medium px-6 py-3 rounded-lg transition-colors cursor-pointer">
                Оставить заявку
            </button>
        </section>
    </div>
@endsection
