<x-layouts.buylayout title="Purchase Dashboard">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-800">Welcome back, {{ auth()->user()->name }}!</h1>
                <p class="text-gray-600">Manage your credits, view history, and start new purchases.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="text-sm font-medium text-gray-500 truncate">Current Balance</div>
                    <div class="mt-1 text-3xl font-semibold text-gray-900">$1,250.00</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="text-sm font-medium text-gray-500 truncate">Total Orders</div>
                    <div class="mt-1 text-3xl font-semibold text-gray-900">24</div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-yellow-500">
                    <div class="text-sm font-medium text-gray-500 truncate">Pending Invoices</div>
                    <div class="mt-1 text-3xl font-semibold text-gray-900">2</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-6">
                    <div class="bg-white shadow-sm sm:rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-4">Available Packages</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="border rounded-xl p-4 hover:border-indigo-500 transition cursor-pointer group">
                                <h3 class="font-bold text-gray-700">Starter Pack</h3>
                                <p class="text-sm text-gray-500 mb-4">Perfect for individual testing.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">$49.00</span>
                                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm group-hover:bg-indigo-700">Buy Now</button>
                                </div>
                            </div>
                            
                            <div class="border rounded-xl p-4 hover:border-indigo-500 transition cursor-pointer group">
                                <h3 class="font-bold text-gray-700">Business Pro</h3>
                                <p class="text-sm text-gray-500 mb-4">Bulk credits for growing teams.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold">$199.00</span>
                                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm group-hover:bg-indigo-700">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-white shadow-sm sm:rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-4">Recent Transactions</h2>
                        <ul class="divide-y divide-gray-200">
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Pro Plan</p>
                                    <p class="text-xs text-gray-500">March 05, 2026</p>
                                </div>
                                <span class="text-green-600 font-semibold text-sm">+$199.00</span>
                            </li>
                            <li class="py-3 flex justify-between items-center">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Credits Refill</p>
                                    <p class="text-xs text-gray-500">March 01, 2026</p>
                                </div>
                                <span class="text-green-600 font-semibold text-sm">+$50.00</span>
                            </li>
                        </ul>
                        <a href="#" class="block mt-4 text-center text-sm font-medium text-indigo-600 hover:text-indigo-500">View All History</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layouts.buylayout>