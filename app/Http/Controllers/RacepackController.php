<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class RacepackController extends Controller
{
    public function index()
    {
        return view('racepack.index');
    }

    public function search(Request $request)
    {
        $participant = Participant::where(
            'registration_code',
            $request->registration_code
        )->first();

        return view(
            'racepack.index',
            compact('participant')
        );
    }

    public function handover($id)
    {
        $participant = Participant::findOrFail($id);

        $participant->racepack->update([

            'pickup_status' => 'taken',

            'pickup_time' => now()
        ]);

        return back()
            ->with(
                'success',
                'Racepack successfully handed over'
            );
    }
}