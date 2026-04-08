<div id="leadModal" class="fixed inset-0 hidden z-[60] bg-black/60 p-4">
  <div class="bg-white max-w-3xl mx-auto mt-10 rounded-xl p-6 relative">
    <button id="closeLeadModal" type="button" class="absolute right-4 top-4 text-2xl" aria-label="Закрыть окно заявки">×</button>
    <h2 class="section-title text-2xl">{{ $leadModalTitle }}</h2>
    <p class="mt-2 text-sm text-[#666C89]">{{ $leadModalSubtitle }}</p>
    <form class="js-validate-form grid md:grid-cols-2 gap-4 mt-6" method="POST" action="{{ route('leads.store') }}" novalidate>
      @csrf
      <input type="hidden" name="lead_type" value="lead">
      <input name="fullName" required placeholder="Имя" aria-label="Имя" class="border p-3 rounded">
      <input name="phone" required placeholder="Телефон" aria-label="Телефон" class="border p-3 rounded">
      <input type="email" name="email" required placeholder="Email" aria-label="Email" class="border p-3 rounded">
      <textarea name="message" required placeholder="Комментарий к заявке" aria-label="Комментарий к заявке" class="md:col-span-2 border p-3 rounded min-h-28"></textarea>
      <button type="submit" class="md:col-span-2 bg-[#091242] text-white py-3 rounded">Отправить заявку</button>
      <p data-form-success class="hidden md:col-span-2 text-green-600">Спасибо! Заявка принята, менеджер свяжется с вами в ближайшее время.</p>
    </form>
  </div>
</div>
