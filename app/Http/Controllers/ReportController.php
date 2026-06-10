<?php

namespace App\Http\Controllers;

use App\Models\Participant;

class ReportController extends Controller
{
    public function index()
    {
        $participants = Participant::with([
            'payment',
            'racepack'
        ])->get();

        return view(
            'report.index',
            compact('participants')
        );
    }
}