<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ConfirmationController extends Controller
{
    public function show(
        Participant $participant
    )
    {
        return view(
            'confirmation.show',
            compact('participant')
        );
    }
}