@extends('layouts.app')

@section('content')

<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between">

        <h1 class="text-2xl font-bold text-orange-500">
            RunFest 2026
        </h1>

        <div class="space-x-6">
            <a href="#" class="hover:text-orange-500">Home</a>
            <a href="#" class="hover:text-orange-500">About</a>
            <a href="#" class="hover:text-orange-500">Category</a>

            <a
                href="/register"
                class="bg-orange-500 text-white px-4 py-2 rounded-lg"
            >
                Register
            </a>
        </div>
    </div>
</nav>

<section class="bg-gradient-to-r from-orange-500 to-red-500 text-white">

    <div class="max-w-7xl mx-auto px-6 py-24">

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <div>

                <p class="uppercase tracking-widest">
                    Running Event
                </p>

                <h1 class="text-6xl font-bold mt-4">
                    RunFest 2026
                </h1>

                <p class="mt-6 text-xl">
                    Join thousands of runners and challenge yourself.
                </p>

                <div class="mt-8">

                    <a
                        href="/register"
                        class="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold"
                    >
                        Register Now
                    </a>

                </div>

            </div>

            <div>

                <img
                    src="https://images.unsplash.com/photo-1552674605-db6ffd4facb5"
                    class="rounded-2xl shadow-lg"
                >

            </div>

        </div>

    </div>

</section>

<section class="py-20">

    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-4xl font-bold text-center">
            Event Categories
        </h2>

        <div class="grid md:grid-cols-2 gap-8 mt-10">

            <div class="bg-white p-8 rounded-xl shadow">

                <h3 class="text-2xl font-bold">
                    5K Fun Run
                </h3>

                <p class="mt-4 text-gray-600">
                    Suitable for beginners.
                </p>

            </div>

            <div class="bg-white p-8 rounded-xl shadow">

                <h3 class="text-2xl font-bold">
                    10K Challenge
                </h3>

                <p class="mt-4 text-gray-600">
                    Challenge your endurance.
                </p>

            </div>

        </div>

    </div>

</section>

<section class="bg-white py-20">

    <div class="max-w-6xl mx-auto">

        <h2 class="text-center text-4xl font-bold">
            Statistics
        </h2>

        <div class="grid md:grid-cols-3 gap-6 mt-10">

            <div class="bg-orange-50 p-8 rounded-xl text-center">
                <h3 class="text-5xl font-bold">
                    {{ $participants }}
                </h3>

                <p>Total Participants</p>
            </div>

            <div class="bg-orange-50 p-8 rounded-xl text-center">
                <h3 class="text-5xl font-bold">
                    500
                </h3>

                <p>Target Runners</p>
            </div>

            <div class="bg-orange-50 p-8 rounded-xl text-center">
                <h3 class="text-5xl font-bold">
                    2
                </h3>

                <p>Categories</p>
            </div>

        </div>

    </div>

</section>

<footer class="bg-gray-900 text-white py-8">

    <div class="max-w-6xl mx-auto px-6">

        <p class="text-center">
            © 2026 RunFest. All rights reserved.
        </p>

    </div>

</footer>

@endsection