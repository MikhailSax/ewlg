@if(!empty($frontAdminBarVisible))
  <div class="fixed top-0 left-0 right-0 z-[100] flex flex-wrap items-center gap-3 px-3 py-2 text-[12px] text-white shadow-md"
       style="background:#1d2327;font-family:system-ui,sans-serif;">
    <a href="{{ $frontAdminPanelUrl }}" class="font-semibold hover:underline">EWLG — админка</a>
    <span class="text-white/40">|</span>
    @if(!empty($frontAdminPageSlug))
      @if(!empty($frontAdminBladeEditUrl))
        <a href="{{ $frontAdminBladeEditUrl }}" class="hover:underline">Blade-шаблон</a>
        <span class="text-white/40">|</span>
      @endif
      @if(!empty($frontAdminEditPageUrl))
        <a href="{{ $frontAdminEditPageUrl }}" class="hover:underline">CMS (блоки)</a>
        @if($frontAdminPageRecord->is_published)
          <span class="rounded bg-green-700 px-1.5 py-0.5 text-[10px] uppercase">опубликовано</span>
        @else
          <span class="rounded bg-amber-600 px-1.5 py-0.5 text-[10px] uppercase">черновик</span>
        @endif
      @elseif(!empty($frontAdminCreatePageUrl))
        <a href="{{ $frontAdminCreatePageUrl }}" class="hover:underline">Создать в CMS ({{ $frontAdminPageSlug }})</a>
      @endif
    @else
      <span class="text-white/60">Откройте страницу сайта для ссылки на редактирование</span>
    @endif
    <span class="ml-auto text-white/50 hidden sm:inline">Режим редактора</span>
  </div>
@endif
