<?php

namespace App\Filament\Resources\Racepacks\Pages;

use App\Filament\Resources\Racepacks\RacepackResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRacepacks extends ListRecords
{
    protected static string $resource = RacepackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
