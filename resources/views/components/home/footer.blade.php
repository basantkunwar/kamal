
<footer class="mt-12 bg-[#131A29] text-slate-300">


    {{-- Main Footer --}}
    <div class="mx-auto grid max-w-[1600px] grid-cols-1 gap-8 px-4 py-10 sm:px-6 sm:grid-cols-2 lg:grid-cols-4">

        {{-- Shop Information --}}
        <div>
            <a href="/" class="text-2xl font-black tracking-tight text-white">
                MAHASASTO<span class="text-sky-500"> SHOP</span>
            </a>

            <p class="mt-4 max-w-xs text-sm leading-6 text-slate-400">
                Your trusted destination for electronics, mobiles,
                laptops, accessories, and everyday technology at
                affordable prices.
            </p>

            <div class="mt-5 flex items-center gap-3">

                {{-- Facebook --}}
                <a href="#" aria-label="Facebook"
                   class="rounded-lg bg-slate-800 p-2.5 transition hover:bg-sky-600 hover:text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13.5 21v-8h2.7l.4-3.1h-3.1v-2c0-.9.3-1.5 1.6-1.5h1.7V3.6c-.8-.1-1.6-.2-2.5-.2-2.5 0-4.2 1.5-4.2 4.3v2.2H7.3V13h2.8v8h3.4Z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a href="#" aria-label="Instagram"
                   class="rounded-lg bg-slate-800 p-2.5 transition hover:bg-sky-600 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.7" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                    </svg>
                </a>

                {{-- YouTube --}}
                <a href="#" aria-label="YouTube"
                   class="rounded-lg bg-slate-800 p-2.5 transition hover:bg-sky-600 hover:text-white">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M23 7.1a3 3 0 0 0-2.1-2.1C19 4.5 12 4.5 12 4.5s-7 0-8.9.5A3 3 0 0 0 1 7.1 31 31 0 0 0 .5 12a31 31 0 0 0 .5 4.9A3 3 0 0 0 3.1 19c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1A31 31 0 0 0 23.5 12a31 31 0 0 0-.5-4.9ZM9.5 15.5v-7l6 3.5-6 3.5Z"/>
                    </svg>
                </a>

            </div>
        </div>

        {{-- Quick Links --}}
        <div>
            <h3 class="mb-5 text-base font-bold text-white">
                Quick Links
            </h3>

            <ul class="space-y-3 text-sm">
                <li>
                    <a href="/" class="transition hover:text-sky-400">Home</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Shop Products</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Shop by Category</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Shop by Brand</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Special Offers</a>
                </li>
            </ul>
        </div>

        {{-- Customer Service --}}
        <div>
            <h3 class="mb-5 text-base font-bold text-white">
                Customer Service
            </h3>

            <ul class="space-y-3 text-sm">
                <li>
                    <a href="#" class="transition hover:text-sky-400">My Account</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">My Orders</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" wire:navigate class="transition hover:text-sky-400 " >Help & Contact</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Returns & Refunds</a>
                </li>
                <li>
                    <a href="#" class="transition hover:text-sky-400">Privacy Policy</a>
                </li>
            </ul>
        </div>

        {{-- Contact Information --}}
        <div>
            <h3 class="mb-5 text-base font-bold text-white">
                Contact Us
            </h3>

            <ul class="space-y-4 text-sm">

                <li class="flex items-start gap-3">
                    {{-- Heroicon: Map Pin --}}
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-sky-500"
                         fill="none" stroke="currentColor" stroke-width="1.7"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19.5 10.5c0 7.5-7.5 11-7.5 11s-7.5-3.5-7.5-11a7.5 7.5 0 1 1 15 0Z"/>
                    </svg>

                    <span>
                        Nepal
                        <span class="mt-1 block text-xs text-slate-500">
                            Your shop address here
                        </span>
                    </span>
                </li>

                <li class="flex items-center gap-3">
                    {{-- Heroicon: Phone --}}
                    <svg class="h-5 w-5 shrink-0 text-sky-500"
                         fill="none" stroke="currentColor" stroke-width="1.7"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.09l-4.423-1.106a1.125 1.125 0 0 0-1.173.417l-.97 1.293a1.125 1.125 0 0 1-1.21.38 12.035 12.035 0 0 1-7.1-7.1 1.125 1.125 0 0 1 .38-1.21l1.293-.97c.38-.285.55-.767.417-1.173L7.006 3.146a1.125 1.125 0 0 0-1.09-.852H4.5A2.25 2.25 0 0 0 2.25 4.544V6.75Z"/>
                    </svg>

                    <a href="tel:9851168979" class="hover:text-sky-400">
                        9851168979
                    </a>
                </li>

                <li class="flex items-center gap-3">
                    {{-- Heroicon: Envelope --}}
                    <svg class="h-5 w-5 shrink-0 text-sky-500"
                         fill="none" stroke="currentColor" stroke-width="1.7"
                         viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6.75L2.25 6.75"/>
                    </svg>

                    <a href="mailto:dipeshinfosys@gmail.com"
                       class="break-all hover:text-sky-400">
                        dipeshinfosys@gmail.com
                    </a>
                </li>

            </ul>
        </div>

    </div>

    {{-- Bottom Footer --}}
    <div class="border-t border-slate-700">
        <div class="mx-auto flex max-w-[1600px] flex-col items-center justify-between gap-4 px-4 py-5 text-center text-xs text-slate-400 sm:px-6 md:flex-row md:text-left">

            <p>
                © {{ date('Y') }} Mahasasto Shop. All rights reserved.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4">
                <a href="#" class="hover:text-white">Terms & Conditions</a>
                <a href="#" class="hover:text-white">Privacy Policy</a>
                <a href="#" class="hover:text-white">Help Center</a>
            </div>

            <div class="flex items-center gap-2">
                <span>We accept</span>

                <span class="rounded bg-white px-2 py-1 font-bold text-slate-800">
                    VISA
                </span>

                <span class="rounded bg-white px-2 py-1 font-bold text-slate-800">
                    COD
                </span>

                <span class="rounded bg-white px-2 py-1 font-bold text-slate-800">
                    Khalti
                </span>
            </div>

        </div>
    </div>

</footer>
