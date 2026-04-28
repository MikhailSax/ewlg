@extends('layouts.app')

@section('title', 'EWLG — Международная логистика для бизнеса')

@section('content')
    @php
        $homeHeroTitle = $homeHeroTitle ?? \App\Models\SiteSetting::getValue('home_hero_title', 'Комплексная логистика для стабильных поставок по России и миру');
        $homeHeroSubtitle = $homeHeroSubtitle ?? \App\Models\SiteSetting::getValue('home_hero_subtitle', 'Оптимизируем сроки и стоимость доставки, берем на себя документооборот и контроль всех этапов перевозки.');
        $homeHeroCta = $homeHeroCta ?? \App\Models\SiteSetting::getValue('home_hero_cta', 'Оставить заявку');
    @endphp

    <section class="relative overflow-hidden bg-[#091242]">
        <div class="absolute -left-36 top-28 h-80 w-80 rounded-full bg-[#1D2E7A]/45"></div>
        <div class="absolute right-8 -top-20 h-80 w-80 rounded-full bg-[#1D2E7A]/45"></div>
        <div class="relative container py-14 md:py-16 text-white grid lg:grid-cols-2 gap-10 items-center min-h-[340px] md:min-h-[420px]">
            <div class="max-w-[470px]">
                <h1 class="font-['Rubik'] text-[34px] md:text-[48px] leading-[1.06] tracking-[-0.02em]">{{ $homeHeroTitle }}</h1>
                <p class="mt-3 text-white/90 text-[13px] leading-[1.45] max-w-[430px]">{{ $homeHeroSubtitle }}</p>
                <ul class="mt-4 space-y-1.5 text-[13px] leading-[1.4]">
                    <li>• Единый менеджер проекта 24/7</li>
                    <li>• Прозрачная стоимость без скрытых платежей</li>
                    <li>• Онлайн-отчетность по каждой партии</li>
                </ul>
                <button type="button" data-open-lead class="mt-5 bg-[#FFBE34] text-[#091242] px-4 py-2 rounded-[2px] font-medium text-[12px]">{{ $homeHeroCta }}</button>
                <div class="mt-6 grid grid-cols-3 gap-2 text-center">
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">5+</p>
                        <p class="text-[10px] mt-1 text-white/90">лет на рынке</p>
                    </div>
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">48 000+</p>
                        <p class="text-[10px] mt-1 text-white/90">доставленных грузов</p>
                    </div>
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">3 200+</p>
                        <p class="text-[10px] mt-1 text-white/90">клиентов</p>
                    </div>
                </div>
            </div>
            <figure class="mx-auto w-full max-w-[430px] rounded-[4px] border-4 border-[#D6D8E1] bg-[#D6D8E1] p-4">
                <img
                    src="{{ asset('Картинки/Картинки/Наземная/ФУРА%201.webp') }}"
                    alt="Международная автоперевозка на магистральной фуре"
                    class="h-[210px] md:h-[230px] w-full object-cover border-[20px] border-[#091242]"
                    loading="eager"
                    decoding="async"
                >
            </figure>
        </div>
    </section>

    <section class="bg-[#F4F4F4]">
        <div class="container py-12">
            <h2 class="section-title text-[36px] leading-none">Быстрые преимущества</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 mt-7">
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">Сроки под KPI</h3><p class="mt-1.5 text-[12px]">Фиксируем дедлайны поставок в договоре.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">Единый документооборот</h3><p class="mt-1.5 text-[12px]">Готовим транспортные и таможенные документы.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">Страхование груза</h3><p class="mt-1.5 text-[12px]">Закрываем риски по индивидуальной схеме.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">Отслеживание 24/7</h3><p class="mt-1.5 text-[12px]">Показываем актуальный статус доставки.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">Гибкая маршрутизация</h3><p class="mt-1.5 text-[12px]">Меняем логистику при изменении условий.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3 class="font-['Rubik'] text-[#1C1F35] text-[15px]">B2B-фокус</h3><p class="mt-1.5 text-[12px]">Работаем с регулярными и проектными поставками.</p></article>
            </div>
        </div>
    </section>

    <section class="bg-[#F4F4F4]"><div class="container py-16"><h2 class="section-title text-3xl">Основные услуги</h2><div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8"><article class="bg-white rounded p-4"><h3 class="font-['Rubik'] text-[#1C1F35]">Автоперевозки</h3></article><article class="bg-white rounded p-4"><h3 class="font-['Rubik'] text-[#1C1F35]">Авиадоставка</h3></article><article class="bg-white rounded p-4"><h3 class="font-['Rubik'] text-[#1C1F35]">Морская доставка</h3></article><article class="bg-white rounded p-4"><h3 class="font-['Rubik'] text-[#1C1F35]">Железнодорожная доставка</h3></article></div><a href="{{ route('services') }}" class="inline-block mt-6 text-[#091242] font-['Rubik']">Смотреть все услуги →</a></div></section>

    <section class="container py-16"><h2 class="section-title text-3xl">География перевозок</h2><p class="mt-3">Россия, Китай, Турция, ОАЭ, Казахстан, Беларусь, Узбекистан, страны ЕС.</p><img src="{{ asset('Картинки/Картинки/Морская/МОРЕ%204.jpg') }}" alt="Контейнерная морская логистика для международных направлений" class="mt-6 w-full max-w-3xl rounded object-cover aspect-[16/9]" loading="lazy" decoding="async"></section>

    <section class="bg-[#091242] text-white"><div class="container py-16"><h2 class="section-title text-white text-3xl">Почему выбирают нас</h2><div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8"><article class="bg-white/10 p-4 rounded">Опытная команда ВЭД</article><article class="bg-white/10 p-4 rounded">Прозрачные SLA</article><article class="bg-white/10 p-4 rounded">Финансовая ответственность</article><article class="bg-white/10 p-4 rounded">Оптимизация маршрута</article><article class="bg-white/10 p-4 rounded">Собственная база партнеров</article><article class="bg-white/10 p-4 rounded">Оперативная поддержка</article></div></div></section>

    <section class="container py-16"><h2 class="section-title text-3xl">Как проходит доставка</h2><ol class="grid md:grid-cols-3 gap-4 mt-6"><li class="border rounded p-4">1. Заявка клиента</li><li class="border rounded p-4">2. Согласование условий</li><li class="border rounded p-4">3. Забор груза</li><li class="border rounded p-4">4. Оформление документов</li><li class="border rounded p-4">5. Перевозка</li><li class="border rounded p-4">6. Доставка получателю</li></ol></section>

    <section class="container py-16"><div class="flex justify-between items-center"><h2 class="section-title text-3xl">Отзывы</h2><div class="flex gap-2"><button type="button" id="prevReview" class="border px-3 py-2 rounded" aria-label="Предыдущий отзыв">←</button><button type="button" id="nextReview" class="border px-3 py-2 rounded" aria-label="Следующий отзыв">→</button></div></div><div class="mt-6"><article class="review-item border rounded p-5">«Поставки из Китая стали предсказуемыми, отчеты получаем ежедневно.» — ООО «ТехИмпорт»</article><article class="review-item border rounded p-5 hidden">«В сезонных пиках команда быстро перестроила маршрут и не сорвала производство.» — АО «Мегапром»</article><article class="review-item border rounded p-5 hidden">«Сильная поддержка по таможенному оформлению и прозрачные сроки.» — ООО «БиоМедСнаб»</article></div><a href="{{ route('reviews') }}" class="inline-block mt-5 text-[#091242] font-['Rubik']">Все отзывы →</a></section>

    <section class="bg-[#091242] text-white"><div class="container py-16"><h2 class="section-title text-white text-3xl">Партнеры</h2><div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6"><div class="bg-white/10 p-4 rounded text-center">Партнер 1</div><div class="bg-white/10 p-4 rounded text-center">Партнер 2</div><div class="bg-white/10 p-4 rounded text-center">Партнер 3</div><div class="bg-white/10 p-4 rounded text-center">Партнер 4</div></div></div></section>

    <section class="container py-16"><h2 class="section-title text-3xl">Краткий FAQ</h2><div class="mt-6 space-y-3"><div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Какие документы нужны для международной перевозки?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Набор документов зависит от типа груза и страны назначения; мы готовим полный комплект под ваш кейс.</div></div><div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Можно ли застраховать груз?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Да, мы подбираем страховой полис под стоимость и риски конкретной поставки.</div></div><div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Как отслеживать статус доставки?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Отправляем регулярные статусы и уведомления о каждом ключевом этапе.</div></div><div class="border rounded"><button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Работаете ли со сборными грузами?</span><span data-icon>+</span></button><div class="hidden px-4 pb-4">Да, консолидируем партии на складе и оптимизируем итоговую стоимость логистики.</div></div></div><a href="{{ route('faq') }}" class="inline-block mt-5 text-[#091242] font-['Rubik']">Перейти в полный FAQ →</a></section>

    <section class="bg-[#FFBE34]"><div class="container py-14 text-[#091242]"><h2 class="font-['Rubik'] text-3xl">Нужно коммерческое предложение по вашему маршруту?</h2><p class="mt-2">Оставьте заявку — ответим и согласуем условия в течение 30 минут.</p><button type="button" data-open-lead class="mt-5 bg-[#091242] text-white px-6 py-3 rounded">Оставить заявку</button></div></section>
@endsection
