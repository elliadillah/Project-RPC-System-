@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center">

    <div class="bg-white p-10 rounded-xl shadow text-center">

        <h1 class="text-4xl font-bold text-green-600">
            Registration Success
        </h1>

        <p class="mt-4">
            Registration Code:
        </p>

        <h2 class="text-3xl font-bold mt-2">
            {{ $participant->registration_code }}
        </h2>

        <p class="mt-6">
            BIB Number:
        </p>

        <h3 class="text-2xl font-semibold">
            {{ $participant->bib_number }}
        </h3>

    </div>

</div>

@endsection