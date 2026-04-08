@extends('layouts.app')

@section('title', 'Контакты — EWLG')

@section('content')
<div class="container py-12">
  <h1 class="text-4xl font-bold text-[#1C1F35]">Контакты</h1>
  <div class="grid md:grid-cols-2 gap-6 mt-8">
    <div>
      <p><strong>Телефон:</strong> <a href="tel:+78001234567" class="text-[#091242]">{{ $companyPhone }}</a></p>
      <p class="mt-2"><strong>Email:</strong> <a href="mailto:{{ $companyEmail }}" class="text-[#091242]">{{ $companyEmail }}</a></p>
      <p class="mt-2"><strong>Мессенджеры:</strong> Telegram, WhatsApp</p>
      <p class="mt-2"><strong>Адрес:</strong> {{ $companyAddress }}</p>
      <button type="button" data-open-lead class="mt-6 bg-[#091242] text-white px-5 py-3 rounded">Быстрая заявка</button>
    </div>
    <div>
      <iframe title="Карта офиса EWLG" src="https://yandex.ru/map-widget/v1/?um=constructor%3Adummy&amp;source=constructor" class="w-full h-80 border rounded"></iframe>
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

  <section id="lead-form" class="mt-16 border-t pt-12">
    <h2 class="section-title text-2xl text-[#1C1F35]">Заявка</h2>
    <p class="mt-2 text-sm">Оставьте контакты и комментарий — менеджер EWLG свяжется с вами.</p>
    <form class="js-validate-form grid md:grid-cols-2 gap-4 mt-6 max-w-3xl" method="POST" action="{{ route('leads.store') }}" novalidate>
      @csrf
      <input type="hidden" name="lead_type" value="lead">
      <input name="fullName" required placeholder="Имя" aria-label="Имя" class="border p-3 rounded">
      <input name="phone" required placeholder="Телефон" aria-label="Телефон" class="border p-3 rounded">
      <input type="email" name="email" required placeholder="Email" aria-label="Email" class="border p-3 rounded">
      <textarea name="message" required placeholder="Комментарий к заявке" aria-label="Комментарий к заявке" class="md:col-span-2 border p-3 rounded min-h-28"></textarea>
      <button type="submit" class="md:col-span-2 bg-[#091242] text-white py-3 rounded">Отправить заявку</button>
      <p data-form-success class="hidden md:col-span-2 text-green-600">Спасибо! Заявка принята, менеджер свяжется с вами.</p>
    </form>
  </section>
</div>
@endsection
