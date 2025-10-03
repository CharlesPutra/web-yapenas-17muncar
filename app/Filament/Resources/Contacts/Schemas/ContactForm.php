<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('whatsapp')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                Textarea::make('map_link')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
