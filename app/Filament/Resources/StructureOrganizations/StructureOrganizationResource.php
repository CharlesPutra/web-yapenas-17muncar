<?php

namespace App\Filament\Resources\StructureOrganizations;

use App\Filament\Resources\StructureOrganizations\Pages\CreateStructureOrganization;
use App\Filament\Resources\StructureOrganizations\Pages\EditStructureOrganization;
use App\Filament\Resources\StructureOrganizations\Pages\ListStructureOrganizations;
use App\Filament\Resources\StructureOrganizations\Pages\ViewStructureOrganization;
use App\Filament\Resources\StructureOrganizations\Schemas\StructureOrganizationForm;
use App\Filament\Resources\StructureOrganizations\Schemas\StructureOrganizationInfolist;
use App\Filament\Resources\StructureOrganizations\Tables\StructureOrganizationsTable;
use App\Models\StructureOrganization;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StructureOrganizationResource extends Resource
{
    protected static ?string $model = StructureOrganization::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_petugas';

    protected static string|\UnitEnum|null $navigationGroup = 'YAYASAN';

    public static function form(Schema $schema): Schema
    {
        return StructureOrganizationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StructureOrganizationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StructureOrganizationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStructureOrganizations::route('/'),
            'create' => CreateStructureOrganization::route('/create'),
            'view' => ViewStructureOrganization::route('/{record}'),
            'edit' => EditStructureOrganization::route('/{record}/edit'),
        ];
    }
}
