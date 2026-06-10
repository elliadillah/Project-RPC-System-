<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Models\Racepack;

class Participant extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'nik',
        'age',
        'category',
        'jersey_size',
        'bib_number',
        'registration_code',
        'status'
    ];

    public function payment()
    {
        return $this->hasOne(
            Payment::class
        );
    }

    public function racepack()
    {
        return $this->hasOne(
            Racepack::class
        );
    }
}