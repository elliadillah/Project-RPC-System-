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
                TextColumn::make('participant_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('bib_number')
                    ->searchable(),
                TextColumn::make('jersey_size')
                    ->searchable(),
                TextColumn::make('pickup_status')
                    ->badge(),
                TextColumn::make('pickup_time')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('handover_by')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
