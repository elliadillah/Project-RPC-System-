<?php

namespace App\Filament\Resources\Racepacks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RacepackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('participant_id')
                    ->required()
                    ->numeric(),
                TextInput::make('bib_number')
                    ->required(),
                TextInput::make('jersey_size')
                    ->required(),
                Select::make('pickup_status')
                    ->options(['not_taken' => 'Not taken', 'taken' => 'Taken'])
                    ->default('not_taken')
                    ->required(),
                DateTimePicker::make('pickup_time'),
                TextInput::make('handover_by')
                    ->numeric()
                    ->default(null),
            ]);
    }
}
