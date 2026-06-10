@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-gray-100 py-12">

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow">

        <h1 class="text-3xl font-bold mb-8">
            Event Registration
        </h1>

        <form action="{{ route('register.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label>Full Name</label>

                <input
                    type="text"
                    name="full_name"
                    class="w-full border rounded p-3"
                >
            </div>

            <div class="mb-4">
                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    class="w-full border rounded p-3"
                >
            </div>

            <div class="mb-4">
                <label>Phone Number</label>

                <input
                    type="text"
                    name="phone_number"
                    class="w-full border rounded p-3"
                >
            </div>

            <div class="mb-4">
                <label>NIK</label>

                <input
                    type="text"
                    name="nik"
                    class="w-full border rounded p-3"
                >
            </div>

            <div class="mb-4">
                <label>Age</label>

                <input
                    type="number"
                    name="age"
                    class="w-full border rounded p-3"
                >
            </div>

            <div class="mb-4">
                <label>Category</label>

                <select
                    name="category"
                    class="w-full border rounded p-3"
                >
                    <option>5K</option>
                    <option>10K</option>
                </select>
            </div>

            <div class="mb-6">
                <label>Jersey Size</label>

                <select
                    name="jersey_size"
                    class="w-full border rounded p-3"
                >
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                </select>
            </div>

            <button
                class="w-full bg-orange-500 text-white py-3 rounded-lg"
            >
                Register
            </button>

        </form>

    </div>

</div>

@endsection