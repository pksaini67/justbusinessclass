<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- Breadcrumb & Hero Header -->
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
                <a href="{{ route('airlines.index') }}" wire:navigate class="hover:text-amber-700 transition-colors text-slate-800">
                    Airlines
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold">{{ $airline->name }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="max-w-3xl">
                    <!-- Eyebrow & Badges -->
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-slate-950 text-amber-300 shadow-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span>IATA: {{ $airline->code }}</span>
                        </span>

                        @if($airline->alliance)
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-900 bg-amber-100/90 px-3 py-1 rounded-full border border-amber-300/60 shadow-sm">
                                {{ $airline->alliance }} Alliance
                            </span>
                        @endif

                        <span class="text-xs font-bold uppercase tracking-wider text-slate-800 bg-slate-200/80 px-3 py-1 rounded-full border border-slate-300">
                            {{ $airline->cabin_class ?? 'Business & First Class' }}
                        </span>
                    </div>

                    <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-4">
                        {{ $airline->name }} <span class="italic font-normal font-serif text-gold-gradient">Business Class</span>
                    </h1>

                    @if($airline->summary)
                        <p class="text-base sm:text-lg text-slate-800 font-medium max-w-2xl leading-relaxed">
                            {{ $airline->summary }}
                        </p>
                    @endif

                    <!-- Star Rating & Review count -->
                    <div class="flex items-center gap-2 mt-4 text-xs font-bold text-slate-800">
                        <div class="flex text-amber-500">
                            @for($i = 0; $i < 5; $i++)
                                <x-heroicon-s-star class="w-4 h-4 fill-current" />
                            @endfor
                        </div>
                        <span class="text-slate-950 font-black text-sm">{{ number_format($airline->rating ?? 4.9, 1) }} / 5.0</span>
                        <span class="text-slate-500">· Premium Fleet Review</span>
                        <span class="text-slate-400">·</span>
                        <span class="text-emerald-700 font-semibold flex items-center gap-1">
                            <x-heroicon-m-check-badge class="w-4 h-4 text-emerald-600 inline" />
                            Consolidator Contract Active
                        </span>
                    </div>
                </div>

                <!-- Airline Large Brand Logo Card with Glassmorphism -->
                <div class="shrink-0">
                    <div class="w-36 h-36 sm:w-44 sm:h-44 rounded-3xl p-6 bg-white/95 backdrop-blur-xl border border-slate-300 shadow-[0_20px_45px_-12px_rgba(15,23,42,0.14),0_0_0_1px_rgba(229,231,235,0.9)] flex items-center justify-center">
                        @if($airline->logo_url)
                            <img src="{{ $airline->logo_url }}"
                                 alt="{{ $airline->name }} Logo"
                                 class="max-w-full max-h-full object-contain" />
                        @else
                            <div class="text-center">
                                <div class="font-serif text-3xl font-black text-slate-950">{{ $airline->code }}</div>
                                <div class="text-[10px] uppercase font-bold tracking-widest text-amber-700 mt-1">{{ $airline->name }}</div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION: EMBEDDED QUOTATION FORM FOR THIS AIRLINE -->
    <section class="py-16 sm:py-20 bg-slate-100/70 border-b border-slate-200 relative">
        <x-ui.container size="wide">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-50 border border-amber-300 text-amber-800 text-xs font-bold uppercase tracking-wider mb-2">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Live Allocations Available</span>
                </div>
                <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-slate-950 tracking-tight">
                    Check Wholesale Fares for <span class="italic font-normal font-serif text-gold-gradient">{{ $airline->name }}</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-700 mt-2 font-medium">
                    Submit your itinerary below. Our desk holds unlisted contract seats on {{ $airline->name }} and will confirm your customized wholesale rate within 30 minutes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <livewire:components.quote-form />
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION: EDITORIAL RICH CONTENT FROM ADMIN PANEL -->
    @if($airline->content)
        <section class="py-20 sm:py-24 bg-white border-b border-slate-200">
            <x-ui.container size="default">
                <!-- Rich Content from Filament RichEditor with Elegant Styling -->
                <div class="prose prose-slate prose-lg max-w-none prose-headings:font-serif prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-slate-950 prose-h2:text-3xl prose-h2:sm:text-4xl prose-h2:mt-12 prose-h2:mb-6 prose-h2:border-b prose-h2:border-slate-200 prose-h2:pb-4 prose-h3:text-2xl prose-h3:text-slate-900 prose-h3:mt-8 prose-h3:mb-3 prose-p:text-slate-800 prose-p:leading-relaxed prose-p:font-normal prose-li:text-slate-800 prose-li:my-1.5 prose-strong:text-slate-950 prose-strong:font-bold prose-a:text-amber-700 hover:prose-a:text-amber-800 prose-blockquote:border-l-amber-600 prose-blockquote:bg-slate-50 prose-blockquote:py-2 prose-blockquote:px-5 prose-blockquote:rounded-r-2xl prose-blockquote:text-slate-800 prose-blockquote:font-serif prose-blockquote:italic">
                    {!! $airline->content !!}
                </div>
            </x-ui.container>
        </section>
    @endif

    <!-- SECTION: OTHER FEATURED AIRLINES (1:1 CARDS CAROUSEL/GRID) -->
    @if($relatedAirlines->isNotEmpty())
        <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
            <x-ui.container size="wide">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-1">Fleet Directory</span>
                        <h3 class="font-serif text-3xl font-bold text-slate-950">
                            Explore Other <span class="italic font-normal font-serif text-gold-gradient">Premium Airlines</span>
                        </h3>
                    </div>
                    <a href="{{ route('airlines.index') }}" class="text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 flex items-center gap-1.5 transition-colors">
                        <span>View All {{ \App\Models\Airline::where('is_active', true)->count() }} Airlines</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7">
                    @foreach($relatedAirlines as $rel)
                        <a href="{{ route('airlines.show', $rel->slug) }}"
                           class="group relative aspect-square rounded-[2rem] p-7 bg-white/90 backdrop-blur-2xl border border-slate-200/80 shadow-[0_15px_35px_-8px_rgba(15,23,42,0.10),0_2px_6px_0_rgba(15,23,42,0.04)] hover:shadow-[0_28px_60px_-12px_rgba(15,23,42,0.22),0_0_0_1.5px_rgba(198,166,103,0.55)] hover:-translate-y-2 hover:scale-[1.015] transition-all duration-300 ease-out flex flex-col justify-between overflow-hidden">
                            
                            <!-- Ambient Hover Gradient Underlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-amber-50/60 via-white to-slate-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

                            <!-- Top Row: IATA Code badge & Arrow Action Button -->
                            <div class="relative z-10 flex items-center justify-between w-full">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-black tracking-widest uppercase bg-slate-950 text-amber-300 shadow-sm border border-slate-800">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                    <span>{{ $rel->code }}</span>
                                </span>

                                <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-700 border border-slate-200/80 group-hover:bg-slate-950 group-hover:text-amber-300 group-hover:border-slate-950 flex items-center justify-center transition-all duration-300 shadow-sm group-hover:scale-105">
                                    <x-heroicon-m-arrow-right class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-0.5" />
                                </div>
                            </div>

                            <!-- Center: Clean White Logo Stage with object-contain and NO box shadow on hover -->
                            <div class="relative z-10 flex flex-col items-center justify-center my-auto py-2 w-full">
                                <div class="w-full max-w-[190px] h-20 sm:h-24 rounded-2xl p-3.5 bg-white/95 border border-slate-200/70 flex items-center justify-center transition-all duration-300">
                                    @if($rel->logo_url)
                                        <img src="{{ $rel->logo_url }}" alt="{{ $rel->name }} Logo" class="w-full h-full object-contain object-center transition-transform duration-300 group-hover:scale-105" />
                                    @else
                                        <div class="font-serif font-black text-slate-950 text-xl">{{ substr($rel->name, 0, 2) }}</div>
                                    @endif
                                </div>
                            </div>

                            <!-- Bottom Row: Airline Name & Details -->
                            <div class="relative z-10 text-center w-full pt-3 border-t border-slate-100">
                                <div class="font-serif text-lg font-bold text-slate-950 group-hover:text-amber-800 transition-colors line-clamp-1 leading-snug">
                                    {{ $rel->name }}
                                </div>
                                <div class="text-xs text-slate-600 mt-0.5 font-medium truncate">{{ $rel->cabin_class ?? 'Business Class' }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </x-ui.container>
        </section>
    @endif

    <!-- SECTION: DARK BG SECTION CTA (Your advisor is one call away) -->
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
                Ready to fly with {{ $airline->name }}? Speak directly with a licensed international airline consolidator advisor. We hold exclusive contract seats with immediate ticket issuance.
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
