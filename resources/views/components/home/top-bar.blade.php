<div class="w-full border-b border-gray-300 bg-[#318fc3] text-white">
    <div class="mx-auto flex min-h-[46px] w-full items-center justify-between gap-3 px-4 sm:px-10">

        {{-- Contact Information --}}
        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs sm:gap-x-5 sm:text-sm">

            <a href="tel:9851168979"
               class="flex items-center gap-2 transition hover:text-gray-200">
                {{-- Phone Icon --}}
                <svg class="h-4 w-4 shrink-0" fill="none"
                     stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.09l-4.423-1.106a1.125 1.125 0 0 0-1.173.417l-.97 1.293a1.125 1.125 0 0 1-1.21.38 12.035 12.035 0 0 1-7.1-7.1 1.125 1.125 0 0 1 .38-1.21l1.293-.97c.38-.285.55-.767.417-1.173L7.006 3.146a1.125 1.125 0 0 0-1.09-.852H4.5A2.25 2.25 0 0 0 2.25 4.544V6.75Z"/>
                </svg>
                <span>9851168979</span>
            </a>

            <a href="mailto:dipeshinfosys@gmail.com"
               class="flex items-center gap-2 transition hover:text-gray-200">
                {{-- Envelope Icon --}}
                <svg class="h-4 w-4 shrink-0" fill="none"
                     stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21.75 6.75v10.5A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0-9.75 6.75L2.25 6.75"/>
                </svg>
                <span>dipeshinfosys@gmail.com</span>
            </a>

        </div>

        {{-- Authentication Links --}}
        <div class="flex shrink-0 items-center gap-3 text-xs sm:gap-4 sm:text-sm">
            <a href="{{ Route::has('register') ? route('register') : '#' }}"
               class="transition hover:text-gray-200">
                Register
            </a>

            <a href="{{ Route::has('login') ? route('login') : '#' }}"
               class="transition hover:text-gray-200">
                Login
            </a>
        </div>

    </div>
</div>
