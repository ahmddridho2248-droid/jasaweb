<?php

namespace App\Filament\Resources\PaketJasas\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PaketJasasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_paket')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('harga')
                    ->money('idr')
                    ->sortable(),
                TextColumn::make('estimasi_hari')
                    ->numeric()
                    ->sortable()
                    ->suffix(' Hari'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
