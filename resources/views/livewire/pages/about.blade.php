<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- SECTION 1: HERO & BREADCRUMB -->
    <section class="relative pt-32 sm:pt-36 pb-16 sm:pb-24 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <!-- Ambient Champagne Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-40">
            <div class="absolute -top-36 left-1/2 -translate-x-1/2 w-[850px] h-[400px] bg-gradient-to-b from-amber-200/50 via-amber-100/20 to-transparent blur-3xl rounded-full"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10 text-center">
            <!-- Breadcrumbs Trail -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-300 shadow-sm mb-6 text-xs text-slate-800 font-semibold">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-800">
                    <x-heroicon-m-home class="w-4 h-4 text-amber-700" />
                    <span>Home</span>
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold">About Us</span>
            </nav>

            <div class="max-w-4xl mx-auto">
                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">The Private Aviation Standard</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-slate-950 leading-[1.08] mb-6">
                    Helping People <span class="italic font-normal font-serif text-gold-gradient">Travel Smart</span>
                </h1>

                <p class="text-lg sm:text-xl text-slate-800 font-medium max-w-3xl mx-auto leading-relaxed mb-10">
                    A decade of negotiating unpublished Business and First Class fares, solving complex multi-sector international itineraries, and earning the loyalty of travelers who refuse to compromise on comfort.
                </p>

                <!-- Actions -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#quote"
                       class="w-full sm:w-auto px-9 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-lux-gold flex items-center justify-center gap-2.5">
                        <span>Get Wholesale Quote</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                    </a>
                    <a href="tel:18005550147"
                       class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-slate-50 text-slate-950 font-semibold text-xs uppercase tracking-lux rounded-2xl border border-slate-300 transition-all flex items-center justify-center gap-2.5 shadow-sm">
                        <x-heroicon-m-phone class="w-4 h-4 text-amber-700" />
                        <span>Call (800) 555-0147</span>
                    </a>
                </div>
            </div>

            <!-- Hero Banner Visual -->
            <div class="mt-14 sm:mt-18 max-w-5xl mx-auto rounded-[2.5rem] overflow-hidden border border-slate-200/90 shadow-[0_25px_60px_-15px_rgba(15,23,42,0.18)] relative bg-slate-900 aspect-[16/9] sm:aspect-[21/9]">
                <img src="{{ asset('images/hero/about-hero.jpg') }}"
                     alt="JustBusinessClass.us Luxury Flight Concierge"
                     class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/25 to-transparent flex items-end p-8 sm:p-12 text-left">
                    <div>
                        <span class="text-[10px] font-black uppercase tracking-widest text-amber-300 block mb-1">Uncompromising Standard</span>
                        <div class="font-serif text-2xl sm:text-3xl font-bold text-white max-w-xl">
                            Where White-Glove Human Discretion Meets Unlisted Airline Allocations.
                        </div>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 2: OUR STORY / "BUILT AROUND A PHONE CALL" -->
    <section class="py-20 sm:py-28 bg-white border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-5">
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-3">Our Origin</span>
                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.14] mb-6">
                        Built Around <br class="hidden sm:inline">
                        <span class="italic font-normal font-serif text-gold-gradient">A Personal Phone Call</span>
                    </h2>
                    <div class="w-16 h-1 bg-amber-600 rounded-full mb-8"></div>
                    <p class="text-slate-700 text-base sm:text-lg leading-relaxed mb-6 font-normal">
                        JustBusinessClass.us was created from a single observation: the enormous, opaque gap between published retail airline prices and what major consolidator desks actually pay for unlisted premium seat allocations.
                    </p>
                    <p class="text-slate-700 text-base leading-relaxed mb-6 font-normal">
                        While retail portals force travelers to navigate rigid search forms and impersonal automated call trees, we recognized that true luxury travel requires human intelligence—understanding layover comfort, lie-flat seat specs, and bilateral airline alliance rules.
                    </p>
                    <p class="text-slate-700 text-base leading-relaxed font-normal">
                        What began as an elite flight atelier with a focused client list has grown into a premier travel concierge partnering with over 60 global carriers, managing confidential corporate accounts, and orchestrating thousands of transatlantic flights every year.
                    </p>
                </div>

                <div class="lg:col-span-7">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Story Feature Card 1 -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mb-6">
                                <x-heroicon-m-user-group class="w-6 h-6 text-amber-700" />
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-950 mb-2">1:1 Dedicated Advisors</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                You work with a designated flight advisor who knows your seating preferences, frequent flyer programs, and travel rhythm.
                            </p>
                        </div>

                        <!-- Story Feature Card 2 -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mb-6">
                                <x-heroicon-m-building-office-2 class="w-6 h-6 text-amber-700" />
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-950 mb-2">Direct Carrier Contracts</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Bilateral contract allocations across SkyTeam, Star Alliance, and Oneworld mean exclusive rates not listed on Google Flights.
                            </p>
                        </div>

                        <!-- Story Feature Card 3 -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mb-6">
                                <x-heroicon-m-shield-check class="w-6 h-6 text-amber-700" />
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-950 mb-2">Full Flight Disruption Care</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                If a flight is delayed or weather-impacted, our operations desk secures priority re-protection before you even reach the airport.
                            </p>
                        </div>

                        <!-- Story Feature Card 4 -->
                        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/90 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-2xl bg-amber-100 text-amber-800 flex items-center justify-center mb-6">
                                <x-heroicon-m-clock class="w-6 h-6 text-amber-700" />
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-950 mb-2">24/7 Operations Desk</h3>
                            <p class="text-sm text-slate-600 leading-relaxed">
                                Headquartered in Midtown Manhattan with active concierge coverage 24 hours a day, 365 days a year across every continent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 3: KEY METRICS / "A DECADE IN NUMBERS" -->
    <section class="py-20 sm:py-24 bg-slate-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none select-none opacity-20">
            <div class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-amber-500 rounded-full blur-[140px]"></div>
            <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] bg-amber-700 rounded-full blur-[130px]"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10 text-center">
            <span class="text-xs font-bold uppercase tracking-lux text-amber-300 block mb-3">Proven Track Record</span>
            <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-white tracking-tight mb-4">
                A Decade in <span class="italic font-normal font-serif text-gold-gradient">Numbers</span>
            </h2>
            <p class="text-slate-300 max-w-xl mx-auto text-base mb-16">
                Measurable results delivered to private aviation executives, family offices, and luxury leisure travelers.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 sm:gap-8">
                <!-- Metric 1 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">10+</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Years Experience</div>
                </div>

                <!-- Metric 2 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">60+</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Airline Partners</div>
                </div>

                <!-- Metric 3 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">15K+</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Travelers Booked</div>
                </div>

                <!-- Metric 4 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">90%</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Repeat Clients</div>
                </div>

                <!-- Metric 5 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">60%</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Max Savings</div>
                </div>

                <!-- Metric 6 -->
                <div class="bg-white/5 border border-white/10 rounded-3xl p-6 backdrop-blur-xl">
                    <div class="font-serif text-4xl sm:text-5xl font-bold text-amber-300 mb-2">365</div>
                    <div class="text-xs font-bold uppercase tracking-wider text-slate-300">Days / Year Active</div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 4: CORE PILLARS & VALUES ("WHAT WE'RE MADE OF") -->
    <section class="py-20 sm:py-28 bg-white border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Guiding Principles</span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight">
                    What We're <span class="italic font-normal font-serif text-gold-gradient">Made Of</span>
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-3">
                    The non-negotiable standards that govern every route we research and ticket we issue.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Pillar 1: Passion -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        01
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Uncompromising Passion</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        We are genuine aviation obsessives. We study aircraft seat configurations, tail numbers, catering partnerships, and lounge refurbishments so you experience the finest in the sky.
                    </p>
                </div>

                <!-- Pillar 2: Excellence -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        02
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Service Excellence</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        From securing preferred bulkhead bassinets or quiet forward suites to coordinating private car transfers, every detail is engineered with precision.
                    </p>
                </div>

                <!-- Pillar 3: Innovation -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        03
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Pricing Innovation</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        A decade of proprietary pricing tools and routing combinations allows us to uncover wholesale allocations that standard retail aggregators cannot see.
                    </p>
                </div>

                <!-- Pillar 4: Trust -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        04
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Complete Client Trust</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Transparent pricing, zero hidden charges, and price-match confidence. We only recommend flight itineraries that we would gladly book for ourselves.
                    </p>
                </div>

                <!-- Pillar 5: Teamwork -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        05
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Specialist Teamwork</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Your direct advisor is backed by senior fare auditors, ticketing specialists, and 24/7 flight trackers working behind the scenes for seamless execution.
                    </p>
                </div>

                <!-- Pillar 6: Transparency -->
                <div class="p-8 rounded-[2rem] bg-slate-50 border border-slate-200/90 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600 text-white flex items-center justify-center font-bold font-serif text-xl mb-6 shadow-sm">
                        06
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-slate-950 mb-3">Absolute Transparency</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        We provide clear comparisons between published retail fares and our net wholesale rates, detailing baggage allowances, seat pitch, and change flexibility.
                    </p>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 5: REAL ADVISORS / RELATIONSHIPS -->
    <section class="py-20 sm:py-28 bg-slate-50 border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6">
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-3">Direct Human Connection</span>
                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.14] mb-6">
                        Real Advisors. <br>
                        <span class="italic font-normal font-serif text-gold-gradient">Real Relationships.</span>
                    </h2>
                    <p class="text-slate-700 text-base leading-relaxed mb-6 font-normal">
                        When you contact JustBusinessClass.us, you aren’t routed through automated menus or offshore tiers. You are paired directly with a licensed flight advisor who owns your journey from first inquiry to safe return.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <x-heroicon-m-check-circle class="w-5 h-5 text-amber-600 shrink-0 mt-0.5" />
                            <span class="text-sm text-slate-800 font-medium">Direct phone, WhatsApp, and private email access to your advisor.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-heroicon-m-check-circle class="w-5 h-5 text-amber-600 shrink-0 mt-0.5" />
                            <span class="text-sm text-slate-800 font-medium">Unbiased comparisons across airlines, alliances, and aircraft types.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-heroicon-m-check-circle class="w-5 h-5 text-amber-600 shrink-0 mt-0.5" />
                            <span class="text-sm text-slate-800 font-medium">Immediate human assistance during schedule disruptions or weather delays.</span>
                        </div>
                    </div>

                    <a href="tel:18005550147" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 transition-colors">
                        <span>Meet Our Desk by Phone: (800) 555-0147</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                    </a>
                </div>

                <div class="lg:col-span-6">
                    <div class="p-8 sm:p-12 rounded-[2.5rem] bg-white border border-slate-200/90 shadow-xl relative overflow-hidden">
                        <div class="w-14 h-14 rounded-2xl bg-amber-50 border border-amber-200 flex items-center justify-center mb-6">
                            <x-heroicon-m-sparkles class="w-7 h-7 text-amber-700" />
                        </div>
                        <blockquote class="font-serif text-2xl sm:text-3xl text-slate-950 font-bold leading-snug mb-6 italic">
                            &ldquo;Our promise is simple: to make transatlantic and transpacific travel effortlessly luxurious, saving you thousands while ensuring peace of mind at 35,000 feet.&rdquo;
                        </blockquote>
                        <div class="flex items-center gap-4 pt-6 border-t border-slate-100">
                            <div>
                                <div class="font-serif text-lg font-bold text-slate-950">Senior Partner &amp; Aviation Desk</div>
                                <div class="text-xs text-slate-500 font-medium">JustBusinessClass.us Midtown Manhattan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 6: FAQ ACCORDION -->
    <section id="faq" class="py-20 sm:py-28 bg-white border-b border-slate-200">
        <x-ui.container size="default">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Everything You Need to Know</span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight">
                    Frequently Asked <span class="italic font-normal font-serif text-gold-gradient">Questions</span>
                </h2>
                <p class="text-slate-600 text-sm sm:text-base mt-3">
                    The questions travelers ask before booking with our concierge desk.
                </p>
            </div>

            <div class="space-y-4 max-w-3xl mx-auto">
                @foreach ($aboutFaqs as $index => $faq)
                    <div class="bg-slate-50 rounded-2xl border border-slate-200/90 transition-all overflow-hidden shadow-2xs">
                        <button type="button"
                                wire:click="toggleFaq({{ $index }})"
                                class="w-full px-6 py-5 flex items-center justify-between text-left gap-4 hover:bg-slate-100/60 transition-colors">
                            <span class="font-serif text-lg sm:text-xl font-bold text-slate-950">
                                {{ $faq['question'] }}
                            </span>
                            <span class="p-1 rounded-full bg-white border border-slate-200 shrink-0 text-slate-600">
                                @if ($openFaq === $index)
                                    <x-heroicon-m-minus class="w-4 h-4 text-amber-700" />
                                @else
                                    <x-heroicon-m-plus class="w-4 h-4" />
                                @endif
                            </span>
                        </button>

                        @if ($openFaq === $index)
                            <div class="px-6 pb-6 pt-2 border-t border-slate-200 text-sm sm:text-base text-slate-700 leading-relaxed font-normal">
                                {{ $faq['answer'] }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 7: QUOTATION FORM ON ABOUT PAGE -->
    <section id="quote" class="py-20 sm:py-24 bg-slate-50 border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Experience the Difference</span>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight">
                    Request an Unlisted <span class="italic font-normal font-serif text-gold-gradient">Flight Proposal</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-700 mt-3 font-medium">
                    Submit your itinerary below. Our desk will audit wholesale consolidator seat blocks and respond with your customized proposal within 30 minutes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <livewire:components.quote-form />
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 8: DARK BG CTA SECTION -->
    <section class="py-24 sm:py-32 bg-navy text-white relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none select-none opacity-20">
            <div class="absolute -top-40 right-1/4 w-[600px] h-[600px] bg-gold rounded-full blur-[140px]"></div>
            <div class="absolute -bottom-40 left-1/4 w-[500px] h-[500px] bg-gold-600 rounded-full blur-[130px]"></div>
        </div>

        <x-ui.container size="default" class="relative z-10 text-center">
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-8 h-[1px] bg-gold/50"></span>
                <span class="text-xs font-semibold uppercase tracking-lux text-gold-gradient">
                    Direct Private Concierge Desk
                </span>
                <span class="w-8 h-[1px] bg-gold/50"></span>
            </div>

            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-[1.12] mb-6">
                Your Advisor is <br class="hidden sm:inline">
                <span class="italic font-normal font-serif text-gold-gradient">One Call Away</span>
            </h2>

            <p class="text-base sm:text-lg text-slate-200 max-w-2xl mx-auto leading-relaxed mb-12 font-medium">
                Avoid generic call centers and automated chatbots. Speak with a dedicated airline consolidator advisor ready to secure your premier business and first class flights with immediate confirmation.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left mb-12">
                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <x-heroicon-m-phone class="w-5 h-5 text-gold" />
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Direct Advisor Desk</span>
                    <a href="tel:18005550147" class="text-lg sm:text-xl font-bold text-white hover:text-gold transition-colors block">
                        (800) 555-0147
                    </a>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">Toll-Free USA · Available 24/7</span>
                </div>

                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <x-heroicon-m-envelope class="w-5 h-5 text-gold" />
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Support Email</span>
                    <a href="mailto:concierge@justbusinessclass.us" class="text-base sm:text-lg font-bold text-white hover:text-gold transition-colors break-all block">
                        concierge@justbusinessclass.us
                    </a>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">Private Proposals &amp; Inquiries</span>
                </div>

                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <x-heroicon-m-map-pin class="w-5 h-5 text-gold" />
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Executive Office</span>
                    <div class="text-base sm:text-lg font-bold text-white block">
                        100 Park Avenue
                    </div>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">New York, NY 10017 · Suite 1600</span>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="tel:18005550147"
                   class="w-full sm:w-auto px-9 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-lux-gold flex items-center justify-center gap-2.5">
                    <x-heroicon-m-phone class="w-4 h-4 text-white" />
                    <span>Dial (800) 555-0147</span>
                </a>
                <a href="https://wa.me/18005550147"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto px-8 py-4 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2.5 shadow-md">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 2C6.495 2 2 6.496 2 12.032c0 1.986.58 3.842 1.583 5.414L2 22l4.735-1.543a10.02 10.02 0 0 0 5.296 1.511c5.536 0 10.031-4.496 10.031-10.032C22.062 6.496 17.567 2 12.031 2zm5.82 14.283c-.244.686-1.42 1.32-1.956 1.405-.512.08-1.18.115-1.905-.116a12.87 12.87 0 0 1-4.004-2.14 11.235 11.235 0 0 1-2.905-3.627c-.443-.762-.47-1.632-.073-2.112.222-.269.49-.49.733-.733.268-.268.423-.377.633-.024.232.39 1.157 2.825 1.258 3.033.1.207.037.402-.09.609-.127.207-.285.347-.456.559-.17.21-.358.44-.153.791.205.352.912 1.503 1.957 2.433 1.346 1.198 2.482 1.568 2.834 1.743.352.174.559.146.766-.09.208-.236.888-1.036 1.127-1.39.239-.353.477-.294.79-.178.314.116 1.996.94 2.337 1.11.341.17.57.255.654.398.084.143.084.827-.16 1.513z"/>
                    </svg>
                    <span>Message on WhatsApp</span>
                </a>
            </div>
        </x-ui.container>
    </section>
</div>
