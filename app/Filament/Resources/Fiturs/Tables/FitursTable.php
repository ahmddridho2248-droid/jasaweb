<?php

namespace App\Filament\Resources\Fiturs\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FitursTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_fitur')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('deskripsi_fitur')
                    ->limit(50)
                    ->searchable(),
            ]);
    }
}
