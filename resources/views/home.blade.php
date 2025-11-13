@extends('layouts.app')

@section('title', 'Tangerine Furniture - Quality Furniture Store in Kenya')
@section('description', 'Shop quality furniture in Kenya. Find dining sets, beds, sofas, coffee tables and more at Tangerine Furniture. Fast delivery and excellent customer service.')
@section('keywords', 'furniture Kenya, dining sets Nairobi, beds Kenya, sofas Kenya, furniture store, Tangerine Furniture, online furniture shop')
@section('og_title', 'Tangerine Furniture - Quality Furniture Store in Kenya')
@section('og_description', 'Shop quality furniture in Kenya. Find dining sets, beds, sofas, coffee tables and more at Tangerine Furniture.')
@section('og_type', 'website')
@section('og_image', asset('images/logo.svg'))

@section('structured_data')
@php
    $socialUrls = \App\Helpers\SocialMediaHelper::getSameAsArray();
    $sameAsJson = '';
    if (!empty($socialUrls)) {
        $sameAsJson = '"' . implode('","', $socialUrls) . '"';
    } else {
        $sameAsJson = '"https://example.com"';
    }
@endphp
{!! '<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Tangerine Furniture",
    "url": "' . url('/') . '",
    "logo": "' . asset('images/logo.svg') . '",
    "description": "Your trusted source for quality furniture in Kenya",
    "address": {
        "@type": "PostalAddress",
        "addressCountry": "KE",
        "addressLocality": "Nairobi"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service"
    },
    "sameAs": [
        ' . $sameAsJson . '
    ]
}
</script>' !!}

{!! '<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Tangerine Furniture",
    "url": "' . url('/') . '",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "' . url('/products') . '?search={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>' !!}
@endsection

@section('content')
    <!-- Full Screen Hero Banner -->
    <section class="relative h-[50vh] bg-gray-900 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            @if($diningProducts->count() > 0)
                <img src="{{ $diningProducts->first()->main_image_url }}" alt="Dining Room" class="w-full h-full object-cover">
            @else
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Dining Room" class="w-full h-full object-cover">
            @endif
            <div class="absolute inset-0 hero-overlay"></div>
        </div>
        
        <!-- Hero Content -->
        <div class="absolute bottom-8 w-full text-white z-10 justify-center items-center flex flex-col">
            <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Dining Room</h2>
                    <a href="{{ route('products.index', ['category' => 'dining']) }}" class="btn-yellow-border inline-block px-6 py-3 font-semibold">
                        View more
                    </a>
        </div>
        </div>
    </section>

    <!-- Product Categories Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Product Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Beds -->
                <div class="text-center aspect-[3/2] relative">
                    <div class="relative h-full  bg-gray-200 rounded-lg overflow-hidden mb-4">
                        @if($bedProducts->count() > 0)
                            <img src="{{ $bedProducts->first()->main_image_url }}" alt="Beds" class="w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Beds" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class=" absolute inset-0 flex w-full h-full items-center justify-center flex-col">
                    <h3 class="text-xl font-semibold text-gray-100 border-2 px-6 py-2 border-yellow-400">Bed</h3>
                    </div>
                </div>

                <div class="text-center aspect-[3/2] relative">
                    <div class="relative h-full  bg-gray-200 rounded-lg overflow-hidden mb-4">
                        @if($bedProducts->count() > 0)
                            <img src="{{ $sofaProducts->first()->main_image_url }}" alt="Beds" class="w-full h-full object-cover">
                        @else
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Sofa" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class=" absolute inset-0 flex w-full h-full items-center justify-center flex-col">
                    <h3 class="text-xl font-semibold text-gray-100 border-2 px-6 py-2 border-yellow-400">Sofa</h3>
                    </div>
                </div>
                <div class="text-center aspect-[3/2] relative">
                    <div class="relative h-full  bg-gray-200 rounded-lg overflow-hidden mb-4">
                        @if($bedProducts->count() > 0)
                            <img src="{{ $coffeeTableProducts->first()->main_image_url }}" alt="Beds" class="w-full h-full object-cover">
                        @else
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Coffee Tables" class="w-full h-full object-cover">
                        @endif
                    </div>
                    <div class=" absolute inset-0 flex w-full h-full items-center justify-center flex-col">
                    <h3 class="text-xl font-semibold text-gray-100 border-2 px-6 py-2 border-yellow-400">Coffee tables</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem Solving Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">we are solving the biggest problems in furniture</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Fast Deliveries -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 feature-icon">
                        <i class="fas fa-truck text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Fast deliveries</h3>
                    <p class="text-gray-600">Same day deliveries within Nairobi for ready made orders.</p>
                </div>

                <!-- Function, Aesthetic Furniture -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 feature-icon">
                        <i class="fas fa-couch text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Function, aesthetic furniture</h3>
                    <p class="text-gray-600">We prioritize function and beauty on all our pieces, making them both usable and appealing.</p>
                </div>

                <!-- Durable, Premium Materials -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-4 feature-icon">
                        <i class="fas fa-tree text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Durable, premium materials</h3>
                    <p class="text-gray-600">Our raw materials are carefully picked to ensure they meet quality standards before use in the assembly process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Airbnb Furnishing Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Hero Airbnb Image -->
            <div class="relative mb-12">
                <div class="relative h-96 md:h-[500px] bg-gray-200 rounded-lg overflow-hidden">
                    @if($airbnbProducts->count() > 0)
                        <img src="{{ $airbnbProducts->first()->main_image_url }}" alt="Airbnb Furnishing" class="w-full h-full object-cover">
                    @else
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Airbnb Furnishing" class="w-full h-full object-cover">
                    @endif
                    <div class="absolute inset-0 hero-overlay"></div>
                    <div class="absolute bottom-8 left-8 text-white z-10">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">AIRBNB FURNISHING</h2>
                        <a href="{{ route('products.index', ['category' => 'airbnb']) }}" class="btn-yellow-border inline-block px-6 py-3 font-semibold">
                            Click Here
                        </a>
                    </div>
                </div>
            </div>

            <!-- Airbnb Categories Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Living Rooms -->
                <div class="relative category-card">
                    <div class="relative h-64 bg-gray-200 rounded-lg overflow-hidden">
                        @if($livingRoomProducts->count() > 0)
                            <img src="{{ $livingRoomProducts->first()->main_image_url }}" alt="Living Rooms" class="w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Living Rooms" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute bottom-4 left-4">
                            <a href="{{ route('products.index', ['category' => 'living-room']) }}" class="btn-blue-dark inline-block px-4 py-2 font-semibold">
                                SHOP LIVING ROOMS
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Wardrobe -->
                <div class="relative category-card">
                    <div class="relative h-64 bg-gray-200 rounded-lg overflow-hidden">
                        @if($wardrobeProducts->count() > 0)
                            <img src="{{ $wardrobeProducts->first()->main_image_url }}" alt="Wardrobe" class="w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Wardrobe" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute bottom-4 left-4">
                            <a href="{{ route('products.index', ['category' => 'wardrobe']) }}" class="btn-blue-dark inline-block px-4 py-2 font-semibold">
                                SHOP WARDROBE
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Dining -->
                <div class="relative category-card">
                    <div class="relative h-64 bg-gray-200 rounded-lg overflow-hidden">
                        @if($diningProducts->count() > 0)
                            <img src="{{ $diningProducts->first()->main_image_url }}" alt="Dining" class="w-full h-full object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2016&q=80" alt="Dining" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute bottom-4 left-4">
                            <a href="{{ route('products.index', ['category' => 'dining']) }}" class="btn-blue-dark inline-block px-4 py-2 font-semibold">
                                SHOP DINING
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 