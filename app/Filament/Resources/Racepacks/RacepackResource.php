<?php

namespace App\Filament\Resources\Racepacks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RacepacksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('participant.full_name')
                    ->label('Participant')
                    ->searchable(),

                TextColumn::make('bib_number')
                    ->label('BIB Number')
                    ->searchable(),

                TextColumn::make('jersey_size')
                    ->label('Jersey Size'),

                TextColumn::make('pickup_status')
                    ->badge()
                    ->label('Pickup Status'),

                TextColumn::make('pickup_time')
                    ->dateTime()
                    ->label('Pickup Time'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}