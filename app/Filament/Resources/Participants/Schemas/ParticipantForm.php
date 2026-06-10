<?php

namespace App\Filament\Resources\Participants\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ParticipantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->required(),

                TextInput::make('email')
                    ->email(),

                TextInput::make('phone_number'),

                TextInput::make('nik'),

                Select::make('category')
                    ->options([
                        '5K' => '5K',
                        '10K' => '10K',
                    ]),

                Select::make('participant_status')
                    ->options([
                        'pending' => 'Pending',
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),
            ]);
    }
}