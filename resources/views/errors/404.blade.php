@extends('layouts.app')

@section('title', 'Страница не найдена — КаргоСайт')

@section('content')
<section class="container py-24 text-center">
  <h1 class="text-6xl font-['Rubik'] text-[#091242]">404</h1>
  <p class="mt-4">Страница не найдена.</p>
  <a href="{{ route('home') }}" class="mt-8 inline-block bg-[#FFBE34] px-6 py-3 text-[#091242] rounded">На главную</a>
</section>
@endsection
