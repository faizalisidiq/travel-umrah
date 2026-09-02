<?php

namespace App\Filament\Resources\PrpResource\Pages;

use App\Filament\Resources\PrpResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrps extends ListRecords
{
    protected static string $resource = PrpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
