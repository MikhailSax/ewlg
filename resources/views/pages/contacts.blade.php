@extends('layouts.app')
@php
$companyPhone = '+7(983)-634-55-61';
$companyEmail = 'example@mail.ru';
$companyAddress = 'г.Гуанжоу Китай '
@endphp
@section('title', 'Контакты — EWLG')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Контакты</h1>
  <div class="grid md:grid-cols-2 gap-6 mt-8">
    <div>
      <p><strong>Телефон:</strong> <a href="tel:+79836345561" class="text-[#091242]">{{ $companyPhone }}</a></p>
      <p class="mt-2"><strong>Email:</strong> <a href="mailto:{{ $companyEmail }}" class="text-[#091242]">{{ $companyEmail }}</a></p>
      <p class="mt-2"><strong>Мессенджеры:</strong> Telegram, We chat</p>
{{--      <p class="mt-2"><strong>Адрес:</strong> {{ $companyAddress }}</p>--}}
      <button type="button" data-open-lead class="mt-6 bg-[#091242] text-white px-5 py-3 rounded">Быстрая заявка</button>
    </div>
  </div>

  <section id="feedback" class="mt-16 border-t pt-12">
    <h2 class="section-title text-2xl text-[#1C1F35]">Обратная связь</h2>
    <p class="mt-2 text-sm">Напишите нам — ответим на общие вопросы и запросы по сотрудничеству.</p>
    <form class="js-validate-form grid md:grid-cols-2 gap-4 mt-6 max-w-3xl" method="POST" action="{{ route('leads.store') }}" novalidate>
      @csrf
      <input type="hidden" name="lead_type" value="feedback">
      <label class="block text-sm md:col-span-1">Ваше имя<input name="feedback_name" required class="mt-2 w-full border p-3 rounded" placeholder="Имя"></label>
      <label class="block text-sm md:col-span-1">Email<input type="email" name="feedback_email" required class="mt-2 w-full border p-3 rounded" placeholder="email@example.com"></label>
      <label class="md:col-span-2 block text-sm">Сообщение<textarea name="feedback_message" required class="mt-2 w-full border p-3 min-h-32 rounded" placeholder="Текст сообщения"></textarea></label>
      <button type="submit" class="md:col-span-2 bg-[#FFBE34] text-[#091242] py-3 rounded font-medium">Отправить</button>
      <p data-form-success class="hidden md:col-span-2 text-green-600">Спасибо! Сообщение отправлено.</p>
    </form>
  </section>
</div>
@endsection
