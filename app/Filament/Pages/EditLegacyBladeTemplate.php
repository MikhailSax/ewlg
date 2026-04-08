<?php

namespace App\Filament\Pages;

use App\Support\LegacyBladeTemplate;
use App\Support\LegacySitePages;
use Filament\Actions\Action;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Actions as FormActions;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Alignment;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Artisan;
use UnitEnum;

class EditLegacyBladeTemplate extends Page
{
    protected static ?string $slug = 'blade-templates';

    protected static ?string $navigationLabel = 'Шаблоны Blade';

    protected static string|UnitEnum|null $navigationGroup = 'Сайт';

    protected static ?int $navigationSort = 15;

    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCodeBracket;

    /**
     * @var array<string, mixed>|null
     */
    public ?array $data = [];

    public function mount(): void
    {
        $this->fillForm();
    }

    protected function fillForm(): void
    {
        $legacy = LegacySitePages::legacyViewBySlug();
        $slug = request()->query('slug');
        if (! is_string($slug) || $slug === '' || ! array_key_exists($slug, $legacy)) {
            $slug = array_key_first($legacy) ?: 'home';
        }

        $this->form->fill([
            'slug' => $slug,
            'content' => LegacyBladeTemplate::read($slug) ?? '',
        ]);
    }

    public function save(): void
    {
        $data = $this->form->getState();
        $slug = $data['slug'] ?? null;
        $content = $data['content'] ?? '';

        if (! is_string($slug) || $slug === '') {
            Notification::make()->danger()->title('Выберите страницу')->send();

            return;
        }

        if (! is_string($content)) {
            $content = '';
        }

        try {
            LegacyBladeTemplate::write($slug, $content);
        } catch (\Throwable $e) {
            Notification::make()
                ->danger()
                ->title('Не удалось сохранить')
                ->body($e->getMessage())
                ->send();

            return;
        }

        Artisan::call('view:clear');

        Notification::make()
            ->success()
            ->title('Шаблон сохранён')
            ->body('Кэш представлений очищен. Проверьте сайт.')
            ->send();
    }

    public function defaultForm(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->statePath('data');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('slug')
                    ->label('Страница')
                    ->options(
                        collect(LegacySitePages::rows())
                            ->mapWithKeys(fn (array $row): array => [
                                $row['slug'] => $row['slug'].' — '.$row['blade_path'],
                            ])
                            ->all(),
                    )
                    ->required()
                    ->live()
                    ->helperText('Переключение страницы подставляет файл с диска; несохранённые правки в редакторе будут заменены.')
                    ->afterStateUpdated(function (Get $get, Set $set): void {
                        $s = $get('slug');
                        if (! is_string($s) || $s === '') {
                            return;
                        }
                        $set('content', LegacyBladeTemplate::read($s) ?? '');
                    }),
                CodeEditor::make('content')
                    ->label('Код Blade')
                    ->language(Language::Php)
                    ->columnSpanFull()
                    ->helperText('Осторожно: здесь исполняется PHP и Blade. Не вставляйте непроверенный код. Для контента без кода удобнее CMS-страницы с блоками.'),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getFormContentComponent(),
            ]);
    }

    public function getFormContentComponent(): Component
    {
        return Form::make([EmbeddedSchema::make('form')])
            ->id('form')
            ->livewireSubmitHandler('save')
            ->footer([
                FormActions::make([
                    Action::make('save')
                        ->label('Сохранить')
                        ->submit('save')
                        ->keyBindings(['mod+s']),
                ])
                    ->alignment(Alignment::End),
            ]);
    }

    public function getTitle(): string|Htmlable
    {
        return 'Редактирование Blade-шаблонов';
    }

    public static function canAccess(): bool
    {
        return auth()->check();
    }
}
