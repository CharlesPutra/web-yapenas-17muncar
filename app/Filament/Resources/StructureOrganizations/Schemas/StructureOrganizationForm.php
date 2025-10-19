<?php

namespace App\Filament\Resources\StructureOrganizations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StructureOrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_petugas')
                    ->required(),
                TextInput::make('posisi')
                    ->required(),
                FileUpload::make('image')
                  ->image()
                    ->disk('public') // gunakan disk public
                    ->directory('structure') // folder di storage/app/public
                    ->visibility('public') // pastikan bisa diakses
                    ->imageEditor() // opsional: aktifkan editor bawaan Filament
                    ->downloadable() // tampilkan tombol download
                    ->openable() // tampilkan tombol open image
                    ->required(),
                TextInput::make('contact')
                    ->required(),
            ]);
    }
}
