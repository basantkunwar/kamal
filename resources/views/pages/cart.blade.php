
@extends('layouts.home')

@section('content')

    {{-- Breadcrumb --}}
    <div class="mx-3 mt-1 bg-white px-4 py-4 sm:px-6">
        <nav class="flex items-center gap-2 text-sm" aria-label="Breadcrumb">
            <a href="{{ url('/') }}"
               wire:navigate
               class="font-medium text-blue-700 transition hover:text-blue-900">
                Home
            </a>

            <svg class="h-4 w-4 text-slate-500"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="1.8"
                 viewBox="0 0 24 24"
                 aria-hidden="true">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="m9 18 6-6-6-6" />
            </svg>

            <span class="font-medium text-slate-900" aria-current="page">
                Shopping Cart
            </span>
        </nav>
    </div>

    {{-- Empty Cart --}}
    <section class="mx-auto flex max-w-7xl items-center justify-center px-4 py-12 sm:px-6 sm:py-20 lg:px-8">
        <div class="w-full max-w-lg text-center">

            {{-- Cart Illustration --}}
            <div class="mx-auto flex h-40 w-40 items-center justify-center rounded-full bg-sky-100 sm:h-48 sm:w-48">
                <svg class="h-24 w-24 text-sky-600 sm:h-28 sm:w-28"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.5"
                     viewBox="0 0 24 24"
                     aria-hidden="true">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M2.5 3h2l2.7 12.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 1.9-1.5L22 8H5.1" />

                    <circle cx="9.5" cy="20" r="1.2" />
                    <circle cx="18" cy="20" r="1.2" />

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M10 11h7M13.5 7.5v7" />
                </svg>
            </div>

            <p class="mt-8 text-xs font-bold uppercase tracking-[0.2em] text-sky-600">
                Your Shopping Journey
            </p>

            <h1 class="mt-3 text-2xl font-extrabold tracking-tight text-slate-900 sm:text-3xl">
                Your Cart Is Empty
            </h1>

            <p class="mx-auto mt-4 max-w-md text-sm leading-7 text-slate-500 sm:text-base">
                Looks like you haven't added anything to your cart yet.
                Explore our collection and find something you'll love!
            </p>

            {{-- Actions --}}
            <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                

                <a href="/"
                   wire:navigate
                   class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 bg-white px-6 py-3.5 text-sm font-bold text-slate-700 transition hover:border-sky-300 hover:bg-sky-50 hover:text-sky-700">

                    Back to Home

                    <svg class="h-4 w-4"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="1.8"
                         viewBox="0 0 24 24"
                         aria-hidden="true">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M5 12h14m-7-7 7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- Additional Note --}}
            <div class="mt-10 flex items-center justify-center gap-2 text-xs text-slate-400">
                <svg class="h-4 w-4"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="1.7"
                     viewBox="0 0 24 24"
                     aria-hidden="true">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          d="m9 12 2 2 4-4" />
                </svg>

                Happy shopping with Mahasasto Shop
            </div>

        </div>
    </section>
@endsection
