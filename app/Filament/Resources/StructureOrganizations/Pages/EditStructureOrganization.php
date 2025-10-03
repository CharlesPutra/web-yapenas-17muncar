<?php

namespace App\Filament\Resources\StructureOrganizations\Pages;

use App\Filament\Resources\StructureOrganizations\StructureOrganizationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStructureOrganization extends EditRecord
{
    protected static string $resource = StructureOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
