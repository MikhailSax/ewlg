@extends('layouts.app')

@section('title', 'Статья — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Статья</h1></div></section>
<section class="container py-16 grid lg:grid-cols-3 gap-8">
  <article class="lg:col-span-2 prose-custom">
    <h2>Как технологии меняют цепочки поставок</h2>
    <p>Материал в нескольких абзацах для визуального баланса страницы.</p>
    <blockquote class="border-l-4 border-[#FFBE34] pl-4 italic my-6">Эффективная логистика — невидимый двигатель международной торговли.</blockquote>
    <p>Второй блок текста и выводы.</p>
  </article>
  <aside class="space-y-6">
    <div class="bg-[#F4F4F4] p-6 rounded">
      <h3 class="font-['Rubik'] text-xl text-[#1C1F35]">Рубрики</h3>
      <ul class="mt-4 space-y-2"><li>Перевозки</li><li>Склад</li><li>Морские грузы</li></ul>
    </div>
    <div class="bg-[#091242] text-white p-6 rounded">
      <h3 class="font-['Rubik'] text-xl">Нужна консультация?</h3>
      <p class="mt-3">Менеджеры на связи в рабочее время.</p>
      <button type="button" data-open-lead class="mt-4 bg-[#FFBE34] text-[#091242] px-4 py-2 rounded w-full">Оставить заявку</button>
    </div>
    <div class="bg-[#F4F4F4] p-6 rounded">
      <h3 class="font-['Rubik'] text-xl">Контакты</h3>
      <p class="mt-3"><a href="mailto:info@cargosite.ru" class="text-[#091242]">info@cargosite.ru</a></p>
    </div>
  </aside>
</section>
@endsection
