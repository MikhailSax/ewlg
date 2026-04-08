<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type')
                    ->required()
                    ->disabled(),
                TextInput::make('name'),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->disabled(),
                TextInput::make('phone')
                    ->tel()
                    ->disabled(),
                Textarea::make('message')
                    ->columnSpanFull()
                    ->disabled(),
                Textarea::make('payload')
                    ->columnSpanFull()
                    ->formatStateUsing(fn ($state) => is_array($state) ? json_encode($state, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) : $state)
                    ->disabled(),
                Toggle::make('is_read')
                    ->required(),
            ]);
    }
}
