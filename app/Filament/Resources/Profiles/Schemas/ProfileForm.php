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
                    ->disk('public') // gunakan disk public
                    ->directory('profile') // folder di storage/app/public
                    ->visibility('public') // pastikan bisa diakses
                    ->imageEditor() // opsional: aktifkan editor bawaan Filament
                    ->downloadable() // tampilkan tombol download
                    ->openable() // tampilkan tombol open image
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
