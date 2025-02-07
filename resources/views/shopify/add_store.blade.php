<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="container">


                        <form action="{{ route('shopify.request') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="shop" class="form-label">Shopify Store Subdomain</label>
                                <input type="text" class="form-control" id="shop" name="shop"
                                    placeholder="your-store" required>
                                <div class="form-text">Enter your Shopify store subdomain (e.g., if your store URL is
                                    your-store.myshopify.com, enter 'your-store').</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Connect Store</button>
                        </form>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
