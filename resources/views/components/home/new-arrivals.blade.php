
<section class="mx-auto mt-8 max-w-[1600px] px-3 sm:px-6">

    {{-- Section Heading --}}
    <div class="mb-5 flex items-center justify-between">
        <div>
            <p class="text-xs font-bold uppercase tracking-widest text-sky-600">
                Just Landed
            </p>

            <h2 class="mt-1 text-xl font-extrabold text-slate-900 sm:text-2xl">
                New Arrivals
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Discover the latest products added to our store.
            </p>
        </div>

        <a href="#new-arrival-products"
           class="flex shrink-0 items-center gap-1 text-sm font-bold text-sky-600 transition hover:text-sky-800">
            View All

            {{-- Heroicon: Arrow Right --}}
            <svg class="h-4 w-4"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2"
                 viewBox="0 0 24 24"
                 aria-hidden="true">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
            </svg>
        </a>
    </div>

    {{-- New Arrival Products --}}
    @php
        $newArrivals = [
            [
                'name' => 'Premium Wireless Headphones',
                'price' => 3299,
                'old_price' => 4299,
                'discount' => 23,
                'image' => 'photo-1505740420928-5e560c06d30e',
            ],
            [
                'name' => 'Latest Smartphone',
                'price' => 34999,
                'old_price' => 39999,
                'discount' => 13,
                'image' => 'photo-1511707171634-5f897ff02aa9',
            ],
            [
                'name' => 'Smart Watch Series',
                'price' => 7499,
                'old_price' => 8999,
                'discount' => 17,
                'image' => 'photo-1523275335684-37898b6baf30',
            ],
            [
                'name' => 'Digital Camera',
                'price' => 55999,
                'old_price' => 62999,
                'discount' => 11,
                'image' => 'photo-1516035069371-29a1b244cc32',
            ],
            [
                'name' => 'Premium Laptop',
                'price' => 89999,
                'old_price' => 99999,
                'discount' => 10,
                'image' => 'photo-1496181133206-80ce9b88a853',
            ],
            [
                'name' => 'Wireless Earbuds',
                'price' => 2499,
                'old_price' => 3199,
                'discount' => 22,
                'image' => 'photo-1590658268037-6bf12165a8df',
            ],
            [
                'name' => 'Wireless Earbuds',
                'price' => 2499,
                'old_price' => 3199,
                'discount' => 22,
                'image' => 'photo-1590658268037-6bf12165a8df',
            ],
        ];
    @endphp

    <div id="new-arrival-products"
         class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">

        @foreach($newArrivals as $product)
            <div class="relative">
                {{-- New Badge --}}
                
                <x-home.product-card :product="$product" />
            </div>
        @endforeach

    </div>

</section>