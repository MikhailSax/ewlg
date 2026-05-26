@extends('layouts.app')

@section('title', 'Incoterms — Правила международных поставок')

@section('content')
    <div class="w-full bg-gray-50 py-12">
        <div class="container mx-auto px-4 max-w-5xl">

            <!-- Заголовок -->
            <header class="mb-10 border-b border-gray-200 pb-6">
                <h1 class="text-3xl font-bold text-[#1C1F35] tracking-tight sm:text-4xl">Incoterms</h1>
                <p class="mt-3 text-base text-gray-600 leading-relaxed">
                    Это международные правила поставки, которые определяют, кто из сторон — продавец или покупатель — отвечает за доставку, расходы, страховку, таможенное оформление и риски на каждом этапе перевозки.
                </p>
            </header>

            <!-- Информационный блок -->
            <section class="bg-white border border-gray-200 rounded-xl p-6 mb-10 shadow-xs">
                <h2 class="text-lg font-bold text-[#1C1F35] mb-4">Назначение правил Incoterms — регламентация следующих условий:</h2>
                <ul class="space-y-2 text-sm text-gray-700 list-disc pl-5">
                    <li>Распределение расходов на оплату транспорта;</li>
                    <li>Обязанности по таможенному оформлению экспорта и импорта;</li>
                    <li>Точка перехода рисков за сохранность груза;</li>
                    <li>Определение стороны, отвечающей за страхование;</li>
                    <li>Включение дополнительных расходов в конечную цену товара.</li>
                </ul>
                <p class="mt-5 text-xs font-semibold text-gray-400 uppercase tracking-wider">Основные используемые базисы: EXW, FCA, FOB, CIF, CPT, DAP, DDP.</p>
            </section>

            <!-- Список базисов -->
            <section class="space-y-3">
                <h2 class="text-xl font-bold text-[#1C1F35] mb-4">Базисы поставок</h2>

                <!-- EXW -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>EXW — Ex Works / Франко-завод</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец предоставляет товар на своем складе или производстве. Покупатель сам забирает груз и берет на себя почти все расходы и риски: погрузку, доставку, экспортное и импортное оформление.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Применение: Если покупатель полностью контролирует логистику.</p>
                    </div>
                </div>

                <!-- FCA -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>FCA — Free Carrier / Франко-перевозчик</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец передает товар перевозчику в согласованном месте. Экспортное оформление делает продавец. После передачи перевозчику риски переходят к покупателю.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Применение: Универсальный вариант для международных перевозок.</p>
                    </div>
                </div>

                <!-- CPT -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>CPT — Carriage Paid To / Перевозка оплачена до</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец оплачивает доставку до указанного места назначения, но риск переходит к покупателю уже после передачи товара первому перевозчику.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Особенность: Доставка оплачена продавцом, но ответственность за груз в пути лежит на покупателе.</p>
                    </div>
                </div>

                <!-- CIP -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>CIP — Carriage and Insurance Paid To / Перевозка и страхование оплачены до</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Похоже на CPT, но продавец дополнительно обязан оформить страховку груза до места назначения.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Применение: Подходит, если покупателю необходимо включение доставки и страхования в общую цену.</p>
                    </div>
                </div>

                <!-- DAP -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>DAP — Delivered At Place / Поставка в место назначения</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец доставляет товар до согласованного адреса или терминала. Покупатель отвечает за импортное таможенное оформление и оплату пошлин/налогов.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Применение: Оптимально, если покупатель самостоятельно осуществляет импортное оформление.</p>
                    </div>
                </div>

                <!-- DPU -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>DPU — Delivered at Place Unloaded / Поставка в место назначения с разгрузкой</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец доставляет товар до указанного места и отвечает за разгрузку. После разгрузки риск переходит к покупателю. Импортное оформление — на покупателе.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Применение: Когда требуется, чтобы продавец организовал не только транспортировку, но и выгрузку товара.</p>
                    </div>
                </div>

                <!-- DDP -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>DDP — Delivered Duty Paid / Поставка с оплатой пошлин</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец берет на себя максимум обязанностей: доставку, экспорт, импорт, пошлины и налоги. Покупатель просто получает товар в согласованном месте.</p>
                        <p class="text-gray-700 font-semibold text-xs mt-1">Особенность: Максимально удобный для покупателя базис поставки.</p>
                    </div>
                </div>

                <!-- FAS -->
                <div class="border border-gray-200 rounded-lg overflow-hidden bg-white shadow-xs">
                    <button type="button" data-accordion class="w-full p-4 flex justify-between items-center text-left font-bold text-gray-800 hover:bg-slate-50 transition-colors cursor-pointer">
                        <span>FAS — Free Alongside Ship / Свободно вдоль борта судна</span>
                        <span data-icon class="text-xl text-gray-400 font-mono transition-transform duration-200">+</span>
                    </button>
                    <div class="hidden px-5 pb-5 text-sm text-gray-600 border-t border-gray-100 pt-3 bg-slate-50/40 space-y-2">
                        <p>Продавец доставляет товар к борту судна в порту отправления. Дальше расходы и риски переходят к покупателю.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
