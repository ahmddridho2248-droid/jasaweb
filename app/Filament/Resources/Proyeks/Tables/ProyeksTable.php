<?php

namespace App\Filament\Resources\Proyeks\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProyeksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pesanan.id_pesanan')
                    ->label('ID Pesanan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('pekerja.name')
                    ->label('Pekerja')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tautan_repositori')
                    ->searchable(),
                TextColumn::make('persentase_progres')
                    ->numeric()
                    ->sortable()
                    ->suffix('%'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
