<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                            <p class="text-gray-600 mt-1">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="bg-green-100 rounded-lg p-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Total Orders</p>
                                <p class="text-2xl font-semibold text-gray-900">24</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="bg-green-100 rounded-lg p-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Wishlist</p>
                                <p class="text-2xl font-semibold text-gray-900">8</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="bg-green-100 rounded-lg p-3">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-500">Active Coupons</p>
                                <p class="text-2xl font-semibold text-gray-900">3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SSO Button -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex items-center justify-between flex-wrap gap-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Single Sign-On Access</h3>
                            <p class="text-gray-600 mt-1">Quick access to Foodpanda with SSO</p>
                        </div>
                        <a href="{{ route('sso.redirect') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Login to Foodpanda
                        </a>
                    </div>
                </div>
            </div>

            <!-- Featured Products -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">🔥 Featured Products</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow">
                            <div class="text-4xl mb-3">💻</div>
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold text-gray-900">Laptop Pro X</h4>
                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">Best Seller</span>
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl font-bold text-gray-900">$999</span>
                                <span class="text-sm text-gray-400 line-through">$1299</span>
                            </div>
                            <button class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition text-sm font-medium">
                                Add to Cart
                            </button>
                        </div>

                        <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow">
                            <div class="text-4xl mb-3">📱</div>
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold text-gray-900">Smartphone Ultra</h4>
                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">New</span>
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl font-bold text-gray-900">$699</span>
                                <span class="text-sm text-gray-400 line-through">$899</span>
                            </div>
                            <button class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition text-sm font-medium">
                                Add to Cart
                            </button>
                        </div>

                        <div class="border rounded-lg p-4 hover:shadow-lg transition-shadow">
                            <div class="text-4xl mb-3">📱</div>
                            <div class="flex items-center justify-between mb-2">
                                <h4 class="font-semibold text-gray-900">Smartphone</h4>
                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">New</span>
                            </div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl font-bold text-gray-900">$799</span>
                                <span class="text-sm text-gray-400 line-through">$999</span>
                            </div>
                            <button class="w-full bg-green-600 text-white py-2 px-4 rounded-md hover:bg-green-700 transition text-sm font-medium">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>