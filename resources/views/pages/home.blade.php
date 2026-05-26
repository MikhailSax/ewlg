@extends('layouts.app')

@section('title', 'EWLG — Международная логистика для бизнеса')

@section('content')
    @php
        $homeHeroTitle = $homeHeroTitle ?? \App\Models\SiteSetting::getValue('home_hero_title', 'Комплексная логистика для стабильных поставок в Россию, страны СНГ, Европу и ОАЭ');
        $homeHeroSubtitle = $homeHeroSubtitle ?? \App\Models\SiteSetting::getValue('home_hero_subtitle', 'Выстраиваем эффективные маршруты, оптимизируем сроки и стоимость доставки, берём на себя оформление документов и обеспечиваем контроль перевозки на каждом этапе.');
        $homeHeroCta = $homeHeroCta ?? \App\Models\SiteSetting::getValue('home_hero_cta', 'Оставить заявку');
    @endphp

    <section class="relative overflow-hidden bg-[#091242]">
        <div class="absolute -left-36 top-28 h-80 w-80 rounded-full bg-[#1D2E7A]/45"></div>
        <div class="absolute right-8 -top-20 h-80 w-80 rounded-full bg-[#1D2E7A]/45"></div>
        <div class="relative container py-14 md:py-16 text-white min-h-[340px] md:min-h-[420px] flex items-center">
            <div class="max-w-[570px]">
                <h1 class="font-['Rubik'] text-[34px] md:text-[48px] leading-[1.06] tracking-[-0.02em]">{{ $homeHeroTitle }}</h1>
                <p class="mt-3 text-white/90 text-[13px] leading-[1.45] max-w-[430px]">{{ $homeHeroSubtitle }}</p>
                <ul class="mt-4 space-y-1.5 text-[13px] leading-[1.4]">
                    <li>• Единый менеджер проекта 24/7</li>
                    <li>• Прозрачная стоимость без скрытых платежей</li>
                    <li>• Онлайн-отчетность по каждой партии</li>
                </ul>
                <button type="button" data-open-lead
                        class="mt-5 bg-[#FFBE34] text-[#091242] px-4 py-2 rounded-[2px] font-medium text-[12px]">{{ $homeHeroCta }}</button>
                <div class="mt-6 grid grid-cols-3 gap-2 text-center">
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">3</p>
                        <p class="text-[10px] mt-1 text-white/90">года на рынке</p>
                    </div>
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">50 000</p>
                        <p class="text-[10px] mt-1 text-white/90">тонн доставленных грузов</p>
                    </div>
                    <div class="bg-white/10 py-2.5 px-2 rounded-[2px]">
                        <p class="font-['Rubik'] text-[26px] leading-none">500+</p>
                        <p class="text-[10px] mt-1 text-white/90">довольных клиентов</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F4F4F4]">
        <div class="container py-12">
            <h2 class="section-title text-[36px] leading-none">Ключевые преимущества</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 mt-7">
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Комплексная доставка “под ключ”</h3>
                    <p class="mt-1.5 text-[12px]">Организуем весь цикл перевозки: подбор маршрута, забор груза,
                        консолидацию, международную доставку, таможенное оформление и доставку до склада получателя.</p>
                </article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Оптимизация стоимости и сроков</h3>
                    <p class="mt-1.5 text-[12px]">Сравниваем доступные маршруты и виды транспорта, подбираем решение с
                        оптимальным балансом цены, скорости и надёжности.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Таможенное сопровождение</h3>
                    <p class="mt-1.5 text-[12px]">Помогаем с классификацией товара, подготовкой документов, проверкой
                        кодов ТН ВЭД, расчётом платежей и прохождением таможенных процедур.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Прозрачный контроль груза</h3>
                    <p class="mt-1.5 text-[12px]">Предоставляем актуальную информацию о статусе поставки, ключевых
                        этапах маршрута и возможных изменениях по срокам.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Складская логистика и консолидация</h3>
                    <p class="mt-1.5 text-[12px]">Обеспечиваем приём, хранение, маркировку, переупаковку, консолидацию
                        партий и дальнейшую отправку по согласованному графику.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Документооборот и отчётность</h3>
                    <p class="mt-1.5 text-[12px]">Готовим транспортные, коммерческие и сопроводительные документы,
                        предоставляем отчётность по этапам перевозки и закрывающие документы после завершения поставки.
                    </p></article>
            </div>
        </div>
    </section>

    <section class="bg-[#F4F4F4]">
        <div class="container py-16"><h2 class="section-title text-3xl">Основные услуги</h2>
            <div class="mt-3"><p>Мы предлагаем комплексные логистические и внешнеторговые решения для доставки, хранения
                    и сопровождения грузов с учётом сроков, бюджета, маршрута и особенностей товара.</p></div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-8">
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Автомобильные перевозки</h3>
                    <p class="mt-1.5 text-[12px]">Гибкая доставка грузов по городским, региональным и международным
                        маршрутам.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Авиадоставка</h3>
                    <p class="mt-1.5 text-[12px]">Оперативная перевозка срочных, ценных и чувствительных к срокам
                        грузов.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Морская доставка</h3>
                    <p class="mt-1.5 text-[12px]">Экономичное решение для международных перевозок крупных партий и
                        контейнерных грузов.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Железнодорожная доставка</h3>
                    <p class="mt-1.5 text-[12px]">Надёжный способ транспортировки объёмных, тяжёлых и регулярных грузов
                        на средние и дальние расстояния.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Услуги торгового агента</h3>
                    <p class="mt-1.5 text-[12px]">Профессиональное сопровождение закупок, взаимодействие с поставщиками,
                        контроль документации и организация поставок.</p></article>
                <article class="border border-[#DBDEE7] rounded-[2px] p-4 bg-[#F4F4F4]"><h3
                        class="font-['Rubik'] text-[#1C1F35] text-[15px]">Складские услуги</h3>
                    <p class="mt-1.5 text-[12px]">Ответственное хранение, обработка, консолидация, маркировка и
                        подготовка грузов к дальнейшей отправке.</p></article>
            </div>
            <a href="{{ route('services') }}" class="inline-block mt-6 text-[#091242] font-['Rubik']">Смотреть все
                услуги →</a></div>
    </section>

    <section class="container py-16">
        <h2 class="section-title text-3xl font-bold mb-3">Популярные направления</h2>
        <p class="text-gray-600 mb-8">Евросоюз,Республика Казахстан,Объединенные Арабские Эмираты,Республика Беларусь,Российская Федерация</p>

        <!-- Сетка: 1 колонка на мобильных, 2 на планшетах, 3 на ПК -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Карточка 1 -->
            <div class="overflow-hidden rounded shadow-sm border border-gray-100">
                <img src="{{ asset('images/ЕС.png') }}" alt="Италия" class="w-full object-cover aspect-[16/9]" loading="lazy" decoding="async">
                <div class="p-4">
                    <span class="text-lg font-semibold text-gray-800">ЕС</span>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="overflow-hidden rounded shadow-sm border border-gray-100">
                <img src="{{ asset('images/КЗ.png') }}" alt="Китай" class="w-full object-cover aspect-[16/9]" loading="lazy" decoding="async">
                <div class="p-4">
                    <span class="text-lg font-semibold text-gray-800">Республика Казахстан</span>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="overflow-hidden rounded shadow-sm border border-gray-100">
                <img src="{{ asset('images/ОАЭ.png') }}" alt="Турция" class="w-full object-cover aspect-[16/9]" loading="lazy" decoding="async">
                <div class="p-4">
                    <span class="text-lg font-semibold text-gray-800">ОАЭ</span>
                </div>
            </div>

            <!-- Карточка 4 -->
            <div class="overflow-hidden rounded shadow-sm border border-gray-100">
                <img src="{{ asset('images/РБ.png') }}" alt="ОАЭ" class="w-full object-cover aspect-[16/9]" loading="lazy" decoding="async">
                <div class="p-4">
                    <span class="text-lg font-semibold text-gray-800">Республика Беларусь</span>
                </div>
            </div>

            <!-- Карточка 5 -->
            <div class="overflow-hidden rounded shadow-sm border border-gray-100">
                <img src="{{ asset('images/РФ.png') }}" alt="Мальдивы" class="w-full object-cover aspect-[16/9]" loading="lazy" decoding="async">
                <div class="p-4">
                    <span class="text-lg font-semibold text-gray-800">Российская Федерация</span>
                </div>
            </div>

        </div>
    </section>

    <section class="container py-16"><h2 class="section-title text-3xl">Как проходит доставка</h2>
        <ol class="grid md:grid-cols-3 gap-4 mt-6">
            <li class="border rounded p-4">
                1.Приём и обработка заявки
                <p>Уточняем параметры груза, маршрут, сроки, требования к перевозке и дополнительные услуги.</p>
            </li>
            <li class="border rounded p-4">2.Расчёт и согласование условий<p>
                    Подбираем оптимальный способ доставки, рассчитываем стоимость и согласовываем сроки, маршрут и
                    условия перевозки.
                </p></li>
            <li class="border rounded p-4">3.Организация забора груза<p>Координируем подачу транспорта и обеспечиваем
                    своевременный забор груза у отправителя.</p></li>
            <li class="border rounded p-4">4.Подготовка и оформление документов<p>
                    Проверяем и оформляем необходимую транспортную, сопроводительную и таможенную документацию при
                    необходимости.
                </p></li>
            <li class="border rounded p-4">5.Перевозка и контроль на маршруте<p>Организуем доставку выбранным видом
                    транспорта и контролируем движение груза на всех этапах.</p></li>
            <li class="border rounded p-4">6. Передача груза получателю<p>Обеспечиваем доставку в пункт назначения,
                    передачу груза получателю и подтверждение завершения перевозки.</p></li>
        </ol>
    </section>

{{--    <section class="container py-16">--}}
{{--        <div class="flex justify-between items-center"><h2 class="section-title text-3xl">Отзывы</h2>--}}
{{--            <div class="flex gap-2">--}}
{{--                <button type="button" id="prevReview" class="border px-3 py-2 rounded" aria-label="Предыдущий отзыв">←--}}
{{--                </button>--}}
{{--                <button type="button" id="nextReview" class="border px-3 py-2 rounded" aria-label="Следующий отзыв">→--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="mt-6">--}}
{{--            <article class="review-item border rounded p-5">«Поставки из Китая стали предсказуемыми, отчеты получаем--}}
{{--                ежедневно.» — ООО «ТехИмпорт»--}}
{{--            </article>--}}
{{--            <article class="review-item border rounded p-5 hidden">«В сезонных пиках команда быстро перестроила маршрут--}}
{{--                и не сорвала производство.» — АО «Мегапром»--}}
{{--            </article>--}}
{{--            <article class="review-item border rounded p-5 hidden">«Сильная поддержка по таможенному оформлению и--}}
{{--                прозрачные сроки.» — ООО «БиоМедСнаб»--}}
{{--            </article>--}}
{{--        </div>--}}
{{--        <a href="{{ route('reviews') }}" class="inline-block mt-5 text-[#091242] font-['Rubik']">Все отзывы →</a>--}}
{{--    </section>--}}

    <section class="container py-16"><h2 class="section-title text-3xl">Краткий FAQ</h2>
        <div class="mt-6 space-y-3">
            <div class="border rounded">
                <button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Вы помогаете с погрузкой и разгрузкой?</span><span
                        data-icon>+</span></button>
                <div class="hidden px-4 pb-4">Да, при необходимости можно организовать погрузочно-разгрузочные работы.
                </div>
            </div>
            <div class="border rounded">
                <button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Можно ли застраховать груз?</span><span
                        data-icon>+</span></button>
                <div class="hidden px-4 pb-4">Да, по запросу возможно оформление страхования груза.
                </div>
            </div>
            <div class="border rounded">
                <button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Как оформить заявку?</span><span
                        data-icon>+</span></button>
                <div class="hidden px-4 pb-4">Достаточно связаться с нами, указать маршрут, характеристики груза, сроки и контактные данные.</div>
            </div>
            <div class="border rounded">
                <button type="button" data-accordion class="w-full p-4 flex justify-between text-left"><span>Работаете ли со сборными грузами?</span><span
                        data-icon>+</span></button>
                <div class="hidden px-4 pb-4">Да, консолидируем партии на складе и оптимизируем итоговую стоимость
                    логистики.
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#FFBE34]">
        <div class="container py-14 text-[#091242]"><h2 class="font-['Rubik'] text-3xl">Нужно коммерческое предложение
                по вашему маршруту?</h2>
            <p class="mt-2">Оставьте заявку — ответим и согласуем условия в течение 30 минут.</p>
            <button type="button" data-open-lead class="mt-5 bg-[#091242] text-white px-6 py-3 rounded">Оставить
                заявку
            </button>
        </div>
    </section>
@endsection
