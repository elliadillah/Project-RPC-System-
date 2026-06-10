<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Participant;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Participant $participant)
    {
        return view(
            'payment.create',
            compact('participant')
        );
    }

    public function store(
        Request $request,
        Participant $participant
    )
    {
        $request->validate([
            'payment_proof' => 'required|image|max:2048'
        ]);

        $amount =
            $participant->category == '5K'
            ? 150000
            : 250000;

        $path = $request
            ->file('payment_proof')
            ->store(
                'payments',
                'public'
            );

        Payment::create([

            'participant_id' => $participant->id,

            'amount' => $amount,

            'payment_proof' => $path,

            'payment_status' => 'pending'
        ]);

        return redirect(
            '/confirmation/' .
            $participant->id
        );
    }
}