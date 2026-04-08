<x-filament-widgets::widget class="fi-legacy-static-pages-hint">
  <x-filament::section
    heading="Текущие страницы сайта (статические)"
    description="Пока для адреса нет опубликованной CMS-страницы с блоками, на сайте показывается вёрстка из файла Blade. Редактировать разметку файла можно в разделе «Шаблоны Blade» или по ссылке в колонке ниже. Телефон, название компании и часть текстов на главной — в «Контент сайта» (site_settings)."
  >
    <div class="overflow-x-auto text-sm">
      <table class="w-full text-left">
        <thead>
          <tr class="border-b border-gray-200 dark:border-white/10">
            <th class="py-2 pr-4 font-medium">Slug (ключ CMS)</th>
            <th class="py-2 pr-4 font-medium">Файл в проекте</th>
            <th class="py-2 pr-4 font-medium">На сайте</th>
            <th class="py-2 pr-4 font-medium">Blade (код)</th>
            <th class="py-2 pr-4 font-medium">В админке (CMS)</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rows as $row)
            <tr class="border-b border-gray-100 dark:border-white/5 align-top">
              <td class="py-2 pr-4 font-mono text-xs">{{ $row['slug'] }}</td>
              <td class="py-2 pr-4 text-gray-600 dark:text-gray-400">{{ $row['blade_path'] }}</td>
              <td class="py-2 pr-4">
                <a href="{{ $row['url'] }}" target="_blank" rel="noopener" class="text-primary-600 hover:underline">Открыть</a>
              </td>
              <td class="py-2 pr-4">
                <a href="{{ $row['blade_edit_url'] }}" class="text-primary-600 hover:underline">Редактор</a>
              </td>
              <td class="py-2 pr-4">
                @if($row['in_cms'])
                  <a href="{{ $row['cms_edit_url'] }}" class="text-primary-600 hover:underline">Редактировать в CMS</a>
                @else
                  <a href="{{ $row['cms_create_url'] }}" class="text-primary-600 hover:underline">Создать в CMS</a>
                  <span class="ml-1 text-xs text-gray-500">(перенесите контент из Blade в блоки)</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-filament::section>
</x-filament-widgets::widget>
