
@extends('layouts.product-layout')

@section('content')
<div class="lg:col-span-3">

                <div class="mb-4 flex items-center justify-between gap-3">
                    <p class="text-sm text-slate-500">
                        Showing
                        <span class="font-bold text-slate-900">
                            {{ isset($products) ? $products->count() : 6 }}
                        </span>
                        products
                    </p>

                    <button type="button"
                            id="mobile-filter-button"
                            class="inline-flex items-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold text-slate-700 lg:hidden">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor"
                             stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M4 6h16M7 12h10m-7 6h4"/>
                        </svg>
                        Filters
                    </button>
                </div>

                @php
                    // Sample products for the initial design.
                    $sampleProducts = [
                        ['name' => 'Premium Wireless Headphones', 'price' => 3299, 'old_price' => 4299, 'image' => 'photo-1505740420928-5e560c06d30e', 'category' => 'Electronics'],
                        ['name' => 'Smart Watch Series', 'price' => 7499, 'old_price' => 8999, 'image' => 'photo-1523275335684-37898b6baf30', 'category' => 'Electronics'],
                        ['name' => 'Classic Casual Sneakers', 'price' => 2499, 'old_price' => 3299, 'image' => 'photo-1542291026-7eec264c27ff', 'category' => 'Fashion'],
                        ['name' => 'Premium Laptop', 'price' => 89999, 'old_price' => 99999, 'image' => 'photo-1496181133206-80ce9b88a853', 'category' => 'Electronics'],
                        ['name' => 'Wireless Earbuds', 'price' => 2499, 'old_price' => 3199, 'image' => 'photo-1590658268037-6bf12165a8df', 'category' => 'Electronics'],
                        ['name' => 'Stylish Sunglasses', 'price' => 1499, 'old_price' => 1999, 'image' => 'photo-1511499767150-a48a237f0083', 'category' => 'Accessories'],
                    ];
                @endphp

                <div class="grid grid-cols-2 gap-3 sm:grid-cols-2 xl:grid-cols-3">
                    @if(isset($products) && $products->count())
                        @foreach($products as $product)
                            <x-home.product-card :product="$product" />
                        @endforeach
                    @else
                        @foreach($sampleProducts as $product)
                            <x-home.product-card :product="$product" />
                        @endforeach
                    @endif
                </div>

                <div class="mt-8 flex justify-center">
                    <a href="#"
                       class="rounded-xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-600 transition hover:border-sky-500 hover:text-sky-700">
                        Load More Products
                    </a>
                </div>
            </div>

@endsection
