@extends('layouts.app')

@section('title', 'Проекты — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Проекты</h1></div></section>
<section class="container py-16">
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach (range(1, 6) as $i)
    <article class="p-6 border rounded">
      <h3 class="font-['Rubik'] text-xl text-[#1C1F35]">Проект {{ $i }}</h3>
      <p class="mt-3">Пример кейса доставки и сопровождения.</p>
      <a href="{{ route('project.single') }}" class="mt-3 inline-block text-[#091242]">Подробнее</a>
    </article>
    @endforeach
  </div>
</section>
<section class="bg-[#091242] text-white"><div class="container py-10 grid grid-cols-2 md:grid-cols-4 text-center gap-4"><div>Партнеры</div><div>География</div><div>Отрасли</div><div>Награды</div></div></section>
@endsection
