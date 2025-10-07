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
                    ->directory('structure')
                    ->disk('public')
                    ->visibility('public')
                    ->required(),
                TextInput::make('contact')
                    ->required(),
            ]);
    }
}
