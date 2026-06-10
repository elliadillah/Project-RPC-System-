@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto py-12">

    <h1
        class="text-3xl font-bold mb-6">

        Racepack Handover

    </h1>

    <form
        action="/racepack/search"
        method="POST">

        @csrf

        <input
            type="text"
            name="registration_code"
            placeholder="Input Registration Code"
            class="border p-3 rounded w-full">

        <button
            class="mt-4 bg-blue-500 text-white px-6 py-3 rounded">

            Search

        </button>

    </form>

    @isset($participant)

        <div
            class="bg-white shadow rounded p-6 mt-8">

            <h2 class="font-bold text-xl">

                Participant Data

            </h2>

            <p>
                Name:
                {{ $participant->full_name }}
            </p>

            <p>
                BIB Name:
                {{ $participant->bib_name }}
            </p>

            <p>
                Category:
                {{ $participant->category }}
            </p>

            <p>
                Jersey:
                {{ $participant->jersey_size }}
            </p>

            <p>
                Status:
                {{ $participant->racepack->pickup_status }}
            </p>

            @if(
                $participant->racepack->pickup_status
                == 'not_taken'
            )

                <form
                    action="/racepack/handover/{{ $participant->id }}"
                    method="POST">

                    @csrf

                    <button
                        class="mt-4 bg-green-500 text-white px-6 py-3 rounded">

                        Handover Racepack

                    </button>

                </form>

            @endif

        </div>

    @endisset

</div>

@endsection