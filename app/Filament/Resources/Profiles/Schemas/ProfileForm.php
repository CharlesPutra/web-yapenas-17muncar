<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_yayasan')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->directory('profile')
                    ->required(),
                TextInput::make('motto')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('visi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('history')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
