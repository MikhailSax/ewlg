<?php

namespace App\Filament\Resources\WebPages\Schemas;

use App\Models\Media;
use App\Support\CmsBlockBody;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class WebPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->label('Ключ страницы')
                    ->required()
                    ->maxLength(191)
                    ->unique(table: 'pages', column: 'slug', ignoreRecord: true)
                    ->helperText('Совпадает с маршрутом: home, about, contacts, service-aviation и т.д.'),
                TextInput::make('title')
                    ->label('Название в админке')
                    ->maxLength(255),
                TextInput::make('meta_title')
                    ->label('Meta title')
                    ->maxLength(255),
                TextInput::make('meta_description')
                    ->label('Meta description')
                    ->maxLength(512),
                Toggle::make('is_published')
                    ->label('Опубликована')
                    ->default(false),
                Repeater::make('blocks')
                    ->label('Контент (блоки сверху вниз)')
                    ->addActionLabel('Добавить блок')
                    ->collapsible()
                    ->itemLabel(fn (array $state): ?string => match ($state['type'] ?? null) {
                        'hero' => 'Первый экран',
                        'heading' => 'Заголовок',
                        'text' => 'Текст (редактор)',
                        'html' => 'Расширенный текст',
                        'image' => 'Изображение',
                        'cta_strip' => 'Полоса CTA',
                        'spacer' => 'Отступ',
                        default => 'Блок',
                    })
                    ->schema([
                        Select::make('type')
                            ->label('Тип')
                            ->options([
                                'hero' => 'Первый экран (заголовок + кнопка)',
                                'heading' => 'Заголовок секции',
                                'text' => 'Текст (визуальный редактор)',
                                'html' => 'Расширенный текст, таблицы, картинки',
                                'image' => 'Изображение',
                                'cta_strip' => 'Жёлтая полоса с кнопкой',
                                'spacer' => 'Вертикальный отступ',
                            ])
                            ->required()
                            ->live(),
                        TextInput::make('heading')
                            ->label('Заголовок')
                            ->visible(fn (Get $get): bool => in_array($get('type'), ['hero', 'cta_strip'], true)),
                        Textarea::make('subheading')
                            ->label('Подзаголовок')
                            ->rows(3)
                            ->visible(fn (Get $get): bool => $get('type') === 'hero'),
                        TextInput::make('cta_label')
                            ->label('Текст кнопки (открывает заявку)')
                            ->visible(fn (Get $get): bool => $get('type') === 'hero'),
                        Select::make('level')
                            ->label('Уровень')
                            ->options([2 => 'H2', 3 => 'H3', 4 => 'H4'])
                            ->default(2)
                            ->visible(fn (Get $get): bool => $get('type') === 'heading'),
                        TextInput::make('headline')
                            ->label('Текст заголовка')
                            ->visible(fn (Get $get): bool => $get('type') === 'heading'),
                        RichEditor::make('body')
                            ->label(fn (Get $get): string => $get('type') === 'html'
                                ? 'Содержимое'
                                : 'Текст')
                            ->visible(fn (Get $get): bool => in_array($get('type'), ['text', 'html'], true))
                            ->columnSpanFull()
                            ->toolbarButtons(function (Get $get): array {
                                if ($get('type') === 'html') {
                                    return [
                                        ['bold', 'italic', 'underline', 'strike', 'link'],
                                        ['h2', 'h3', 'h4', 'paragraph'],
                                        ['alignStart', 'alignCenter', 'alignEnd'],
                                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                                        ['table', 'attachFiles', 'horizontalRule'],
                                        ['undo', 'redo'],
                                    ];
                                }

                                return [
                                    ['bold', 'italic', 'underline', 'link'],
                                    ['h2', 'h3', 'paragraph'],
                                    ['bulletList', 'orderedList'],
                                    ['blockquote', 'horizontalRule'],
                                    ['undo', 'redo'],
                                ];
                            })
                            ->fileAttachments(fn (Get $get): bool => $get('type') === 'html')
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('cms/pages')
                            ->fileAttachmentsVisibility('public')
                            ->formatStateUsing(function ($state, Get $get): array {
                                return CmsBlockBody::normalizeForRichEditor(
                                    $state,
                                    (string) ($get('type') ?? 'text'),
                                );
                            }),
                        Select::make('media_id')
                            ->label('Из медиатеки')
                            ->options(fn (): array => Media::query()->orderByDesc('id')->limit(400)->pluck('original_filename', 'id')->all())
                            ->searchable()
                            ->preload()
                            ->native(false)
                            ->helperText('Или загрузите файл ниже — при выборе из медиатеки загрузка не обязательна.')
                            ->visible(fn (Get $get): bool => $get('type') === 'image'),
                        FileUpload::make('image_path')
                            ->label('Загрузить изображение')
                            ->image()
                            ->disk('public')
                            ->directory('cms/pages')
                            ->visibility('public')
                            ->nullable()
                            ->visible(fn (Get $get): bool => $get('type') === 'image'),
                        TextInput::make('alt')
                            ->label('Alt')
                            ->visible(fn (Get $get): bool => $get('type') === 'image'),
                        TextInput::make('caption')
                            ->label('Подпись')
                            ->visible(fn (Get $get): bool => $get('type') === 'image'),
                        Textarea::make('text')
                            ->label('Текст')
                            ->rows(3)
                            ->columnSpanFull()
                            ->visible(fn (Get $get): bool => $get('type') === 'cta_strip'),
                        TextInput::make('button_label')
                            ->label('Текст кнопки')
                            ->visible(fn (Get $get): bool => $get('type') === 'cta_strip'),
                        TextInput::make('height')
                            ->label('Высота отступа (px)')
                            ->numeric()
                            ->default(32)
                            ->minValue(8)
                            ->maxValue(200)
                            ->visible(fn (Get $get): bool => $get('type') === 'spacer'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
