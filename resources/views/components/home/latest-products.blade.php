
<section class="mx-auto mt-8 max-w-[1600px] px-3 pb-10 sm:px-6">

    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-xl font-extrabold text-slate-900">
            Latest Products
        </h2>

        <a href="#products" class="text-sm font-semibold text-sky-600">
            View All →
        </a>
    </div>

    <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4">

        @foreach([
            [
                'name' => 'Mechanical Gaming Keyboard',
                'price' => 4999,
                'old_price' => 6499,
                'discount' => 23,
                'image' => 'photo-1587829741301-dc798b83add3',
            ],
            [
                'name' => 'Digital Camera',
                'price' => 58999,
                'old_price' => 64999,
                'discount' => 9,
                'image' => 'photo-1516035069371-29a1b244cc32',
            ],
            [
                'name' => 'Wireless Headphones',
                'price' => 2499,
                'old_price' => 3499,
                'discount' => 29,
                'image' => 'photo-1505740420928-5e560c06d30e',
            ],
            [
                'name' => 'Smart Watch',
                'price' => 5999,
                'old_price' => 7999,
                'discount' => 25,
                'image' => 'photo-1523275335684-37898b6baf30',
            ],
        ] as $product)

            <x-home.product-card :product="$product" />

        @endforeach

    </div>
</section>
