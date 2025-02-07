<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container py-4">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <!-- Right-Aligned Add Store Button -->
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('shopify.add') }}" class="btn btn-primary">Add New Store</a>
                    </div>

                    <!-- User's Shopify Stores -->
                    <h2 class="text-center mb-4">My Shopify Stores</h2>

                    @if ($shops->count() > 0)
                        <div class="row">
                            @foreach ($shops as $shop)
                                <div class="col-md-4 mb-4">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $shop->shop_name }}</h5>
                                            <a href="{{ $shop->shop_url }}" class="btn btn-primary"
                                                target="_blank">Visit Store</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">No Shopify stores connected yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
