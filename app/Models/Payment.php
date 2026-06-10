<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [

        'participant_id',
        'amount',
        'payment_proof',
        'payment_status',
        'verified_by',
        'verified_at'
    ];

    public function participant()
    {
        return $this->belongsTo(
            Participant::class
        );
    }

    protected static function booted()
    {
    static::updated(function ($payment) {

        if (
            $payment->payment_status === 'verified'
        ) {

            $payment->participant->update([
                'participant_status' => 'active'
            ]);
        }

    });
    }
}