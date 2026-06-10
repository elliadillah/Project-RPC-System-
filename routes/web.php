<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\RacepackController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [RegistrationController::class, 'create'])
    ->name('register');

Route::post('/register', [RegistrationController::class, 'store'])
    ->name('register.store');

Route::get('/registration-success/{id}', function ($id) {

    $participant = \App\Models\Participant::findOrFail($id);

    return view(
        'registration.success',
        compact('participant')
    );

})->name('registration.success');

Route::get(
    '/payment/{participant}',
    [PaymentController::class, 'show']
);

Route::post(
    '/payment/{participant}',
    [PaymentController::class, 'store']
);

Route::get(
    '/confirmation/{participant}',
    [ConfirmationController::class, 'show']
);

Route::get(
    '/racepack',
    [RacepackController::class, 'index']
);

Route::post(
    '/racepack/search',
    [RacepackController::class, 'search']
);

Route::post(
    '/racepack/handover/{id}',
    [RacepackController::class, 'handover']
);

Route::get(
    '/report',
    [ReportController::class, 'index']
);