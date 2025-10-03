<?php

namespace App\Filament\Resources\StructureOrganizations\Pages;

use App\Filament\Resources\StructureOrganizations\StructureOrganizationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStructureOrganizations extends ListRecords
{
    protected static string $resource = StructureOrganizationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
