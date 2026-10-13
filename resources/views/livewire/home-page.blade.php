<div class="pb-20 md:pb-8">
    <x-store.hero />

    <section class="mx-auto mt-3 max-w-7xl px-2 sm:px-3">
        <div class="overflow-hidden rounded-xl bg-gradient-to-r from-cyan-500 to-sky-600 p-4 text-white shadow-sm">
            <div class="flex items-center justify-between gap-3">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-cyan-100">Limited time offer</p>
                    <h2 class="text-xl font-black sm:text-3xl">FLASH SALE</h2>
                    <p class="mt-1 max-w-md text-[10px] text-cyan-50">Grab today's best deals before the timer ends.</p>
                </div>
                <div class="hidden items-center gap-1 sm:flex">
                    <div class="rounded bg-white/20 px-2 py-1 text-center"><b>08</b><small class="block text-[8px]">HRS</small></div>
                    <div>:</div>
                    <div class="rounded bg-white/20 px-2 py-1 text-center"><b>24</b><small class="block text-[8px]">MIN</small></div>
                    <div>:</div>
                    <div class="rounded bg-white/20 px-2 py-1 text-center"><b>36</b><small class="block text-[8px]">SEC</small></div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto mt-4 max-w-7xl px-2 sm:px-3">
        <x-store.section-title title="Flash Sale Products" />
        <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6">
            {{-- @foreach(array_slice($products, 0, 6) as $index => $product)
                <x-store.product-card :product="$product" :index="$index" />
            @endforeach --}}
        </div>
    </section>

    <section class="mx-auto mt-7 max-w-7xl px-2 sm:px-3">
        <x-store.section-title title="Shop by Category" />
        <div class="flex gap-4 overflow-x-auto pb-2 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
            {{-- @foreach($categories as $category)
                <x-store.category-circle :category="$category" />
            @endforeach --}}
        </div>
    </section>

    <section class="mx-auto mt-5 grid max-w-7xl grid-cols-2 gap-2 px-2 sm:grid-cols-4 sm:px-3">
        <x-store.promo-card title="Electric Kettle" subtitle="Kitchen essentials at great prices" image="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?w=700&q=80" />
        <x-store.promo-card title="Gaming Laptop" subtitle="Power up your gaming" image="https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=700&q=80" />
        <x-store.promo-card title="Digital Camera" subtitle="Capture your moments" image="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=700&q=80" />
        <x-store.promo-card title="Smart Appliances" subtitle="Smart life, smart tech" image="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?w=700&q=80" />
    </section>

    @foreach([
        ['title' => 'Mobile Phones', 'items' => array_slice($products, 1, 5)],
        ['title' => 'Laptops', 'items' => array_slice($products, 3, 5)],
        ['title' => 'Appliances', 'items' => array_slice($products, 4, 4)],
        ['title' => 'Accessories', 'items' => array_slice($products, 0, 6)],
    ] as $section)
        <section class="mx-auto mt-7 max-w-7xl px-2 sm:px-3">
            <x-store.section-title :title="$section['title']" />
            <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                @foreach($section['items'] as $product)
                    <x-store.product-card :product="$product" :index="array_search($product, $products, true)" />
                @endforeach
            </div>
        </section>
    @endforeach

    <section class="mx-auto mt-8 max-w-7xl px-2 sm:px-3">
        <div class="overflow-hidden rounded-xl bg-gradient-to-r from-violet-600 to-fuchsia-500 p-5 text-white">
            <div class="flex min-h-32 items-center justify-between gap-4">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest">New collection</p>
                    <h2 class="text-2xl font-black sm:text-4xl">SMARTWATCHES</h2>
                    <p class="mt-1 text-xs text-white/80">Stay connected. Stay active.</p>
                </div>
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&q=80"
                     class="h-28 w-28 object-contain sm:h-40 sm:w-40" alt="Smart watch">
            </div>
        </div>
    </section>
</div>
