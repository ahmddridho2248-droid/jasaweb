<?php

namespace App\Filament\Resources\Pesanans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PesananForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('id_paket')
                    ->required()
                    ->numeric(),
                TextInput::make('permintaan_nama_domain')
                    ->required(),
                Textarea::make('deskripsi_kebutuhan')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status_pesanan')
                    ->options([
            'menunggu' => 'Menunggu',
            'diproses' => 'Diproses',
            'selesai' => 'Selesai',
            'dibatalkan' => 'Dibatalkan',
        ])
                    ->default('menunggu')
                    ->required(),
                DatePicker::make('tanggal_pesanan')
                    ->required(),
            ]);
    }
}
