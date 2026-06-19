<?php

namespace App\Filament\Resources\PaketJasas;

use App\Filament\Resources\PaketJasas\Pages\CreatePaketJasa;
use App\Filament\Resources\PaketJasas\Pages\EditPaketJasa;
use App\Filament\Resources\PaketJasas\Pages\ListPaketJasas;
use App\Filament\Resources\PaketJasas\Schemas\PaketJasaForm;
use App\Filament\Resources\PaketJasas\Tables\PaketJasasTable;
use App\Models\PaketJasa;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PaketJasaResource extends Resource
{
    protected static ?string $model = PaketJasa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_paket';

    public static function form(Schema $schema): Schema
    {
        return PaketJasaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PaketJasasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPaketJasas::route('/'),
            'create' => CreatePaketJasa::route('/create'),
            'edit' => EditPaketJasa::route('/{record}/edit'),
        ];
    }
}
