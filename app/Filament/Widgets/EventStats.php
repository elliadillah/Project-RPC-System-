<?php

namespace App\Filament\Widgets;

use App\Models\Participant;
use App\Models\Racepack;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EventStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make(
                'Participants',
                Participant::count()
            ),

            Stat::make(
                '5K Runners',
                Participant::where(
                    'category',
                    '5K'
                )->count()
            ),

            Stat::make(
                '10K Runners',
                Participant::where(
                    'category',
                    '10K'
                )->count()
            ),

            Stat::make(
                'Racepack Taken',
                Racepack::where(
                    'pickup_status',
                    'taken'
                )->count()
            ),
        ];
    }
}