
<section class="mx-auto mt-8 max-w-[1600px] px-3 sm:px-6">

    {{-- Section Heading --}}
    <div class="mb-4 flex items-center justify-between">
        <h2 class="text-xl font-extrabold text-slate-900">
            Shop by Brand
        </h2>
    </div>

    {{-- Brand List --}}
    @php
        $brands = [
            ['name' => 'Samsung', 'logo' => 'https://cdn.simpleicons.org/samsung/1428A0'],
            ['name' => 'Apple', 'logo' => 'https://cdn.simpleicons.org/apple/000000'],
            ['name' => 'HP', 'logo' => 'https://cdn.simpleicons.org/hp/0096D6'],
            ['name' => 'Dell', 'logo' => 'https://cdn.simpleicons.org/dell/007DB8'],
            ['name' => 'Lenovo', 'logo' => 'https://cdn.simpleicons.org/lenovo/E2231A'],
            ['name' => 'Sony', 'logo' => 'https://cdn.simpleicons.org/sony/000000'],
            ['name' => 'Xiaomi', 'logo' => 'https://cdn.simpleicons.org/xiaomi/FF6900'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
            ['name' => 'Canon', 'logo' => 'https://cdn.simpleicons.org/canon/CC0000'],
        ];
    @endphp

    {{-- Horizontal Scroller --}}
    <div class="brand-slider overflow-x-auto overflow-y-hidden pb-3">
        <div class="flex w-max gap-3">

            @foreach($brands as $brand)
                <a href="#"
                   class="group flex min-h-28 w-36 shrink-0 flex-col items-center justify-center gap-3 rounded-xl border border-slate-200 bg-white p-4 shadow-sm transition hover:-translate-y-1 hover:border-sky-400 hover:shadow-md sm:w-40">

                    <div class="flex h-12 w-full items-center justify-center">
                        <img
                            src="{{ $brand['logo'] }}"
                            alt="{{ $brand['name'] }} logo"
                            loading="lazy"
                            class="max-h-10 max-w-24 object-contain transition duration-300 group-hover:scale-110"
                        >
                    </div>

                    <span class="text-xs font-semibold text-slate-700 transition group-hover:text-sky-600">
                        {{ $brand['name'] }}
                    </span>

                </a>
            @endforeach

        </div>
    </div>

</section>

<style>
    .brand-slider {
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        cursor: grab;
    }

    .brand-slider::-webkit-scrollbar {
        display: none;
    }
</style>
