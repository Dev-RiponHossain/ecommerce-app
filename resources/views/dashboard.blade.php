<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🛒 Ecommerce Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">
                        Welcome, {{ Auth::user()->name }}! 👋
                    </h3>
                    <p class="text-gray-600">You are logged in to <strong>Ecommerce App</strong></p>
                </div>
            </div>

            <!-- SSO Button Card -->
            <div class="bg-gradient-to-r from-red-500 to-orange-400 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-white">
                    <h3 class="text-xl font-bold mb-2">🍕 Go to Foodpanda</h3>
                    <p class="mb-4 opacity-90">Click below to automatically login to Foodpanda — no password needed!</p>
                    <a href="{{ route('sso.redirect') }}" 
                       class="inline-block bg-white text-red-500 font-bold px-6 py-3 rounded-lg hover:bg-gray-100 transition">
                        🚀 Auto Login to Foodpanda
                    </a>
                </div>
            </div>

            <!-- Product Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['name' => 'Laptop Pro', 'price' => '$999', 'emoji' => '💻'],
                    ['name' => 'Smartphone X', 'price' => '$699', 'emoji' => '📱'],
                    ['name' => 'Headphones', 'price' => '$199', 'emoji' => '🎧'],
                ] as $product)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-center">
                        <div class="text-5xl mb-3">{{ $product['emoji'] }}</div>
                        <h4 class="font-bold text-gray-800 text-lg">{{ $product['name'] }}</h4>
                        <p class="text-green-600 font-bold text-xl mt-1">{{ $product['price'] }}</p>
                        <button class="mt-3 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                            Add to Cart 🛒
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>