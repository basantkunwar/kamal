
<section class="mx-auto mt-8 max-w-[1600px] px-3 sm:px-6">

    {{-- Heading --}}
    <div class="mb-5">
        <h2 class="text-xl font-extrabold text-slate-900 sm:text-2xl">
            Shop by Category
        </h2>
    </div>

    @php
        $categories = [
            ['name' => 'Laptops', 'image' => 'photo-1496181133206-80ce9b88a853'],
            ['name' => 'Mobiles', 'image' => 'photo-1511707171634-5f897ff02aa9'],
            ['name' => 'Cameras', 'image' => 'photo-1516035069371-29a1b244cc32'],
            ['name' => 'Headphones', 'image' => 'photo-1505740420928-5e560c06d30e'],
            ['name' => 'Smart Watches', 'image' => 'photo-1523275335684-37898b6baf30'],
            ['name' => 'Televisions', 'image' => 'photo-1593359677879-a4bb92f829d1'],
        ];
    @endphp

    {{-- Continuous Category Carousel --}}
    <div class="category-slider overflow-x-auto overflow-y-hidden pb-4">

        <div class="category-track flex w-max">

            {{-- Group 1 --}}
            <div class="category-group flex shrink-0 gap-5 pr-5 sm:gap-7 sm:pr-7">
                @foreach($categories as $category)
                    <a href="#"
                       class="group flex w-36 shrink-0 flex-col items-center gap-3 sm:w-48">

                        <div class="h-36 w-36 overflow-hidden rounded-full bg-white shadow-md ring-1 ring-slate-200 sm:h-48 sm:w-48">
                            <img
                                src="https://images.unsplash.com/{{ $category['image'] }}?auto=format&fit=crop&w=400&q=85"
                                alt="{{ $category['name'] }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                            >
                        </div>

                        <span class="text-center text-sm font-bold text-slate-800 transition group-hover:text-sky-600 sm:text-base">
                            {{ $category['name'] }}
                        </span>
                    </a>
                @endforeach
            </div>

            {{-- Group 2: Exact duplicate --}}
            <div class="category-group flex shrink-0 gap-5 pr-5 sm:gap-7 sm:pr-7"
                 aria-hidden="true">
                @foreach($categories as $category)
                    <a href="#"
                       tabindex="-1"
                       class="group flex w-36 shrink-0 flex-col items-center gap-3 sm:w-48">

                        <div class="h-36 w-36 overflow-hidden rounded-full bg-white shadow-md ring-1 ring-slate-200 sm:h-48 sm:w-48">
                            <img
                                src="https://images.unsplash.com/{{ $category['image'] }}?auto=format&fit=crop&w=400&q=85"
                                alt=""
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                            >
                        </div>

                        <span class="text-center text-sm font-bold text-slate-800 sm:text-base">
                            {{ $category['name'] }}
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </div>
</section>

<style>
    .category-slider {
        scrollbar-width: none;
        -ms-overflow-style: none;
        -webkit-overflow-scrolling: touch;
        cursor: grab;
    }

    .category-slider::-webkit-scrollbar {
        display: none;
    }

    .category-track {
        animation: category-scroll 25s linear infinite;
        will-change: transform;
    }

    .category-slider:hover .category-track {
        animation-play-state: paused;
    }

    @keyframes category-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .category-track {
            animation: none;
        }
    }
</style>

