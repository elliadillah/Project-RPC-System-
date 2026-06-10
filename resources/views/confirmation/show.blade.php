@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-green-50">

    <div class="max-w-3xl mx-auto py-12">

        <div
            class="bg-white rounded-xl shadow p-8">

            <h1
                class="text-3xl font-bold text-green-600">

                Registration Submitted

            </h1>

            <div class="mt-6">

                <p>
                    Full Name:
                    {{ $participant->full_name }}
                </p>

                <p>
                    Category:
                    {{ $participant->category }}
                </p>

                <p>
                    BIB Number:
                    {{ $participant->bib_number }}
                </p>

                <p>
                    Registration Code:
                    {{ $participant->registration_code }}
                </p>

                <p>
                    Status:
                    Pending Payment Verification
                </p>

            </div>

        </div>

    </div>

</div>

@endsection