<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            👋 Welcome Back, {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <!-- Main Card -->
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

                <!-- Top Section -->
                <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-8 text-white text-center">
                    <h3 class="text-3xl font-bold mb-2">
                        🎉 You're Logged In!
                    </h3>
                    <p class="text-indigo-100">
                        Welcome to your dashboard. Manage everything from here.
                    </p>
                </div>

                <!-- Content Section -->
                <div class="p-8 text-center">

                    <!-- Action Button -->
                    <a target="_blank" href="{{ url('/generate-sso-token') }}"
                       class="inline-block px-8 py-3 bg-indigo-600  font-semibold rounded-full shadow-lg hover:bg-indigo-700 hover:scale-105 transform transition duration-300">
                        🍔 Go To Foodpanda
                    </a>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>