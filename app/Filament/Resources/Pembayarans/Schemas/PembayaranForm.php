<?php

namespace App\Filament\Resources\Pembayarans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class PembayaranForm
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
                TextInput::make('jumlah_bayar')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),
                TextInput::make('metode_pembayaran')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('bukti_pembayaran')
                    ->acceptedFileTypes(['application/pdf', 'image/*'])
                    ->maxSize(2048)
                    ->directory('bukti-pembayaran')
                    ->default(null),
                Toggle::make('apakah_diverifikasi')
                    ->required()
                    ->default(false),
            ]);
    }
}
