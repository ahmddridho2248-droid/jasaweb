<?php

namespace App\Filament\Resources\Proyeks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class ProyekForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_pesanan')
                    ->relationship('pesanan', 'id_pesanan')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('id_pekerja')
                    ->relationship('pekerja', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('tautan_repositori')
                    ->url()
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('deskripsi_progres')
                    ->columnSpanFull()
                    ->default(null),
                TextInput::make('persentase_progres')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(100)
                    ->default(0)
                    ->suffix('%'),
            ]);
    }
}
