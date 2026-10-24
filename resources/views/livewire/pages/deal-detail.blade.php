<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- Breadcrumb & Hero Header (Same styling as /airlines page) -->
    <section class="relative pt-32 sm:pt-36 pb-12 sm:pb-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <!-- Ambient Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-30">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-gradient-to-b from-amber-200 to-transparent blur-3xl rounded-full"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10">
            <!-- Breadcrumbs Trail -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-300 shadow-sm mb-6 text-xs text-slate-800 font-semibold">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-800">
                    <x-heroicon-m-home class="w-4 h-4 text-amber-700" />
                    <span>Home</span>
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <a href="{{ route('deals.index') }}" wire:navigate class="hover:text-amber-700 transition-colors text-slate-800">
                    Best Deals
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold">{{ $deal->country }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-3xl">
                    <!-- Eyebrow & Badges -->
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-slate-950 text-amber-300 shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>{{ $deal->savings_tag ?? '30-60% OFF' }}</span>
                        </span>

                        <span class="text-xs font-bold uppercase tracking-wider text-amber-900 bg-amber-100/90 px-3 py-1 rounded-full border border-amber-300/60 shadow-sm">
                            {{ $deal->region }}
                        </span>

                        <span class="text-xs font-bold uppercase tracking-wider text-slate-800 bg-slate-200/80 px-3 py-1 rounded-full border border-slate-300">
                            {{ $deal->cabin_class ?? 'Business & First Class' }}
                        </span>
                    </div>

                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-4">
                        {{ $deal->display_title }}
                    </h1>

                    @if($deal->summary)
                        <p class="text-base sm:text-lg text-slate-800 font-medium max-w-2xl leading-relaxed">
                            {{ $deal->summary }}
                        </p>
                    @endif

                    <!-- Star Rating & Review count -->
                    <div class="flex items-center gap-2 mt-4 text-xs font-bold text-slate-800">
                        <div class="flex text-amber-500">
                            @for($i = 0; $i < 5; $i++)
                                <x-heroicon-s-star class="w-4 h-4 fill-current" />
                            @endfor
                        </div>
                        <span class="font-bold text-slate-950">4.9 / 5.0</span>
                        <span class="text-slate-500">· Over 15,000+ Transpacific &amp; Transatlantic Flights Booked</span>
                    </div>
                </div>

                <!-- Price Highlight Box & Fast Quote Action -->
                <div class="lg:w-80 shrink-0 p-6 rounded-3xl bg-white border border-slate-200 shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="text-[11px] uppercase tracking-wider text-slate-500 font-bold mb-1">Wholesale Contract Rates</div>
                        <div class="flex items-baseline gap-2 mb-2">
                            <span class="text-xs font-semibold text-slate-600">Starting From</span>
                            <span class="font-serif text-3xl font-extrabold text-slate-950">${{ number_format($deal->starting_price ?? 2895) }}</span>
                            <span class="text-xs font-bold text-emerald-600">{{ $deal->savings_tag ?? '30-60% Off' }}</span>
                        </div>
                        <p class="text-xs text-slate-500 mb-6">Subject to dates, cabin allotment, and seasonal availability.</p>
                    </div>

                    <div class="space-y-3">
                        <a href="#quote" class="w-full py-3.5 text-center block bg-gold-gradient hover:bg-gold-gradient-hover text-white font-bold text-xs uppercase tracking-wider rounded-xl transition-all shadow-lux-gold">
                            Request Custom Quote
                        </a>
                        <a href="tel:18005550147" class="w-full py-3 text-center flex items-center justify-center gap-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs uppercase tracking-wider transition-colors">
                            <x-heroicon-m-phone class="w-4 h-4 text-amber-700" />
                            <span>(800) 555-0147</span>
                        </a>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SAMPLE PRICING ROUTES TABLE / CARDS -->
    @if(!empty($deal->pricing_routes) && is_array($deal->pricing_routes))
        <section class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
            <x-ui.container size="wide">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-1">Sample Route Rates</span>
                        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-950">
                            Popular US Gateways to <span class="italic font-normal font-serif text-gold-gradient">{{ $deal->country }}</span>
                        </h2>
                    </div>
                    <span class="text-xs text-slate-500 font-semibold">*Fares round-trip including taxes and airline surcharges</span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                    @foreach($deal->pricing_routes as $route)
                        <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm hover:shadow-md transition-shadow flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="space-y-1">
                                <div class="flex items-center gap-2 text-sm font-bold text-slate-950">
                                    <span>{{ $route['origin'] ?? 'US Departure' }}</span>
                                    <x-heroicon-m-arrow-right class="w-4 h-4 text-amber-600 shrink-0" />
                                    <span>{{ $route['destination'] ?? $deal->country }}</span>
                                </div>
                                <div class="text-xs text-slate-500 font-medium">
                                    {{ $route['airline'] ?? 'Flagship Carrier' }} · 180° Lie-Flat Suite
                                </div>
                            </div>

                            <div class="flex items-center sm:flex-col sm:items-end justify-between border-t sm:border-t-0 pt-3 sm:pt-0 border-slate-100">
                                @if(!empty($route['retail_price']))
                                    <div class="text-xs text-slate-400 line-through">
                                        Retail: {{ $route['retail_price'] }}
                                    </div>
                                @endif
                                <div class="font-serif text-2xl font-bold text-amber-800">
                                    {{ $route['our_price'] ?? '$2,895' }}
                                </div>
                                <a href="#quote" class="text-[11px] font-bold uppercase tracking-wider text-slate-900 hover:text-amber-700 flex items-center gap-1 mt-1">
                                    <span>Lock In Fare</span>
                                    <x-heroicon-m-arrow-right class="w-3.5 h-3.5" />
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-ui.container>
        </section>
    @endif

    <!-- EDITORIAL / CONTENT SECTION (RENDERED FROM FILAMENT RICH TEXT EDITOR) -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Main Rich Text Editorial Body -->
                <div class="lg:col-span-8">
                    @if($deal->content)
                        <div class="prose prose-slate prose-lg max-w-none
                                    prose-headings:font-serif prose-headings:font-bold prose-headings:text-slate-950 prose-headings:tracking-tight
                                    prose-h2:text-3xl prose-h2:mt-10 prose-h2:mb-4
                                    prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-3
                                    prose-p:text-slate-700 prose-p:leading-relaxed prose-p:mb-5
                                    prose-strong:text-slate-950 prose-strong:font-bold
                                    prose-ul:my-6 prose-ul:space-y-2 prose-li:text-slate-700
                                    prose-a:text-amber-800 prose-a:underline hover:prose-a:text-amber-900">
                            {!! $deal->content !!}
                        </div>
                    @else
                        <!-- Fallback Editorial Content -->
                        <div class="prose prose-slate prose-lg max-w-none font-sans">
                            <h2 class="font-serif text-3xl font-bold text-slate-950">
                                Unpublished Business Class Contracts to {{ $deal->country }}
                            </h2>
                            <p class="text-slate-700 leading-relaxed">
                                Our private flight concierge desk secures unpublished consolidator seat blocks on flagship international carriers flying to {{ $deal->country }}. Rather than paying inflated commercial retail rack prices on public booking engines, our travelers benefit from wholesale discounts between 30% and 60% with complete ticket legitimacy, full frequent flyer miles, and flagship airport lounge privileges.
                            </p>
                        </div>
                    @endif
                </div>

                <!-- Sticky Sidebar Summary & Advisor Credentials -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/90 shadow-sm space-y-6">
                        <h3 class="font-serif text-xl font-bold text-slate-950 border-b border-slate-200 pb-4">
                            Why Book With Our Concierge?
                        </h3>

                        <ul class="space-y-4 text-xs font-medium text-slate-700">
                            <li class="flex items-start gap-3">
                                <x-heroicon-m-check-circle class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                                <span><strong>30% to 60% Wholesale Savings:</strong> Direct consolidator allocations bypass retail airline markup.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <x-heroicon-m-check-circle class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                                <span><strong>Official Airline Stock:</strong> Confirmed e-tickets with full mileage accrual and lounge access.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <x-heroicon-m-check-circle class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                                <span><strong>Dedicated Advisor:</strong> Direct phone extension and 24/7 flight support. Zero phone trees.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <x-heroicon-m-check-circle class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                                <span><strong>Flexible Terms:</strong> Written change and cancellation terms delivered before payment.</span>
                            </li>
                        </ul>

                        <div class="pt-6 border-t border-slate-200">
                            <div class="text-[11px] uppercase tracking-wider text-slate-500 font-bold mb-2">Priority Flight Desk</div>
                            <a href="tel:18005550147" class="flex items-center gap-2 text-lg font-bold text-slate-950 hover:text-amber-800 transition-colors">
                                <x-heroicon-m-phone class="w-5 h-5 text-amber-600" />
                                <span>(800) 555-0147</span>
                            </a>
                        </div>
                    </div>

                    @if(!empty($deal->top_cities))
                        <div class="p-8 rounded-3xl bg-white border border-slate-200/90 shadow-sm space-y-4">
                            <h4 class="font-serif text-lg font-bold text-slate-950">
                                Primary Airports in {{ $deal->country }}
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($deal->top_cities as $city)
                                    <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-800 text-xs font-semibold">
                                        {{ $city }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- QUOTATION FORM SECTION -->
    <section id="quote" class="py-16 sm:py-24 bg-gradient-to-b from-white via-slate-50 to-slate-100 border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Unpublished Wholesale Rates</span>
                <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-slate-950 tracking-tight">
                    Check Wholesale Seats to <span class="italic font-normal font-serif text-gold-gradient">{{ $deal->country }}</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-700 mt-3 font-medium">
                    Submit your itinerary below. Our senior flight desk will audit consolidator seat blocks and respond with your customized proposal within 30 minutes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <livewire:components.quote-form />
            </div>
        </x-ui.container>
    </section>

    <!-- OTHER TOP DEALS SHOWCASE -->
    @if($otherDeals->isNotEmpty())
        <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
            <x-ui.container size="wide">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-1">More Destinations</span>
                        <h3 class="font-serif text-3xl font-bold text-slate-950">
                            Explore More <span class="italic font-normal font-serif text-gold-gradient">Country Deals</span>
                        </h3>
                    </div>
                    <a href="{{ route('deals.index') }}" wire:navigate class="text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 flex items-center gap-1.5 transition-colors">
                        <span>View All Destinations</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($otherDeals as $other)
                        <article class="group bg-white rounded-3xl border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <a href="{{ route('deals.show', $other->slug) }}" wire:navigate class="block aspect-[16/10] bg-slate-900 overflow-hidden relative">
                                @if($other->featured_image_url)
                                    <img src="{{ $other->featured_image_url }}" alt="{{ $other->country }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-slate-950 to-slate-800 p-6 flex flex-col justify-end">
                                        <div class="font-serif text-xl font-bold text-white line-clamp-1">
                                            {{ $other->country }}
                                        </div>
                                        <span class="text-xs text-amber-300 font-bold mt-1">
                                            Fares from ${{ number_format($other->starting_price ?? 1990) }}
                                        </span>
                                    </div>
                                @endif
                            </a>

                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <div>
                                    <div class="text-[11px] text-amber-800 font-bold uppercase tracking-wider mb-2">
                                        {{ $other->region }}
                                    </div>
                                    <h4 class="font-serif text-xl font-bold text-slate-950 group-hover:text-amber-800 transition-colors line-clamp-1 mb-2">
                                        <a href="{{ route('deals.show', $other->slug) }}" wire:navigate>
                                            {{ $other->display_title }}
                                        </a>
                                    </h4>
                                    <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">
                                        {{ $other->summary }}
                                    </p>
                                </div>

                                <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                    <span class="text-xs font-bold text-emerald-600">
                                        {{ $other->savings_tag ?? '30-60% OFF' }}
                                    </span>
                                    <a href="{{ route('deals.show', $other->slug) }}" wire:navigate class="text-xs font-bold text-amber-700 group-hover:text-amber-800">
                                        View Rates &rarr;
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </x-ui.container>
        </section>
    @endif

    <!-- DARK CTA SECTION -->
    <section class="py-16 sm:py-20 bg-slate-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gold-gradient opacity-10 pointer-events-none"></div>
        <x-ui.container size="wide" class="relative z-10 text-center max-w-3xl mx-auto">
            <span class="text-xs uppercase tracking-lux text-amber-400 font-bold block mb-3">Direct Concierge Booking</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold mb-4">
                Ready to Fly Business Class to {{ $deal->country }}?
            </h2>
            <p class="text-slate-300 text-sm sm:text-base mb-8 font-normal">
                Our advisors will match your preferred travel dates with unpublished airline allocations for maximum comfort and savings.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="tel:18005550147" class="w-full sm:w-auto px-8 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-bold text-xs uppercase tracking-wider rounded-2xl shadow-lux-gold flex items-center justify-center gap-2">
                    <x-heroicon-m-phone class="w-4 h-4" />
                    <span>Call Concierge: (800) 555-0147</span>
                </a>
                <a href="#quote" class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/15 border border-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-2xl transition-all">
                    <span>Get Instant Proposal</span>
                </a>
            </div>
        </x-ui.container>
    </section>
</div>
