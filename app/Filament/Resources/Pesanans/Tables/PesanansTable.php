<?php

namespace App\Filament\Resources\Pesanans\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PesanansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id_pesanan')
                    ->label('ID Pesanan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name')
                    ->label('Klien')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('paketJasa.nama_paket')
                    ->label('Paket')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('permintaan_nama_domain')
                    ->searchable(),
                TextColumn::make('status_pesanan')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tanggal_pesanan')
                    ->date()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
