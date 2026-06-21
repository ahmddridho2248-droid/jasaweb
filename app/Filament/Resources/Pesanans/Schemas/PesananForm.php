<?php

namespace App\Filament\Resources\Pesanans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class PesananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_klien')
                    ->label('Nama Klien')
                    ->required()
                    ->maxLength(255),
                Select::make('id_paket')
                    ->relationship('paketJasa', 'nama_paket')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('permintaan_nama_domain')
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('deskripsi_kebutuhan')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status_pesanan')
                    ->options([
                        'menunggu'   => 'Menunggu',
                        'diproses'   => 'Diproses',
                        'selesai'    => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                    ])
                    ->required()
                    ->default('menunggu'),
                DatePicker::make('tanggal_pesanan')
                    ->required()
                    ->default(now()),
            ]);
    }
}
