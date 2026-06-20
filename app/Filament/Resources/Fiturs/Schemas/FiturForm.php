<?php

namespace App\Filament\Resources\Fiturs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FiturForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_fitur')
                    ->required()
                    ->maxLength(255),
                Textarea::make('deskripsi_fitur')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
