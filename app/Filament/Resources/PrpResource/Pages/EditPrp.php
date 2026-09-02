<?php

namespace App\Filament\Resources\PrpResource\Pages;

use App\Filament\Resources\PrpResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrp extends EditRecord
{
    protected static string $resource = PrpResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
