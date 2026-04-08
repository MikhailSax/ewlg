<?php

namespace App\Filament\Resources\MediaLibrary\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('path')
                    ->label('Файл')
                    ->disk('public')
                    ->directory('media/library')
                    ->visibility('public')
                    ->preserveFilenames()
                    ->required()
                    ->maxSize(102_400)
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                        'image/gif',
                        'image/webp',
                        'image/svg+xml',
                        'image/avif',
                        'application/pdf',
                        'video/mp4',
                        'video/webm',
                    ])
                    ->helperText('До 100 МБ. Картинки, PDF, MP4/WebM.')
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->label('Подпись / заголовок')
                    ->maxLength(255),
                TextInput::make('alt')
                    ->label('Alt (для картинок)')
                    ->maxLength(255),
            ]);
    }
}
