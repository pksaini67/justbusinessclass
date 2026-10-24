<div class="relative overflow-hidden bg-pure">
    <!-- JSON-LD TravelAgency & FlightReservation Schema -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "TravelAgency",
          "@@id": "https://justbusinessclass.us/#organization",
          "name": "JustBusinessClass.us",
          "url": "https://justbusinessclass.us",
          "logo": "{{ asset('images/logo.svg') }}",
          "image": "{{ asset('images/hero/business-class-luxury-cabin.jpg') }}",
          "telephone": "+1-800-555-0147",
          "email": "concierge@justbusinessclass.us",
          "priceRange": "$$$$",
          "description": "Boutique flight atelier providing privileged access to unpublished international business and first class airline consolidator allocations with up to 60% savings.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "100 Park Avenue",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10017",
            "addressCountry": "US"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 40.7512,
            "longitude": -73.9774
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
          },
          "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1420",
            "bestRating": "5",
            "worstRating": "1"
          },
          "sameAs": [
            "https://twitter.com/justbizclass",
            "https://www.linkedin.com/company/justbusinessclass"
          ]
        },
        {
          "@@type": "WebSite",
          "@@id": "https://justbusinessclass.us/#website",
          "url": "https://justbusinessclass.us",
          "name": "JustBusinessClass.us",
          "description": "Concierge Business & First Class Flights USA",
          "publisher": {
            "@@id": "https://justbusinessclass.us/#organization"
          },
          "potentialAction": {
            "@@type": "SearchAction",
            "target": "https://justbusinessclass.us/deals?q={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
      ]
    }
    </script>

    <!-- SECTION 1 & 2: HERO (Atmospheric Dark Gold & Champagne Business Cabin with Silver & White Accents) -->
    <section class="relative min-h-[95vh] lg:min-h-screen flex flex-col justify-between pt-32 sm:pt-36 pb-24 sm:pb-32 bg-[#0C0A07] overflow-hidden border-b border-[#2C2416]">
        <!-- Premium Business Class Cabin Background with Dark Golden Vignette & Glow -->
        <div class="absolute inset-0 z-0 select-none pointer-events-none">
            <img src="{{ asset('images/hero/business-class-luxury-cabin.jpg') }}"
                 alt="Private Luxury Business Class Suite Cabin"
                 class="w-full h-full object-cover opacity-60 filter brightness-[0.72] contrast-[1.08] scale-105 transition-transform duration-1000"
                 width="1920" height="1080">
            <!-- Warm Dark Golden Cinematic Radial & Gradient Overlays -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#0A0805]/90 via-[#100C07]/75 to-[#0A0805]/95"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_rgba(212,184,119,0.22)_0%,_transparent_70%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,_rgba(184,147,79,0.18)_0%,_transparent_60%)]"></div>
            <!-- Subtle Gold Atmospheric Noise/Grid Line (Hairline Accents) -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(212,184,119,0.03)_1px,transparent_1px),linear-gradient(to_bottom,rgba(212,184,119,0.03)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10 my-auto">
            <div class="max-w-4xl mx-auto text-center pt-6 pb-14" data-reveal>
                <!-- Eyebrow label with shimmering gold & silver hairlines -->
                <div class="inline-flex items-center gap-3.5 mb-6 px-4 py-1.5 rounded-full bg-[#1A140B]/80 border border-gold-400/30 backdrop-blur-md shadow-[0_0_20px_rgba(212,184,119,0.15)]">
                    <span class="w-6 h-[1px] bg-gradient-to-r from-transparent via-gold-300 to-white"></span>
                    <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-lux text-gold-300">
                        {{ $content['hero']['eyebrow'] }}
                    </span>
                    <span class="w-6 h-[1px] bg-gradient-to-l from-transparent via-gold-300 to-white"></span>
                </div>

                <!-- H1 Heading: White, Silver & Gold Shimmer -->
                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-white leading-[1.08] mb-6 drop-shadow-[0_4px_16px_rgba(0,0,0,0.6)]">
                    Fly Business Class <span class="italic font-normal font-serif text-gold-shimmer">for Less.</span>
                </h1>

                <!-- Subcopy in polished Silver & Platinum tones -->
                <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed mb-10 text-silver-shimmer drop-shadow-sm">
                    {{ $content['hero']['subcopy'] }}
                </p>

                <!-- Dual CTAs: Glowing Gold & Polished Silver Glass -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-14">
                    <a href="#quote"
                       class="w-full sm:w-auto px-9 py-4 bg-gradient-to-r from-[#D4B877] via-[#C6A667] to-[#A68037] hover:from-[#E8D2A4] hover:to-[#B8934F] text-[#0C0A07] font-bold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-[0_10px_30px_rgba(212,184,119,0.35)] hover:shadow-[0_15px_35px_rgba(212,184,119,0.5)] flex items-center justify-center gap-2.5 group">
                        <span>Get the Best Price</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4 text-[#0C0A07] group-hover:translate-x-1 transition-transform" />
                    </a>
                    <a href="tel:18005550147"
                       class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/15 text-white border border-slate-300/40 hover:border-gold-400/80 text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2 backdrop-blur-xl shadow-lg group">
                        <x-heroicon-m-phone class="w-4 h-4 text-gold-300 group-hover:scale-110 transition-transform" />
                        <span class="text-slate-100 group-hover:text-gold-200">Call for Unpublished Rates</span>
                    </a>
                </div>

                <!-- Inline Trust Stats Bar in Silver, Gold & White -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-[#382E1C]/80">
                    @foreach ($content['hero']['stats'] as $stat)
                        <div class="text-center group">
                            <div class="font-serif text-2xl sm:text-3xl font-bold text-gold-shimmer drop-shadow-sm group-hover:scale-105 transition-transform duration-300">{{ $stat['value'] }}</div>
                            <div class="text-[11px] sm:text-xs text-slate-300 uppercase tracking-wider font-semibold mt-1">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-ui.container>

        <!-- SECTION 3: QUOTE FORM WIDGET (Overlaps bottom of Hero with Glassmorphism) -->
        <div id="quote" class="relative z-20 max-w-6xl mx-auto px-4 pb-24 sm:px-6 w-full -mb-28 sm:-mb-32" data-reveal>
            <livewire:components.quote-form />
        </div>
    </section>

    <!-- SECTION 4: AIRLINE PARTNERS LOGOS MARQUEE (From Database Table) -->
    <section class="bg-white overflow-hidden" data-reveal style="padding-top:24px; padding-bottom: 24px;">
        <div class="max-w-7xl mx-auto px-4 text-center mb-8">
            <h3 class="text-xl sm:text-3xl uppercase tracking-lux text-silver-500 font-semibold">
                Featured Airlines
            </h3>
        </div>

        <!-- Marquee Track with Airline Logos -->
        <div class="relative w-full overflow-hidden py-2">
            <!-- Left and Right Subtle Fade Masks -->
            <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-[#FAFAFA] to-transparent z-10"></div>
            <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-[#FAFAFA] to-transparent z-10"></div>

            <div class="animate-marquee flex items-center gap-12 sm:gap-16">
                @for ($loop_repeat = 0; $loop_repeat < 4; $loop_repeat++)
                    @foreach ($marqueeAirlines as $airline)
                        @if ($airline->logo_url)
                            <div class="flex items-center shrink-0 group">
                                <a href="{{ route('airlines.show', $airline->slug) }}" 
                                   wire:navigate
                                   title="{{ $airline->name }}"
                                   class="h-12 sm:h-14 px-4 py-2 rounded-xl flex items-center justify-center transition-all duration-300 opacity-80 hover:opacity-100 hover:scale-105">
                                    <img src="{{ $airline->logo_url }}" 
                                         alt="{{ $airline->name }}" 
                                         class="h-7 sm:h-9 max-w-[140px] sm:max-w-[160px] w-auto object-contain transition-transform" 
                                         loading="lazy">
                                </a>
                                <span class="w-1.5 h-1.5 rounded-full bg-gold-400/40 ml-8 sm:ml-12"></span>
                            </div>
                        @endif
                    @endforeach
                @endfor
            </div>
        </div>
    </section>

    <!-- SECTION 5: WHAT WE DO / ABOUT SNIPPET (Light Editorial Split Section) -->
    <section id="about" class="py-24 sm:py-32 bg-silver-50 text-navy relative border-b border-silver-200">
        <x-ui.container size="default">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left Column: Editorial Story -->
                <div class="lg:col-span-7" data-reveal>
                    <x-ui.section-heading
                        align="left"
                        eyebrow="{{ $content['about']['eyebrow'] }}"
                        title="{{ $content['about']['heading'] }}"
                    />

                    <div class="space-y-5 text-silver-700 text-sm sm:text-base leading-relaxed mb-8 font-normal">
                        <p>{{ $content['about']['paragraph_1'] }}</p>
                        <p>{{ $content['about']['paragraph_2'] }}</p>
                    </div>

                    <!-- Category Link Chips -->
                    <div class="flex flex-wrap gap-2 pt-2">
                        @foreach ($content['about']['chips'] as $chip)
                            <a href="{{ $chip['url'] }}"
                               class="inline-flex items-center px-4 py-2 rounded-2xl text-xs font-semibold bg-white border border-silver-200 hover:border-gold hover:text-gold-800 transition-colors shadow-sm">
                                <span>{{ $chip['label'] }}</span>
                                <x-heroicon-m-arrow-up-right class="w-3.5 h-3.5 ml-1.5 text-gold-600" />
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Right Column: Animated Stat Counters on Glass White Card -->
                <div class="lg:col-span-5"
                     data-reveal
                     x-data="{
                        shown: false,
                        startCounters() {
                            if (this.shown) return;
                            this.shown = true;
                            ['c1','c2','c3','c4'].forEach(id => {
                                let el = document.getElementById(id);
                                if (!el) return;
                                let target = parseInt(el.getAttribute('data-target'));
                                let count = 0;
                                let step = Math.ceil(target / 40);
                                let timer = setInterval(() => {
                                    count += step;
                                    if (count >= target) { count = target; clearInterval(timer); }
                                    el.innerText = count;
                                }, 35);
                            });
                        }
                     }"
                     x-intersect="startCounters()">
                    <div class="bg-white/95 backdrop-blur-xl text-navy rounded-3xl p-8 sm:p-10 shadow-lux-card border border-silver-200 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-48 h-48 bg-gold-100/50 rounded-full blur-3xl pointer-events-none"></div>

                        <div class="text-xs uppercase tracking-lux text-gold-700 font-bold mb-8 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-gold-600 animate-ping"></span>
                            Performance Standards
                        </div>

                        <div class="grid grid-cols-2 gap-8">
                            <div class="border-b border-silver-200 pb-6">
                                <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-700 flex items-baseline">
                                    <span id="c1" data-target="15">0</span><span>K+</span>
                                </div>
                                <div class="text-xs text-silver-500 mt-2 uppercase tracking-wider font-semibold">Distinguished Travelers</div>
                            </div>
                            <div class="border-b border-silver-200 pb-6">
                                <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-700 flex items-baseline">
                                    <span id="c2" data-target="60">0</span><span>+</span>
                                </div>
                                <div class="text-xs text-silver-500 mt-2 uppercase tracking-wider font-semibold">Global Airline Alliances</div>
                            </div>
                            <div class="pt-2">
                                <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-700 flex items-baseline">
                                    <span id="c3" data-target="90">0</span><span>%</span>
                                </div>
                                <div class="text-xs text-silver-500 mt-2 uppercase tracking-wider font-semibold">Repeat & Referred Clients</div>
                            </div>
                            <div class="pt-2">
                                <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-700 flex items-baseline">
                                    <span id="c4" data-target="24">0</span><span>/7</span>
                                </div>
                                <div class="text-xs text-silver-500 mt-2 uppercase tracking-wider font-semibold">Priority Concierge Desk</div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-silver-200 flex items-center justify-between text-xs text-silver-500 font-medium">
                            <span>Licensed Travel Agency</span>
                            <span class="text-gold-700 font-bold">ARC / IATA Accredited</span>
                        </div>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 6: SIGNATURE SAVINGS & ROUTE INTELLIGENCE (No Direct Fares, 'Get the Best Price' CTA) -->
    <section id="deals" class="py-24 sm:py-32 bg-pure relative">
        <x-ui.container size="default">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Route Intelligence & Private Allotments"
                    title="Signature Business Class Routes"
                    subtitle="Wholesale consolidator inventory across premier international flight corridors. We secure the best market price with verified lie-flat seating."
                />
            </div>

            <!-- Route Cards Grid with Glassmorphism and Luxury Shadow -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                @foreach ($signatureSavings as $deal)
                    <div class="group bg-white rounded-3xl border border-silver-200 hover:border-gold/60 shadow-lux-card hover:shadow-lux-card-hover overflow-hidden transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between" data-reveal>
                        <!-- Destination Image Slot -->
                        <div class="relative h-48 overflow-hidden bg-silver-100">
                            <!-- Comment: Replace with high-resolution photo at /public/images/destinations/{{ strtolower($deal['city']) }}.jpg -->
                            <img src="{{ asset('images/destinations/' . strtolower(str_replace(' ', '', $deal['city'])) . '.svg') }}"
                                 alt="{{ $deal['route'] }}"
                                 class="w-full h-full object-cover hover-zoom-img"
                                 loading="lazy"
                                 width="400" height="250">
                            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/20 to-transparent"></div>

                            <!-- Gold Savings Badge -->
                            <div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-gold-gradient text-white font-bold text-xs uppercase tracking-wider shadow-md">
                                Up to {{ $deal['savings_pct'] }}% Off
                            </div>

                            <!-- Cabin Pill -->
                            <div class="absolute bottom-3 left-3 text-[10px] uppercase tracking-widest text-gold-800 font-bold bg-white/90 px-3 py-1 rounded-lg border border-silver-200 shadow-sm">
                                {{ $deal['cabin'] }}
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-serif text-lg font-bold text-navy group-hover:text-gold-700 transition-colors">
                                    {{ $deal['route'] }}
                                </h3>
                                <p class="text-xs text-silver-500 mt-1 mb-2 flex items-center gap-1.5">
                                    <x-heroicon-m-paper-airplane class="w-3.5 h-3.5 text-gold-600" />
                                    <span>{{ $deal['airline'] }}</span>
                                </p>
                                <span class="inline-block text-[11px] text-silver-600 bg-silver-50 px-2 py-0.5 rounded border border-silver-200 font-medium">
                                    {{ $deal['highlight'] }}
                                </span>
                            </div>

                            <div class="pt-5 mt-4 border-t border-silver-100">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-xs text-silver-500 font-medium">Unpublished Allotment</span>
                                    <span class="text-xs font-bold text-gold-700 uppercase tracking-wider">Wholesale Tier</span>
                                </div>

                                <a href="#quote"
                                   class="w-full py-3 px-4 rounded-2xl bg-gold-gradient hover:bg-gold-gradient-hover text-white text-xs font-semibold uppercase tracking-wider flex items-center justify-center gap-2 shadow-lux-gold transition-all duration-300">
                                    <span>Get the Best Price</span>
                                    <x-heroicon-m-arrow-right class="w-3.5 h-3.5" />
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Show More / Less Toggle Button -->
            <div class="text-center" data-reveal>
                <button type="button"
                        wire:click="toggleDeals"
                        class="px-8 py-3.5 rounded-2xl bg-white hover:bg-silver-50 text-navy border border-silver-300 hover:border-gold/60 text-xs uppercase tracking-lux transition-all duration-300 inline-flex items-center gap-2 shadow-sm">
                    <span>{{ $showAllDeals ? 'Show Fewer Routes' : 'View All 12 Signature Routes' }}</span>
                    <x-heroicon-m-chevron-down class="w-4 h-4 text-gold-700 transition-transform {{ $showAllDeals ? 'rotate-180' : '' }}" />
                </button>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 7: HOW OUR PRICING WORKS (4 Numbered Horizontal Cards) -->
    <section id="pricing" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <x-ui.container size="default">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="The Wholesale Advantage"
                    title="How Our Pricing Works"
                    subtitle="Transparent mechanisms that unlock unadvertised wholesale seat inventory for corporate and discerning private travelers."
                />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($content['pricing_steps'] as $step)
                    <div class="p-8 bg-white/95 rounded-3xl border border-silver-200 hover:border-gold/50 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300 relative group" data-reveal>
                        <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-200 group-hover:text-gold-600 transition-colors mb-6">
                            {{ $step['step'] }}
                        </div>
                        <h3 class="font-serif text-xl font-bold text-navy mb-3">
                            {{ $step['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                            {{ $step['description'] }}
                        </p>
                        <div class="w-8 h-[2px] bg-gold/50 mt-6 group-hover:w-16 transition-all duration-300"></div>
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 8: ADVISOR / CONCIERGE SPLIT SECTION -->
    <section class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative overflow-hidden">
        <x-ui.container size="default">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left: Cinematic Image Slot of Private Flight Lounge / Advisor -->
                <div class="lg:col-span-6 relative" data-reveal>
                    <div class="aspect-[4/3] rounded-3xl overflow-hidden border border-silver-200 shadow-lux-card bg-silver-50 relative">
                        <!-- Comment: Place high-end concierge advisor or first class lounge image at /public/images/advisor.jpg -->
                        <img src="{{ asset('images/hero/advisor.svg') }}"
                             alt="Dedicated Flight Advisor Desk"
                             class="w-full h-full object-cover hover-zoom-img"
                             loading="lazy"
                             width="800" height="600">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/90 via-transparent to-transparent"></div>

                        <!-- Floating VIP Badge -->
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-white/95 border border-silver-200 shadow-xl backdrop-blur-xl flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></div>
                                <div>
                                    <div class="text-xs font-bold text-navy">Julian Vance, Senior Desk Partner</div>
                                    <div class="text-[10px] text-silver-500 font-medium">Transatlantic & Pacific Routes Specialist</div>
                                </div>
                            </div>
                            <span class="text-xs font-serif italic text-gold-700 font-bold">10 Yrs Concierge</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Editorial Copy & Advisor Metrics -->
                <div class="lg:col-span-6" data-reveal>
                    <x-ui.section-heading
                        align="left"
                        eyebrow="White Glove Route Mastery"
                        title="Your Dedicated Flight Concierge"
                        subtitle="No automated phone trees. No outsourced chat bots. You work directly with a senior aviation specialist who understands aircraft sub-types, seat maps, and airport connection privileges."
                    />

                    <!-- 4 Advisor Trust Stats -->
                    <div class="grid grid-cols-2 gap-6 my-8 py-6 border-y border-silver-200">
                        @foreach ($content['concierge_stats'] as $stat)
                            <div>
                                <div class="font-serif text-3xl font-bold text-gold-700">{{ $stat['value'] }}</div>
                                <div class="text-xs text-silver-500 mt-1 uppercase tracking-wider font-semibold">{{ $stat['label'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-4">
                        <x-ui.button href="#quote" size="lg" variant="primary">
                            Get the Best Price
                        </x-ui.button>
                        <x-ui.button href="tel:18005550147" size="lg" variant="secondary">
                            <x-heroicon-m-phone class="w-4 h-4 mr-2 text-gold-600" />
                            Call (800) 555-0147
                        </x-ui.button>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 9: SIX REASONS TO BOOK WITH US (6-Card Grid) -->
    <section class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <x-ui.container size="default">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Why Elite Flyers Choose Us"
                    title="Six Pillars of Exceptional Travel"
                    subtitle="Engineered for corporate executives, high-net-worth families, and frequent international flyers who demand the highest aviation standard."
                />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($content['reasons'] as $reason)
                    <div class="p-8 bg-white/95 rounded-3xl border border-silver-200 hover:border-gold/50 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300 hover:-translate-y-1.5 group" data-reveal>
                        <div class="w-12 h-12 rounded-2xl bg-gold-50 border border-gold/30 flex items-center justify-center text-gold-600 mb-6 group-hover:scale-110 group-hover:border-gold transition-all shadow-sm">
                            @if ($reason['icon'] === 'sparkles')
                                <x-heroicon-o-sparkles class="w-6 h-6 text-gold-600" />
                            @elseif ($reason['icon'] === 'clock')
                                <x-heroicon-o-clock class="w-6 h-6 text-gold-600" />
                            @elseif ($reason['icon'] === 'arrows-pointing-out')
                                <x-heroicon-o-arrows-pointing-out class="w-6 h-6 text-gold-600" />
                            @elseif ($reason['icon'] === 'academic-cap')
                                <x-heroicon-o-academic-cap class="w-6 h-6 text-gold-600" />
                            @elseif ($reason['icon'] === 'phone-arrow-up-right')
                                <x-heroicon-o-phone-arrow-up-right class="w-6 h-6 text-gold-600" />
                            @else
                                <x-heroicon-o-shield-check class="w-6 h-6 text-gold-600" />
                            @endif
                        </div>
                        <h3 class="font-serif text-xl font-bold text-navy mb-3">
                            {{ $reason['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                            {{ $reason['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 10: HOW TO BOOK IN 4 STEPS -->
    <section class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative">
        <x-ui.container size="default">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Seamless Execution"
                    title="How to Book in 4 Simple Steps"
                    subtitle="From first route inquiry to boarding your lie-flat suite, we manage every detail with discretion and speed."
                />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                @foreach ($content['how_to_book'] as $index => $item)
                    <div class="relative flex flex-col justify-between p-7 bg-white rounded-3xl border border-silver-200 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300" data-reveal>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="font-serif text-3xl font-bold text-gold-700">0{{ $item['step'] }}</span>
                                <span class="text-[10px] uppercase tracking-lux text-silver-400 font-bold">Step {{ $item['step'] }}</span>
                            </div>
                            <h3 class="font-serif text-lg font-bold text-navy mb-2">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                                {{ $item['description'] }}
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-silver-100 text-[11px] text-gold-700 font-semibold uppercase tracking-wider">
                            {{ match((string)$item['step']) {
                                '1' => 'Dial or Request Online',
                                '2' => 'Consolidator Audit',
                                '3' => 'Best Price Proposal',
                                default => 'Confirmed E-Tickets'
                            } }}
                        </div>
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 11: PREMIER DESTINATIONS BY REGION -->
    <section id="destinations" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <x-ui.container size="wide">
            <div data-aos="fade-up">
                <x-ui.section-heading
                    eyebrow="Global Horizons"
                    title="Premier Destinations by Region"
                    subtitle="Discover preferred business class allocations to financial and leisure metropolises across seven continents."
                />
            </div>

            <!-- Mobile Snap Carousel / Desktop Grid -->
            <div class="flex lg:grid lg:grid-cols-7 gap-5 overflow-x-auto no-scrollbar pb-6 lg:pb-0 snap-x snap-mandatory">
                @foreach ($content['regions'] as $index => $region)
                    <div class="min-w-[260px] sm:min-w-[280px] lg:min-w-0 snap-center group relative aspect-[3/4] rounded-3xl overflow-hidden border border-silver-200 hover:border-gold/60 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-500"
                         data-aos="fade-up"
                         data-aos-delay="{{ 100 + ($index * 75) }}">
                        <!-- Background Image Slot -->
                        <img src="{{ asset('images/' . $region['image_slot']) }}"
                             alt="{{ $region['name'] }}"
                             class="w-full h-full object-cover hover-zoom-img"
                             loading="lazy"
                             width="300" height="400">
                        <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>

                        <!-- Card Content Overlay -->
                        <div class="absolute inset-0 p-5 flex flex-col justify-between">
                            <span class="text-[10px] uppercase tracking-widest text-gold-800 font-bold bg-white/90 px-2.5 py-1 rounded-lg w-fit border border-silver-200 shadow-sm">
                                Region
                            </span>
                            <div>
                                <h3 class="font-serif text-2xl font-bold text-navy group-hover:text-gold-700 transition-colors">
                                    {{ $region['name'] }}
                                </h3>
                                <p class="text-[11px] text-silver-600 mt-1 line-clamp-1 font-medium">
                                    {{ $region['cities'] }}
                                </p>
                                <div class="mt-4 pt-3 border-t border-silver-200">
                                    <a href="#quote" class="text-xs uppercase tracking-wider text-gold-700 hover:text-gold-800 font-bold flex items-center justify-between">
                                        <span>Get the Best Price</span>
                                        <x-heroicon-m-arrow-right class="w-3.5 h-3.5" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 12: POPULAR BUSINESS CLASS DESTINATIONS (Pill Cloud) -->
    <section class="py-16 sm:py-20 bg-pure border-t border-silver-200 relative">
        <x-ui.container size="default">
            <div class="text-center mb-8" data-reveal>
                <span class="text-xs uppercase tracking-lux text-gold-700 font-bold">
                    Popular Global Hubs
                </span>
                <h3 class="font-serif text-2xl sm:text-3xl text-navy font-bold mt-2">Book Business Class to Major Metropolises</h3>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-2.5 max-w-4xl mx-auto" data-reveal>
                @foreach ($content['popular_cities'] as $city)
                    <a href="#quote"
                       class="px-4 py-2.5 rounded-2xl bg-white hover:bg-gold-50 border border-silver-200 hover:border-gold/60 text-xs font-semibold text-silver-700 hover:text-gold-800 shadow-sm transition-all duration-200">
                        Business Class to {{ $city }} &rarr;
                    </a>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 13: TESTIMONIALS (Alpine Carousel + Rated Excellent Badge) -->
    <section id="testimonials" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative"
             x-data="{
                active: 0,
                total: {{ count($testimonials) }},
                next() { this.active = (this.active + 1) % this.total },
                prev() { this.active = (this.active - 1 + this.total) % this.total }
             }">
        <x-ui.container size="narrow">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Distinguished Client Experiences"
                    title="Tested by Those Who Fly Often"
                    subtitle="Authentic feedback from executives, managing partners, and luxury leisure flyers."
                />
            </div>

            <!-- Trust Badge Row -->
            <div class="flex items-center justify-center gap-3 mb-12" data-reveal>
                <div class="flex text-gold gap-1">
                    @for ($s = 0; $s < 5; $s++)
                        <x-heroicon-s-star class="w-5 h-5 text-gold-500" />
                    @endfor
                </div>
                <span class="text-xs uppercase tracking-widest font-bold text-navy">
                    Rated 4.98 / 5.0 · Over 15,000 Flown
                </span>
            </div>

            <!-- Testimonial Slider Card with Glassmorphism and Shadow -->
            <div class="relative bg-white/95 backdrop-blur-xl rounded-3xl p-8 sm:p-14 border border-silver-200 shadow-lux-card text-center overflow-hidden" data-reveal>
                <div class="absolute -top-12 -left-12 w-40 h-40 bg-gold-50 rounded-full blur-2xl pointer-events-none"></div>

                <div class="font-serif text-6xl text-gold-400 mb-6 leading-none select-none">“</div>

                <div class="relative min-h-[160px] sm:min-h-[140px] flex items-center justify-center">
                    @foreach ($testimonials as $index => $t)
                        <div x-show="active === {{ $index }}"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-3"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-cloak
                             class="max-w-2xl mx-auto">
                            <p class="font-serif text-lg sm:text-2xl text-navy italic leading-relaxed mb-6 font-normal">
                                {{ $t['quote'] }}
                            </p>
                            <div class="font-bold text-sm text-gold-700">{{ $t['author'] }}</div>
                            <div class="text-xs text-silver-500 mt-0.5">
                                {{ $t['role'] ?? '' }} @if(!empty($t['role']) && !empty($t['city'])) · @endif {{ $t['city'] ?? '' }}
                            </div>
                            @if(!empty($t['route']))
                                <div class="text-[11px] text-silver-400 uppercase tracking-widest mt-2 font-mono font-semibold">{{ $t['route'] }}</div>
                            @endif
                        </div>
                    @endforeach
                </div>

                <!-- Navigation Controls -->
                @if(count($testimonials) > 1)
                    <div class="flex items-center justify-center gap-4 mt-8 pt-6 border-t border-silver-100">
                        <button type="button"
                                @click="prev()"
                                aria-label="Previous testimonial"
                                class="p-2.5 rounded-full bg-silver-100 hover:bg-gold-50 hover:text-gold-700 text-navy border border-silver-200 transition-colors">
                            <x-heroicon-m-arrow-left class="w-4 h-4" />
                        </button>

                        <div class="flex gap-2">
                            @foreach ($testimonials as $index => $t)
                                <button type="button"
                                        @click="active = {{ $index }}"
                                        class="w-2.5 h-2.5 rounded-full transition-all"
                                        :class="active === {{ $index }} ? 'bg-gold w-6' : 'bg-silver-300'"></button>
                            @endforeach
                        </div>

                        <button type="button"
                                @click="next()"
                                aria-label="Next testimonial"
                                class="p-2.5 rounded-full bg-silver-100 hover:bg-gold-50 hover:text-gold-700 text-navy border border-silver-200 transition-colors">
                            <x-heroicon-m-arrow-right class="w-4 h-4" />
                        </button>
                    </div>
                @endif
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 14: FAQ (Livewire Accordion) -->
    <section id="faq" class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative">
        <x-ui.container size="narrow">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Intelligence & Transparency"
                    title="Frequently Asked Questions"
                    subtitle="Everything you need to know about our wholesale airline inventory, ticket issuing, and concierge service."
                />
            </div>

            <div class="space-y-4" data-reveal>
                @foreach ($faqs as $index => $faq)
                    <div class="rounded-3xl border border-silver-200 bg-white overflow-hidden shadow-sm transition-all {{ $openFaq === $index ? 'border-gold/60 shadow-lux-card' : 'hover:border-silver-300' }}">
                        <button type="button"
                                wire:click="toggleFaq({{ $index }})"
                                class="w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-serif text-lg sm:text-xl font-bold text-navy {{ $openFaq === $index ? 'text-gold-700' : '' }}">
                                {{ $faq['question'] }}
                            </span>
                            <span class="w-8 h-8 rounded-full bg-silver-100 flex items-center justify-center shrink-0 text-gold-700 transition-transform {{ $openFaq === $index ? 'rotate-180 bg-gold-50 text-gold-800' : '' }}">
                                <x-heroicon-m-chevron-down class="w-4 h-4" />
                            </span>
                        </button>

                        @if ($openFaq === $index)
                            <div class="px-6 pb-6 pt-2 border-t border-silver-100 text-sm sm:text-base text-silver-600 leading-relaxed font-normal">
                                {{ $faq['answer'] }}
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 15: PREMIER AIRLINES (8 Cards) -->
    <section id="airlines" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <x-ui.container size="default">
            <div data-reveal>
                <x-ui.section-heading
                    eyebrow="Alliance Excellence"
                    title="Premier Airlines We Partner With"
                    subtitle="Flagship carriers featuring lie-flat business suites, direct aisle access, and acclaimed inflight cellars."
                />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($content['premier_airlines'] as $airline)
                    <div class="group bg-white rounded-3xl border border-silver-200 hover:border-gold/60 p-6 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1.5 shadow-lux-card hover:shadow-lux-card-hover" data-reveal>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="font-mono text-xs text-gold-800 font-bold px-2.5 py-1 rounded-lg bg-gold-50 border border-gold/30">{{ $airline['code'] }}</span>
                                <span class="text-[10px] uppercase tracking-wider text-silver-500 font-bold">{{ $airline['badge'] }}</span>
                            </div>
                            <h3 class="font-serif text-2xl font-bold text-navy group-hover:text-gold-700 transition-colors">
                                {{ $airline['name'] }}
                            </h3>
                            <p class="text-xs text-silver-600 mt-2 leading-relaxed">
                                {{ $airline['tagline'] }}
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-silver-100">
                            <a href="#quote" class="text-xs uppercase tracking-wider text-gold-700 hover:text-gold-900 inline-flex items-center gap-1 font-bold">
                                <span>Get the Best Price</span>
                                <x-heroicon-m-arrow-right class="w-3.5 h-3.5" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 16: NEWSLETTER SIGNUP -->
    <section class="py-20 bg-pure border-t border-silver-200 relative">
        <x-ui.container size="narrow">
            <div class="bg-gradient-to-r from-silver-50 via-white to-silver-50 rounded-3xl p-8 sm:p-12 border border-silver-200 shadow-lux-card relative overflow-hidden" data-reveal>
                <div class="max-w-xl mx-auto text-center mb-8">
                    <span class="text-xs uppercase tracking-lux text-gold-700 font-bold">Confidential Flight Dispatches</span>
                    <h3 class="font-serif text-3xl sm:text-4xl text-navy font-bold mt-2">Private Wholesale Fare Advisory</h3>
                    <p class="text-xs sm:text-sm text-silver-600 mt-3 leading-relaxed">
                        Join over 10,000 frequent flyers receiving our bi-weekly dispatch of unpublished business and first class rate dumps.
                    </p>
                </div>

                <livewire:components.newsletter-signup />
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION 17: FINAL CTA BAND -->
    <section id="contact" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative overflow-hidden">
        <div class="absolute inset-0 z-0 pointer-events-none select-none">
            <!-- Comment: Place light luxury flight lounge photo at /public/images/lounge.jpg -->
            <img src="{{ asset('images/hero/lounge.svg') }}"
                 alt="Luxury Lounge Background"
                 class="w-full h-full object-cover opacity-25 filter blur-[2px]"
                 loading="lazy"
                 width="1920" height="800">
            <div class="absolute inset-0 bg-gradient-to-t from-silver-50 via-silver-50/80 to-silver-50"></div>
        </div>

        <x-ui.container size="narrow" class="relative z-10 text-center" data-reveal>
            <span class="text-xs uppercase tracking-lux text-gold-700 font-bold">Immediate Route Assistance</span>
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl text-navy font-bold mt-3 mb-6">
                Your Flight Advisor is One Call Away
            </h2>
            <p class="text-base sm:text-lg text-silver-600 max-w-xl mx-auto mb-10 leading-relaxed font-normal">
                Whether planning next week’s transatlantic board meeting or an ultra-luxury journey, our private aviation desk operates 24/7.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                <a href="#quote"
                   class="w-full sm:w-auto px-9 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-lux-gold flex items-center justify-center gap-2.5">
                    <span>Get the Best Price</span>
                    <x-heroicon-m-arrow-right class="w-4 h-4" />
                </a>
                <a href="tel:18005550147"
                   class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-silver-50 text-navy border border-silver-300 hover:border-gold/60 text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2 shadow-sm">
                    <x-heroicon-m-phone class="w-4 h-4 text-gold-600" />
                    <span>Dial (800) 555-0147</span>
                </a>
            </div>

            <div class="inline-flex items-center gap-2 text-xs text-silver-500 font-medium">
                <x-heroicon-m-map-pin class="w-4 h-4 text-gold-600" />
                <span>{{ $content['brand']['address'] }}</span>
            </div>
        </x-ui.container>
    </section>
</div>
