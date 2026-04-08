@php
  $navClass = fn (string $name) => request()->routeIs($name) ? 'text-[#FFBE34]' : 'text-[#1C1F35]';
@endphp
<header id="siteHeader" class="sticky top-0 z-50 bg-white border-b border-[#E5E8F0]">
  <div class="container py-2.5 flex items-center justify-between gap-4">
    <a href="{{ route('home') }}" class="flex items-center gap-2" aria-label="Перейти на главную страницу">
      <img src="{{ asset('assets/icons/logo-mark.svg') }}" alt="Логотип компании {{ $companyName }}" class="h-5 w-5"><span class="font-['Rubik'] text-[15px] text-[#091242] leading-none">{{ $companyName }}</span>
    </a>
    <button id="mobileMenuButton" class="md:hidden text-2xl" type="button" aria-label="Открыть мобильное меню">☰</button>
    <nav class="hidden md:flex gap-4 text-[11px] leading-none">
      <a href="{{ route('home') }}" class="{{ $navClass('home') }}">Главная</a>
      <a href="{{ route('services') }}" class="{{ $navClass('services') }}">Услуги</a>
      <a href="{{ route('advantages') }}" class="{{ $navClass('advantages') }}">Преимущества</a>
      <a href="{{ route('cases') }}" class="{{ $navClass('cases') }}">Кейсы</a>
      <a href="{{ route('reviews') }}" class="{{ $navClass('reviews') }}">Отзывы</a>
      <a href="{{ route('faq') }}" class="{{ $navClass('faq') }}">FAQ</a>
      <a href="{{ route('contacts') }}" class="{{ $navClass('contacts') }}">Контакты</a>
    </nav>
    <div class="hidden md:flex items-center gap-3">
      <a href="tel:+78001234567" class="font-['Rubik'] text-[#091242] text-[11px] leading-none" aria-label="Позвонить в {{ $companyName }}">{{ $companyPhone }}</a>
      <button type="button" data-open-lead class="bg-[#FFBE34] px-3 py-1.5 rounded-[2px] text-[#091242] text-[11px] leading-none font-medium">Оставить заявку</button>
    </div>
  </div>
  <nav id="mobileNav" class="hidden border-t md:hidden bg-white">
    <div class="container py-4 flex flex-col gap-3">
      <a href="{{ route('home') }}" class="{{ $navClass('home') }}">Главная</a>
      <a href="{{ route('services') }}" class="{{ $navClass('services') }}">Услуги</a>
      <a href="{{ route('advantages') }}" class="{{ $navClass('advantages') }}">Преимущества</a>
      <a href="{{ route('cases') }}" class="{{ $navClass('cases') }}">Кейсы</a>
      <a href="{{ route('reviews') }}" class="{{ $navClass('reviews') }}">Отзывы</a>
      <a href="{{ route('faq') }}" class="{{ $navClass('faq') }}">FAQ</a>
      <a href="{{ route('contacts') }}" class="{{ $navClass('contacts') }}">Контакты</a>
      <a href="tel:+78001234567">{{ $companyPhone }}</a>
      <button type="button" data-open-lead class="bg-[#FFBE34] py-2 rounded text-[#091242]">Оставить заявку</button>
    </div>
  </nav>
</header>
