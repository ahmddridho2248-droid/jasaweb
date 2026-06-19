<?php

namespace App\Filament\Resources\PaketJasas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PaketJasaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_paket')
                    ->required(),
                Textarea::make('deskripsi_paket')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                TextInput::make('estimasi_hari')
                    ->required()
                    ->numeric(),
            ]);
    }
}
