<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\News;
use App\Models\Profile;
use App\Models\StructureOrganization;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Berita', News::count())
                ->description('Jumlah berita yang sudah dipublikasikan')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('success'),

            Stat::make('Total Profil', Profile::count())
                ->description('Data profil yang terdaftar')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('info'),

            Stat::make('Total Kontak', Contact::count())
                ->description('Pesan yang masuk melalui form kontak')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('warning'),

            Stat::make('Struktur Organisasi', StructureOrganization::count())
                ->description('Jumlah data struktur organisasi')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('primary'),
        ];
    }
}
