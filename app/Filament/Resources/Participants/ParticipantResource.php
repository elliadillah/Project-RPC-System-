<?php

namespace App\Filament\Resources\Participants\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class ParticipantsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('email'),

                Tables\Columns\TextColumn::make('category'),

                Tables\Columns\TextColumn::make('bib_number'),

                Tables\Columns\TextColumn::make('participant_status')
                    ->badge(),
            ]);
    }
}