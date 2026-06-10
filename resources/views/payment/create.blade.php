@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100">

    <div class="max-w-2xl mx-auto py-12">

        <div class="bg-white p-8 rounded-xl shadow">

            <h1 class="text-3xl font-bold mb-6">
                Payment
            </h1>

            <div class="mb-6">

                <p>
                    Category:
                    <strong>
                        {{ $participant->category }}
                    </strong>
                </p>

                <p>
                    Amount:
                    <strong>
                        Rp
                        {{ number_format(
                            $participant->category == '5K'
                            ? 150000
                            : 250000
                        ) }}
                    </strong>
                </p>

            </div>

            <form
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <input
                    type="file"
                    name="payment_proof"
                    class="w-full border p-3 rounded">

                <button
                    class="mt-6 bg-orange-500 text-white px-6 py-3 rounded">

                    Upload Payment

                </button>

            </form>

        </div>

    </div>

</div>

@endsection