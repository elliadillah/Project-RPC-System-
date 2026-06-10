@extends('layouts.app')

@section('content')

<div class="p-10">

    <table class="table-auto w-full">

        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Payment</th>
                <th>Racepack</th>
            </tr>
        </thead>

        <tbody>

            @foreach($participants as $participant)

                <tr>
                    <td>
                        {{ $participant->full_name }}
                    </td>

                    <td>
                        {{ $participant->category }}
                    </td>

                    <td>
                        {{ $participant->payment?->payment_status }}
                    </td>

                    <td>
                        {{ $participant->racepack?->pickup_status }}
                    </td>
                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection