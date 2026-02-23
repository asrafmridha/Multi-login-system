<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-pink-600 leading-tight">
            🍔 Foodpanda Dashboard
        </h2> <br>
        <h2 class="font-bold text-2xl text-pink-600 leading-tight">
            <a target="_blank" href="{{ url('http://127.0.0.1:8000/dashboard') }}">Go To Ecommerce</a>
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-pink-50 via-white to-pink-100 py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Welcome Card -->
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="bg-gradient-to-r from-pink-500 to-pink-600 p-8 text-white text-center">
                    <h3 class="text-3xl font-bold mb-2">
                        🎉 You're Logged In!
                    </h3>
                    <p class="text-pink-100">
                        Welcome to your Foodpanda partner dashboard.
                    </p>
                </div>

                <div class="p-8 text-center">
                    <a href="#"
                       class="inline-block px-8 py-3 bg-pink-600 text-white font-semibold rounded-full shadow-lg hover:bg-pink-700 hover:scale-105 transform transition duration-300">
                        📦 View Orders
                    </a>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Total Orders -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-gray-600">Total Orders</h4>
                    <p class="text-3xl font-bold text-pink-600 mt-2">120</p>
                </div>

                <!-- Pending Orders -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-gray-600">Pending</h4>
                    <p class="text-3xl font-bold text-yellow-500 mt-2">8</p>
                </div>

                <!-- Completed Orders -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover:shadow-lg transition">
                    <h4 class="text-lg font-semibold text-gray-600">Completed</h4>
                    <p class="text-3xl font-bold text-green-500 mt-2">112</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>