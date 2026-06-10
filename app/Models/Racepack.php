<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Racepack extends Model
{
    protected $fillable = [

        'participant_id',
        'bib_number',
        'jersey_size',
        'pickup_status',
        'pickup_time',
        'handover_by'
    ];

    public function participant()
    {
        return $this->belongsTo(
            Participant::class
        );
    }
}