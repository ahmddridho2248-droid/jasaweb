<?php

namespace App\Filament\Resources\Pembayarans\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;

class PembayaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pesanan.id_pesanan')
                    ->label('ID Pesanan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jumlah_bayar')
                    ->money('idr')
                    ->sortable(),
                TextColumn::make('metode_pembayaran')
                    ->searchable(),
                IconColumn::make('apakah_diverifikasi')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
