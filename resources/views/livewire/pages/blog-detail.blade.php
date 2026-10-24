<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- HERO & BREADCRUMB HEADER -->
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
                <a href="{{ route('blog.index') }}" wire:navigate class="hover:text-amber-700 transition-colors text-slate-800">
                    Blog
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold truncate max-w-[200px] sm:max-w-md">{{ $post->title }}</span>
            </nav>

            <div class="max-w-4xl">
                <!-- Category & Read Time -->
                <div class="flex flex-wrap items-center gap-2.5 sm:gap-3 mb-5">
                    <a href="{{ route('blog.index', ['category' => $post->blogCategory?->name ?? $post->category]) }}" wire:navigate class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-slate-950 text-amber-300 hover:bg-slate-800 transition-colors shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span>{{ $post->blogCategory?->name ?? $post->category }}</span>
                    </a>
                    @if($post->subcategory)
                        <a href="{{ route('blog.index', ['category' => $post->subcategory->name]) }}" wire:navigate class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold tracking-wide uppercase bg-amber-100 text-amber-900 hover:bg-amber-200 transition-colors border border-amber-300">
                            {{ $post->subcategory->name }}
                        </a>
                    @endif
                    <span class="text-xs text-slate-500 font-bold">·</span>
                    <span class="text-xs font-semibold text-slate-600">{{ $post->read_time ?? 5 }} min read</span>
                    <span class="text-xs text-slate-500 font-bold">·</span>
                    <span class="text-xs font-semibold text-slate-600">{{ $post->published_at?->format('F d, Y') ?? 'Published' }}</span>
                </div>

                <!-- Headline with Luxury Typography -->
                <h1 class="font-serif text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.14] mb-6">
                    {{ $post->title }}
                </h1>

                <!-- Lead Deck / Excerpt -->
                @if($post->excerpt)
                    <p class="text-lg sm:text-xl text-slate-700 font-medium leading-relaxed mb-6">
                        {{ $post->excerpt }}
                    </p>
                @endif

                <!-- Author Byline -->
                <div class="flex items-center gap-3 pt-4 border-t border-slate-200">
                    <div class="w-10 h-10 rounded-full bg-slate-950 text-amber-300 flex items-center justify-center font-bold text-xs">
                        {{ substr($post->author_name, 0, 2) }}
                    </div>
                    <div>
                        <div class="text-sm font-bold text-slate-950">{{ $post->author_name }}</div>
                        <div class="text-[11px] text-slate-500 font-medium">JustBusinessClass.us Private Aviation Desk</div>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- FEATURED IMAGE (IF AVAILABLE) -->
    @if($post->featured_image_url)
        <section class="bg-slate-100 py-8 border-b border-slate-200">
            <x-ui.container size="wide">
                <div class="max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-[0_20px_50px_-12px_rgba(15,23,42,0.15)] border border-slate-200">
                    <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full max-h-[500px] object-cover" />
                </div>
            </x-ui.container>
        </section>
    @endif

    <!-- ARTICLE MAIN CONTENT -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
        <x-ui.container size="default">
            <div class="max-w-3xl mx-auto">
                <!-- Rich Editor Content matching website typography -->
                <div class="prose prose-slate prose-lg max-w-none prose-headings:font-serif prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-slate-950 prose-h2:text-3xl prose-h2:sm:text-4xl prose-h2:mt-12 prose-h2:mb-5 prose-h2:border-b prose-h2:border-slate-200 prose-h2:pb-3 prose-h3:text-2xl prose-h3:text-slate-900 prose-h3:mt-8 prose-h3:mb-3 prose-p:text-slate-800 prose-p:leading-relaxed prose-p:font-normal prose-li:text-slate-800 prose-li:my-1.5 prose-strong:text-slate-950 prose-strong:font-bold prose-a:text-amber-700 hover:prose-a:text-amber-800 prose-blockquote:border-l-amber-600 prose-blockquote:bg-slate-50 prose-blockquote:py-3 prose-blockquote:px-5 prose-blockquote:rounded-r-2xl prose-blockquote:text-slate-800 prose-blockquote:font-serif prose-blockquote:italic">
                    {!! $post->content !!}
                </div>

                <!-- Mid-Article Quotation Trigger Box -->
                <div class="mt-14 p-8 rounded-3xl bg-gradient-to-br from-slate-950 to-slate-900 text-white shadow-xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-44 h-44 rounded-full bg-amber-500/10 blur-2xl pointer-events-none"></div>
                    <span class="text-xs uppercase font-extrabold tracking-lux text-amber-300 block mb-2">Priority Route Rate Check</span>
                    <h3 class="font-serif text-2xl sm:text-3xl font-bold mb-3">Planning an International Departure?</h3>
                    <p class="text-sm text-slate-300 leading-relaxed mb-6 font-medium">
                        Request unlisted wholesale consolidator rates on your route. Our desks hold unpublished seat allocations with major international carriers.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center gap-3">
                        <a href="tel:18005550147" class="w-full sm:w-auto px-6 py-3.5 bg-gold-gradient text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lux-gold flex items-center justify-center gap-2">
                            <x-heroicon-m-phone class="w-4 h-4" />
                            <span>Call (800) 555-0147</span>
                        </a>
                        <a href="{{ route('airlines.index') }}" class="w-full sm:w-auto px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-xl border border-white/20 flex items-center justify-center gap-2 transition-colors">
                            <span>Browse Fleet Allocations</span>
                        </a>
                    </div>
                </div>
            </div>
        </x-ui.container>
    </section>

    <!-- SECTION: EMBEDDED QUOTATION FORM ON DETAIL PAGE -->
    <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
        <x-ui.container size="wide">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Concierge Rate Audit</span>
                <h2 class="font-serif text-3xl sm:text-4xl font-extrabold text-slate-950 tracking-tight">
                    Check Wholesale <span class="italic font-normal font-serif text-gold-gradient">Cabin Pricing</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-700 mt-2 font-medium">
                    Enter your itinerary below. Our senior flight desk will audit consolidator seat blocks and respond with your customized proposal within 30 minutes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <livewire:components.quote-form />
            </div>
        </x-ui.container>
    </section>

    <!-- RECENT POSTS SECTION -->
    @if($recentPosts->isNotEmpty())
        <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
            <x-ui.container size="wide">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-1">More Articles</span>
                        <h3 class="font-serif text-3xl font-bold text-slate-950">
                            Recent <span class="italic font-normal font-serif text-gold-gradient">Aviation Insights</span>
                        </h3>
                    </div>
                    <a href="{{ route('blog.index') }}" wire:navigate class="text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 flex items-center gap-1.5 transition-colors">
                        <span>View All Articles</span>
                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($recentPosts as $recent)
                        <article class="group bg-white rounded-3xl border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <a href="{{ route('blog.show', $recent->slug) }}" wire:navigate class="block aspect-[16/10] bg-slate-900 overflow-hidden relative">
                                @if($recent->featured_image_url)
                                    <img src="{{ $recent->featured_image_url }}" alt="{{ $recent->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-slate-950 to-slate-800 p-6 flex flex-col justify-end">
                                        <div class="font-serif text-lg font-bold text-white line-clamp-2">
                                            {{ $recent->title }}
                                        </div>
                                    </div>
                                @endif
                            </a>

                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <div>
                                    <div class="text-[11px] text-amber-800 font-bold uppercase tracking-wider mb-2">
                                        {{ $recent->category }}
                                    </div>
                                    <h4 class="font-serif text-lg font-bold text-slate-950 group-hover:text-amber-800 transition-colors line-clamp-2 mb-2 leading-snug">
                                        <a href="{{ route('blog.show', $recent->slug) }}" wire:navigate>
                                            {{ $recent->title }}
                                        </a>
                                    </h4>
                                    <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">
                                        {{ $recent->excerpt }}
                                    </p>
                                </div>

                                <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                    <span class="text-[11px] text-slate-400 font-medium">
                                        {{ $recent->published_at?->format('M d, Y') }}
                                    </span>
                                    <a href="{{ route('blog.show', $recent->slug) }}" wire:navigate class="text-xs font-bold text-amber-700 group-hover:text-amber-800">
                                        Read &rarr;
                                    </a>
                                </div>
                            </div>
                        </article>
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
