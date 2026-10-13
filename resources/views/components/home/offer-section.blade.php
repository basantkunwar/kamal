
<section class="mx-auto mt-6 max-w-[1600px] px-3 sm:px-6">

    <div class="overflow-hidden rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 p-5 text-white sm:p-7">
        <div class="flex flex-wrap items-center justify-between gap-4">

            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-100">
                    Limited Time Deals
                </p>

                <h2 class="mt-1 text-3xl font-black sm:text-4xl">
                    FLASH SALE
                </h2>

                <p class="mt-2 text-sm text-white/90">
                    Save more on your favourite electronics!
                </p>
            </div>

            <div class="flex items-center gap-2">
                @foreach([
                    ['value' => '08', 'label' => 'Hours'],
                    ['value' => '24', 'label' => 'Minutes'],
                    ['value' => '36', 'label' => 'Seconds'],
                ] as $time)
                    <div class="min-w-14 rounded-md bg-white px-3 py-2 text-center text-slate-900">
                        <span class="text-xl font-black">{{ $time['value'] }}</span>
                        <span class="block text-[10px]">{{ $time['label'] }}</span>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    {{-- Hero Banner --}}
    <x-home.banner />

    {{-- Offer Cards --}}
    <div class="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">

        @foreach([
            [
                'name' => 'Wireless Headphones',
                'price' => 2499,
                'old_price' => 3499,
                'discount' => 29,
                'image' => 'photo-1505740420928-5e560c06d30e'
            ],
            [
                'name' => 'Digital Camera',
                'price' => 58999,
                'old_price' => 64999,
                'discount' => 9,
                'image' => 'photo-1516035069371-29a1b244cc32'
            ],
            [
                'name' => 'Smartphone',
                'price' => 29999,
                'old_price' => 35999,
                'discount' => 17,
                'image' => 'photo-1511707171634-5f897ff02aa9'
            ],
            [
                'name' => 'Smart Watch',
                'price' => 5999,
                'old_price' => 7999,
                'discount' => 25,
                'image' => 'photo-1523275335684-37898b6baf30'
            ],
        ] as $product)

            <x-home.product-card :product="$product" />

        @endforeach

    </div>
</section>
