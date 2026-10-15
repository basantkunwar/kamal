<div>
     {{-- Success Message --}}
                    @if (session('success'))
                        <div class="mt-6 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="mt-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <p class="font-semibold">Please correct the following errors:</p>
                            <ul class="mt-2 list-inside list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form wire:submit="save" class="mt-8 space-y-5">

                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Full Name --}}
                            <div>
                                <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Full Name <span class="text-red-500">*</span>
                                </label>

                                <input type="text" id="name" wire:model="name" required autocomplete="name"
                                    placeholder="Enter your full name"
                                    class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100">

                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Email Address <span class="text-red-500">*</span>
                                </label>

                                <input type="email" id="email" wire:model="email" required autocomplete="email"
                                    placeholder="you@example.com"
                                    class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100">

                                @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">

                            {{-- Phone --}}
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Phone Number
                                </label>

                                <input type="tel" id="phone" wire:model="phone" autocomplete="tel"
                                    placeholder="+977 98XXXXXXXX"
                                    class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100">

                                @error('phone')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Subject --}}
                            <div>
                                <label for="subject" class="mb-2 block text-sm font-semibold text-slate-700">
                                    Subject <span class="text-red-500">*</span>
                                </label>

                                <select id="subject" wire:model="subject" required
                                    class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-sky-500 focus:ring-2 focus:ring-sky-100">
                                    <option value="">Select a subject</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                    <option value="Order Support">Order Support</option>
                                    <option value="Product Inquiry">Product Inquiry</option>
                                    <option value="Returns and Refunds">Returns and Refunds</option>
                                    <option value="Other">Other</option>
                                </select>

                                @error('subject')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        {{-- Order Number --}}
                        <div>
                            <label for="order_number" class="mb-2 block text-sm font-semibold text-slate-700">
                                Order Number <span class="font-normal text-slate-400">(Optional)</span>
                            </label>

                            <input type="text" id="order_number" wire:model="order_number"
                                placeholder="Enter your order number if applicable"
                                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100">

                            @error('order_number')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div>
                            <label for="message" class="mb-2 block text-sm font-semibold text-slate-700">
                                Your Message <span class="text-red-500">*</span>
                            </label>

                            <textarea id="message" wire:model="message" rows="5" required placeholder="How can we help you?"
                                class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-sky-500 focus:ring-2 focus:ring-sky-100"></textarea>

                            @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <button type="submit" wire:loading.attr="disabled" wire:target="save"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-sky-600 px-6 py-3.5 font-bold text-white shadow-sm transition hover:bg-sky-700 disabled:cursor-not-allowed disabled:opacity-60 sm:w-auto">
                            <span wire:loading.remove wire:target="save">Send Message</span>
                            <span wire:loading wire:target="save">Sending...</span>
                        </button>

                        <p class="text-xs leading-5 text-slate-500">
                            By submitting this form, you agree that we may use your
                            information to respond to your inquiry.
                        </p>

                    </form>
</div>
