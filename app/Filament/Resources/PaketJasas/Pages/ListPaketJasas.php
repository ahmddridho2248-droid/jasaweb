<?php

namespace App\Filament\Resources\PaketJasas\Pages;

use App\Filament\Resources\PaketJasas\PaketJasaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPaketJasas extends ListRecords
{
    protected static string $resource = PaketJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
