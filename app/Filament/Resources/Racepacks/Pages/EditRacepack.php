<?php

namespace App\Filament\Resources\Racepacks\Pages;

use App\Filament\Resources\Racepacks\RacepackResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRacepack extends EditRecord
{
    protected static string $resource = RacepackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
