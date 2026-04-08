@extends('layouts.app')

@section('title', 'Защищённая страница — КаргоСайт')

@section('content')
<section class="page-hero"><div class="container py-20"><h1>Защищённая страница</h1></div></section>
<section class="container py-16 max-w-lg">
  <p class="mb-4 text-sm">Демо-форма доступа (без серверной проверки).</p>
  <form class="js-validate-form bg-[#F4F4F4] p-6 rounded" novalidate>
    <label class="block text-sm">Пароль<input type="password" name="password" required class="mt-2 w-full border p-3 rounded"></label>
    <button type="submit" class="w-full mt-4 bg-[#FFBE34] text-[#091242] py-3 font-medium rounded">Войти</button>
    <p data-form-success class="hidden mt-3 text-green-600 text-sm">Форма отправлена (демо).</p>
  </form>
</section>
@endsection
