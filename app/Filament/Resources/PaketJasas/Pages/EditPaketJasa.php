<?php

namespace App\Filament\Resources\PaketJasas\Pages;

use App\Filament\Resources\PaketJasas\PaketJasaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPaketJasa extends EditRecord
{
    protected static string $resource = PaketJasaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
