<?php

namespace App\Filament\Resources\Pembayarans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PembayaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('id_pesanan')
                    ->required()
                    ->numeric(),
                TextInput::make('jumlah_bayar')
                    ->required()
                    ->numeric(),
                TextInput::make('metode_pembayaran')
                    ->required(),
                TextInput::make('bukti_pembayaran')
                    ->default(null),
                Toggle::make('apakah_diverifikasi')
                    ->required(),
            ]);
    }
}
