<?php

namespace App\Filament\Widgets;

use App\Models\Pesanan;
use App\Models\Proyek;
use App\Models\Pembayaran;
use App\Models\PaketJasa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Pesanan', Pesanan::count())
                ->description('Jumlah seluruh pesanan')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('primary'),

            Stat::make('Proyek Berjalan', Proyek::where('persentase_progres', '<', 100)->count())
                ->description('Proyek yang belum selesai')
                ->descriptionIcon('heroicon-m-wrench-screwdriver')
                ->color('warning'),

            Stat::make('Total Pendapatan', 'Rp ' . number_format(Pembayaran::sum('jumlah_bayar'), 0, ',', '.'))
                ->description('Dari seluruh pembayaran')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('success'),

            Stat::make('Paket Jasa Aktif', PaketJasa::count())
                ->description('Total paket yang tersedia')
                ->descriptionIcon('heroicon-m-cube')
                ->color('info'),
        ];
    }
}
