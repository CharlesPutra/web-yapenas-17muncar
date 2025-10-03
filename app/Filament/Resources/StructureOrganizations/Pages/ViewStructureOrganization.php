<?php

namespace App\Filament\Resources\StructureOrganizations\Pages;

use App\Filament\Resources\StructureOrganizations\StructureOrganizationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStructureOrganization extends ViewRecord
{
    protected static string $resource = StructureOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
