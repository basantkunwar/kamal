
<section id="products" class="mx-auto mt-8 max-w-[1600px] px-3 sm:px-6">

    <div class="mb-4 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-extrabold text-slate-900">
                Featured Products
            </h2>

            <p class="mt-1 text-sm text-slate-500">
                Discover our popular electronics
            </p>
        </div>

        <a href="#"
           class="text-sm font-semibold text-sky-600 hover:underline">
            View All →
        </a>
    </div>

    @php
        $products = [
            [
                'name' => 'Gaming Laptop',
                'price' => 119999,
                'old_price' => 134999,
                'discount' => 11,
                'image' => 'photo-1603302576837-37561b2e2302',
            ],
            [
                'name' => 'Wireless Headphones',
                'price' => 2499,
                'old_price' => 3499,
                'discount' => 29,
                'image' => 'photo-1505740420928-5e560c06d30e',
            ],
            [
                'name' => 'Professional Camera',
                'price' => 58999,
                'old_price' => 64999,
                'discount' => 9,
                'image' => 'photo-1516035069371-29a1b244cc32',
            ],
            [
                'name' => 'Smartphone',
                'price' => 29999,
                'old_price' => 35999,
                'discount' => 17,
                'image' => 'photo-1511707171634-5f897ff02aa9',
            ],
            [
                'name' => 'Smart Watch',
                'price' => 5999,
                'old_price' => 7999,
                'discount' => 25,
                'image' => 'photo-1523275335684-37898b6baf30',
            ],
            [
                'name' => '4K Smart TV',
                'price' => 67999,
                'old_price' => 74999,
                'discount' => 9,
                'image' => 'photo-1593359677879-a4bb92f829d1',
            ],
        ];
    @endphp

    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">

        @foreach($products as $product)
            <x-home.product-card :product="$product" />
        @endforeach

    </div>
</section>
