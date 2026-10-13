
@props(['product'])

<article class="group relative rounded-lg bg-white p-3 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-md">

    {{-- Discount Badge --}}
    <span class="absolute left-3 top-3 z-10 rounded bg-orange-500 px-2 py-1 text-xs font-bold text-white">
        -{{ $product['discount'] }}%
    </span>

    {{-- Product Image --}}
    <div class="flex aspect-square items-center justify-center overflow-hidden rounded-md bg-slate-50">
        <img
            src="https://images.unsplash.com/{{ $product['image'] }}?w=500&q=80"
            alt="{{ $product['name'] }}"
            loading="lazy"
            class="h-full w-full object-contain transition duration-300 group-hover:scale-105"
        >
    </div>

    {{-- Product Details --}}
    <div class="pt-3">
        <h3 class="line-clamp-2 min-h-10 text-sm font-semibold text-slate-700">
            {{ $product['name'] }}
        </h3>

        {{-- Product Price --}}
        <div class="mt-2 flex flex-wrap items-center gap-2">
            <span class="font-bold text-slate-900">
                Rs. {{ number_format($product['price']) }}
            </span>

            <span class="text-xs text-slate-400 line-through">
                Rs. {{ number_format($product['old_price']) }}
            </span>
        </div>

        {{-- Product Rating --}}
        <div class="mt-2 text-sm text-amber-500">
            ★★★★★
        </div>

        {{-- Add to Cart Button --}}
        <button
            type="button"
            class="mt-3 flex w-full items-center justify-center gap-2 rounded-md bg-sky-600 px-3 py-2 text-xs font-bold text-white transition hover:bg-sky-700"
        >
            {{-- Heroicons Shopping Cart --}}
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.8"
                stroke="currentColor"
                class="h-5 w-5"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.086.836L7.5 14.25a2.25 2.25 0 0 0 2.25 1.75h7.5a2.25 2.25 0 0 0 2.25-1.75l1.5-6.75H5.25M9 21h.008v.008H9V21Zm9 0h.008v.008H18V21Z"
                />
            </svg>

            Add to Cart
        </button>
    </div>

</article>
