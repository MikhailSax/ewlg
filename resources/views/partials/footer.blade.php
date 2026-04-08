<footer class="bg-[#091242] text-white">
  <div class="container py-10 grid md:grid-cols-4 gap-6">
    <div>
      <div class="flex items-center gap-2">
        <img src="{{ asset('assets/icons/logo-mark.svg') }}" alt="Логотип {{ $companyName }}" class="h-8 w-8"><span class="font-['Rubik'] text-xl">{{ $companyName }}</span>
      </div>
      <p class="mt-3 text-sm text-white/80">Логистика для производственных, торговых и e-commerce компаний.</p>
    </div>
    <div>
      <h3 class="font-['Rubik']">Контакты</h3>
      <p class="mt-2"><a href="tel:+78001234567">{{ $companyPhone }}</a></p>
      <p><a href="mailto:{{ $companyEmail }}">{{ $companyEmail }}</a></p>
      <p>{{ $companyAddress }}</p>
    </div>
    <div>
      <h3 class="font-['Rubik']">Разделы</h3>
      <ul class="mt-2 space-y-1">
        <li><a href="{{ route('about') }}">О компании</a></li>
        <li><a href="{{ route('services') }}">Услуги</a></li>
        <li><a href="{{ route('cases') }}">Кейсы</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li>
      </ul>
    </div>
    <div>
      <h3 class="font-['Rubik']">Мы в соцсетях</h3>
      <p class="mt-2">Telegram • VK • YouTube</p>
      <p class="mt-4 text-sm text-white/70">© {{ date('Y') }} {{ $companyName }}. Все права защищены.</p>
      <p class="text-sm text-white/70">ООО «{{ $companyName }} Логистика», ИНН 7700000000</p>
    </div>
  </div>
</footer>
