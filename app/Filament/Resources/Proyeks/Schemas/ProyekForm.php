<?php

namespace App\Filament\Resources\Proyeks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProyekForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_pesanan')
                    ->required()
                    ->numeric(),
                TextInput::make('id_pekerja')
                    ->numeric()
                    ->default(null),
                TextInput::make('tautan_repositori')
                    ->default(null),
                Textarea::make('deskripsi_progres')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('persentase_progres')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
