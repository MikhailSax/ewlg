<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'EWLG — Международная логистика для бизнеса')</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <link rel="alternate icon" href="{{ asset('favicon.ico') }}" sizes="any">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>.container{max-width:1200px;margin:0 auto;padding:0 1rem}body{font-family:Krub,sans-serif;color:#666C89}.section-title{font-family:Rubik,sans-serif;color:#1C1F35}.sticky-shadow{box-shadow:0 8px 20px rgba(9,18,66,.08)}.page-hero{background:#091242;color:#fff}.page-hero h1{font-family:Rubik,sans-serif;font-size:clamp(2rem,5vw,3.5rem)}.prose-custom h2,.prose-custom h3{font-family:Rubik,sans-serif;color:#1C1F35;margin-top:1rem}.prose-custom p,.prose-custom li{margin-top:.75rem}.cms-rich-text :where(h1,h2,h3,h4,h5,h6){font-family:Rubik,sans-serif;color:#1C1F35;margin-top:1rem}.cms-rich-text ul{list-style:disc;padding-left:1.25rem;margin-top:.75rem}.cms-rich-text ol{list-style:decimal;padding-left:1.25rem;margin-top:.75rem}.cms-rich-text blockquote{border-left:4px solid #FFBE34;padding-left:1rem;margin:1rem 0;color:#4b5563}.cms-rich-text a{color:#091242;text-decoration:underline}.cms-rich-text table{width:100%;border-collapse:collapse;margin:1rem 0;font-size:.95rem}.cms-rich-text th,.cms-rich-text td{border:1px solid #E5E8F0;padding:.5rem .75rem;text-align:left}.cms-rich-text th{background:#f8f9fc;font-family:Rubik,sans-serif;color:#1C1F35}.cms-rich-text img{max-width:100%;height:auto;border-radius:.5rem}</style>
  @stack('head')
</head>
<body @class(['bg-white', 'pt-10' => !empty($frontAdminBarVisible)])>
  @include('partials.admin-front-bar')
  @php
    use App\Models\SiteSetting;

    $companyName = SiteSetting::getValue('company_name', 'Ewlg');
    $companyLogo = SiteSetting::getValue('company_logo', asset('assets/icons/logo-mark.svg'));
    $companyPhone = SiteSetting::getValue('company_phone', '+7 (800) 123-45-67');
    $companyEmail = SiteSetting::getValue('company_email', 'info@ewlg.com');
    $companyAddress = SiteSetting::getValue('company_address', 'Москва, Пресненская набережная, 10');

    $homeHeroTitle = SiteSetting::getValue('home_hero_title', 'Комплексная логистика для стабильных поставок по России и миру');
    $homeHeroSubtitle = SiteSetting::getValue('home_hero_subtitle', 'Оптимизируем сроки и стоимость доставки, берем на себя документооборот и контроль всех этапов перевозки.');
    $homeHeroCta = SiteSetting::getValue('home_hero_cta', 'Оставить заявку');

    $leadModalTitle = SiteSetting::getValue('lead_modal_title', 'Оставить заявку');
    $leadModalSubtitle = SiteSetting::getValue('lead_modal_subtitle', 'Заполните форму обратной связи — менеджер EWLG свяжется с вами.');
  @endphp
  @include('partials.header')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')
  @include('partials.lead-modal')

  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>
