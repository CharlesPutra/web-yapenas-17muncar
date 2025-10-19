<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul_berita')
                    ->required(),
                TextInput::make('slug')
                    ->unique(ignoreRecord: true)
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('thumbnail')
                    ->label('Gambar')
                    ->image()
                    ->disk('public') // gunakan disk public
                    ->directory('news') // folder di storage/app/public
                    ->visibility('public') // pastikan bisa diakses
                    ->imageEditor() // opsional: aktifkan editor bawaan Filament
                    ->downloadable() // tampilkan tombol download
                    ->openable() // tampilkan tombol open image
                    ->required(),
                DateTimePicker::make('published_at')
                    ->required(),
            ]);
    }
}
