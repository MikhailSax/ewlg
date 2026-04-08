<?php

namespace App\Filament\Resources\MediaLibrary\Tables;

use App\Models\Media;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Str;
use Filament\Tables\Table;

class MediaLibraryTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),
                TextColumn::make('thumb')
                    ->label('Превью')
                    ->html()
                    ->state(fn (Media $r): string => $r->isImage()
                        ? '<img src="'.e($r->getUrl()).'" alt="" class="h-12 w-12 rounded object-cover border border-gray-200 dark:border-white/10" loading="lazy">'
                        : '<span class="text-xs text-gray-500">'.e(Str::before($r->mime_type, '/')).'</span>'),
                TextColumn::make('original_filename')
                    ->label('Файл')
                    ->searchable()
                    ->limit(40),
                TextColumn::make('mime_type')
                    ->label('Тип')
                    ->toggleable(),
                TextColumn::make('size')
                    ->label('Размер')
                    ->formatStateUsing(fn (int $state): string => $state >= 1_048_576
                        ? round($state / 1_048_576, 2).' МБ'
                        : round($state / 1024, 1).' КБ')
                    ->sortable(),
                TextColumn::make('public_url')
                    ->label('URL на сайт')
                    ->state(fn (Media $record): string => $record->getUrl())
                    ->copyable()
                    ->copyMessage('Скопировано')
                    ->limit(40),
                TextColumn::make('title')
                    ->label('Подпись')
                    ->searchable()
                    ->placeholder('—'),
                TextColumn::make('created_at')
                    ->label('Загружено')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
