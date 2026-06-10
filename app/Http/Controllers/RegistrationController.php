<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Racepack;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email|unique:participants',
            'phone_number' => 'required',
            'nik' => 'required|min:16|max:16',
            'age' => 'required|integer|min:12',
            'category' => 'required',
            'jersey_size' => 'required'
        ]);

        $participant = Participant::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'nik' => $request->nik,
            'age' => $request->age,
            'category' => $request->category,
            'jersey_size' => $request->jersey_size,
            'bib_number' => rand(1000,9999),
            'registration_code' => strtoupper(Str::random(8)),
            'status' => 'Pending'
        ]);

        Racepack::create([

        'participant_id' => $participant->id,

        'bib_number' => $participant->bib_number,

        'jersey_size' => $participant->jersey_size,

        'pickup_status' => 'not_taken'
        ]);

        return redirect()
            ->route('registration.success', $participant->id);
    }
}