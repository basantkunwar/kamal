@extends('layouts.home')

@section('content')
<main class="min-h-screen bg-slate-50">
    {{-- Page Header --}}
    {{-- Breadcrumb --}}
<div class="mx-3 mt-1 bg-white px-4 py-4 sm:px-6">
    <nav class="flex items-center gap-2 text-sm" aria-label="Breadcrumb">
        <a href="{{ url('/') }}"
           class="font-medium text-blue-700 transition hover:text-blue-900">
            Home
        </a>

        <svg class="h-4 w-4 text-slate-700"
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
            Contact Us
        </span>
    </nav>
</div>

    {{-- Contact Content --}}
    <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-16 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-5">

            {{-- Contact Information --}}
            <div class="rounded-2xl bg-slate-900 p-6 text-white sm:p-8 lg:col-span-2">
                <h2 class="text-2xl font-bold">Get in Touch</h2>

                <p class="mt-3 text-sm leading-6 text-slate-300">
                    Our customer support team is ready to assist you with your
                    questions, orders, and product inquiries.
                </p>

                <div class="mt-8 space-y-7">

                    {{-- Email --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-500/20 text-sky-300">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                 stroke-width="1.8" viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="14" rx="2"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m3 7 9 6 9-6"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold">Email Us</h3>
                            <p class="mt-1 text-sm text-slate-300">
                                For general inquiries and support
                            </p>
                            <a href="mailto:support@mahasastoshop.com"
                               class="mt-2 inline-block break-all text-sm font-medium text-sky-300 hover:text-white">
                                support@mahasastoshop.com
                            </a>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-500/20 text-sky-300">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                 stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 5a2 2 0 0 1 2-2h3.3a1 1 0 0 1 1 0.8l1.2 5a1 1 0 0 1-.5 1.1l-2.2 1.5a11 11 0 0 0 4.8 4.8l1.5-2.2a1 1 0 0 1 1.1-.5l5 1.2a1 1 0 0 1 .8 1V19a2 2 0 0 1-2 2h-1C9.7 21 3 14.3 3 6V5Z"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold">Call Us</h3>
                            <p class="mt-1 text-sm text-slate-300">
                                Talk to our support team
                            </p>
                            <a href="tel:+9779800000000"
                               class="mt-2 inline-block text-sm font-medium text-sky-300 hover:text-white">
                                +977 9800000000
                            </a>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-sky-500/20 text-sky-300">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                 stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z"/>
                                <circle cx="12" cy="10" r="2.5"/>
                            </svg>
                        </div>

                        <div>
                            <h3 class="font-semibold">Our Location</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-300">
                                Nepal
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-10 rounded-xl border border-white/10 bg-white/5 p-5">
                    <h3 class="font-semibold">Customer Support</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-300">
                        Need help with an order? Include your order number
                        in your message so we can assist you faster.
                    </p>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8 lg:col-span-3">
                <h2 class="text-2xl font-bold text-slate-900">
                    Send Us a Message
                </h2>

                <p class="mt-2 text-sm text-slate-500">
                    Fill out the form below and we'll get back to you.
                </p>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="mt-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Validation Errors --}}
                @if($errors->any())
                    <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        <p class="font-semibold">Please correct the following errors:</p>
                        <ul class="mt-2 list-inside list-disc">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="" method="POST" class="mt-8 space-y-5">
                    {{-- {{ route('contact.store') }} --}}
                    @csrf

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                                Full Name *
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                placeholder="Enter your full name"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                            >
                        </div>

                        <div>
                            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                Email Address *
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="you@example.com"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                            >
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div>
                            <label for="phone" class="mb-2 block text-sm font-semibold text-slate-700">
                                Phone Number
                            </label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                autocomplete="tel"
                                placeholder="+977 98XXXXXXXX"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                            >
                        </div>

                        <div>
                            <label for="subject" class="mb-2 block text-sm font-semibold text-slate-700">
                                Subject *
                            </label>
                            <select
                                id="subject"
                                name="subject"
                                required
                                class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                            >
                                <option value="">Select a subject</option>
                                <option value="General Inquiry" @selected(old('subject') === 'General Inquiry')>General Inquiry</option>
                                <option value="Order Support" @selected(old('subject') === 'Order Support')>Order Support</option>
                                <option value="Product Inquiry" @selected(old('subject') === 'Product Inquiry')>Product Inquiry</option>
                                <option value="Returns and Refunds" @selected(old('subject') === 'Returns and Refunds')>Returns and Refunds</option>
                                <option value="Other" @selected(old('subject') === 'Other')>Other</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="order_number" class="mb-2 block text-sm font-semibold text-slate-700">
                            Order Number <span class="font-normal text-slate-400">(Optional)</span>
                        </label>
                        <input
                            type="text"
                            id="order_number"
                            name="order_number"
                            value="{{ old('order_number') }}"
                            placeholder="Enter your order number if applicable"
                            class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                        >
                    </div>

                    <div>
                        <label for="message" class="mb-2 block text-sm font-semibold text-slate-700">
                            Your Message *
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            placeholder="How can we help you?"
                            class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"
                        >{{ old('message') }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-sky-600 px-6 py-3.5 font-bold text-white shadow-sm transition hover:bg-sky-700 focus:outline-none focus:ring-4 focus:ring-sky-200 sm:w-auto"
                    >
                        Send Message

                        <svg class="h-5 w-5" fill="none" stroke="currentColor"
                             stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M22 2 11 13"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m22 2-7 20-4-9-9-4 20-7Z"/>
                        </svg>
                    </button>

                    <p class="text-xs leading-5 text-slate-500">
                        By submitting this form, you agree that we may use your
                        information to respond to your inquiry.
                    </p>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection