<div class="relative overflow-hidden bg-slate-50 text-slate-900">
    <!-- HERO & BREADCRUMBS SECTION -->
    <section class="relative pt-32 sm:pt-36 pb-14 sm:pb-20 bg-gradient-to-b from-white via-slate-50 to-slate-100/60 border-b border-slate-200/80">
        <!-- Ambient Champagne Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-40">
            <div class="absolute -top-36 left-1/2 -translate-x-1/2 w-[850px] h-[400px] bg-gradient-to-b from-amber-200/50 via-amber-100/20 to-transparent blur-3xl rounded-full"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10 text-center">
            <!-- Breadcrumb Trail -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-md border border-slate-200 shadow-sm mb-6 text-xs text-slate-700 font-semibold">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-700">
                    <x-heroicon-m-home class="w-4 h-4 text-amber-700" />
                    <span>Home</span>
                </a>
                <span class="text-slate-300 font-bold">/</span>
                <span class="text-slate-950 font-bold">Travel Intelligence &amp; Blog</span>
            </nav>

            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-[11px] sm:text-xs font-bold uppercase tracking-lux text-amber-800">Flight Intelligence &amp; Reviews</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-5">
                    Aviation Insights <span class="italic font-normal font-serif text-gold-gradient">&amp; Travel Journal</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-700 font-medium max-w-2xl mx-auto leading-relaxed">
                    Uncover unpublished airfare mechanics, firsthand flagship cabin reviews, and strategic routing secrets from our senior flight advisors.
                </p>
            </div>

            <!-- Search & Category Filters -->
            <div class="mt-10 max-w-2xl mx-auto flex flex-col sm:flex-row items-center gap-3">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <x-heroicon-m-magnifying-glass class="w-5 h-5 text-amber-700" />
                    </div>
                    <input type="text"
                           wire:model.live.debounce.300ms="search"
                           placeholder="Search articles by title, topic, or keyword..."
                           class="w-full pl-11 pr-10 py-3.5 rounded-2xl bg-white border border-slate-300/90 shadow-sm focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 text-slate-900 placeholder:text-slate-400 text-sm font-medium transition-all" />
                    @if($search)
                        <button type="button" wire:click="$set('search', '')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600">
                            <x-heroicon-m-x-mark class="w-4 h-4" />
                        </button>
                    @endif
                </div>

                @if($categories->isNotEmpty())
                    <div class="inline-flex items-center p-1.5 bg-white border border-slate-300/90 rounded-2xl shadow-sm shrink-0 gap-1 overflow-x-auto max-w-full">
                        <button type="button"
                                wire:click="setCategory('all')"
                                class="px-3.5 py-2 text-xs font-bold rounded-xl transition-all whitespace-nowrap {{ $category === 'all' ? 'bg-slate-950 text-amber-300 shadow-sm' : 'text-slate-600 hover:text-slate-950 hover:bg-slate-100' }}">
                            All
                        </button>
                        @foreach($categories as $cat)
                            <button type="button"
                                    wire:click="setCategory('{{ $cat->name }}')"
                                    class="px-3.5 py-2 text-xs font-bold rounded-xl transition-all whitespace-nowrap {{ $category === $cat->name || $category === $cat->slug ? 'bg-slate-950 text-amber-300 shadow-sm' : 'text-slate-600 hover:text-slate-950 hover:bg-slate-100' }}">
                                {{ $cat->name }}
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>
        </x-ui.container>
    </section>

    <!-- ARTICLES GRID & PAGINATION -->
    <section class="py-16 sm:py-24 bg-slate-50 relative">
        <x-ui.container size="wide">
            @if($posts->isEmpty())
                <div class="text-center py-16 bg-white rounded-3xl border border-slate-200 shadow-sm p-8 max-w-lg mx-auto">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-amber-50 border border-amber-200 flex items-center justify-center text-amber-700">
                        <x-heroicon-o-document-text class="w-8 h-8 text-amber-600" />
                    </div>
                    <h3 class="text-lg font-bold text-slate-950 mb-2">No Articles Found</h3>
                    <p class="text-sm text-slate-600 mb-6">No published articles matched your search "{{ $search }}".</p>
                    <button type="button" wire:click="$set('search', ''); $set('category', 'all');" class="px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                        Clear Filters
                    </button>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-9">
                    @foreach($posts as $article)
                        <article wire:key="post-card-{{ $article->id }}"
                                 class="group bg-white rounded-[2rem] border border-slate-200/90 shadow-[0_15px_35px_-8px_rgba(15,23,42,0.08),0_2px_6px_0_rgba(15,23,42,0.03)] hover:shadow-[0_28px_60px_-12px_rgba(15,23,42,0.20),0_0_0_1.5px_rgba(198,166,103,0.55)] hover:-translate-y-2 transition-all duration-300 ease-out flex flex-col justify-between overflow-hidden">
                            
                            <!-- Cover Visual -->
                            <a href="{{ route('blog.show', $article->slug) }}" wire:navigate class="relative block aspect-[16/10] overflow-hidden bg-slate-900">
                                @if($article->featured_image_url)
                                    <img src="{{ $article->featured_image_url }}"
                                         alt="{{ $article->title }}"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         loading="lazy" />
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-slate-900 via-slate-800 to-amber-950/80 p-8 flex flex-col justify-between relative overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute -right-8 -bottom-8 w-44 h-44 rounded-full bg-amber-500/10 blur-2xl pointer-events-none"></div>
                                        <span class="inline-block text-[10px] font-black uppercase tracking-widest text-amber-300">
                                            JustBusinessClass.us Review
                                        </span>
                                        <div class="font-serif text-2xl font-bold text-white line-clamp-2 leading-snug">
                                            {{ $article->title }}
                                        </div>
                                    </div>
                                @endif

                                <!-- Category & Subcategory Badge -->
                                <div class="absolute top-4 left-4 z-10 flex flex-wrap gap-1.5 max-w-[85%]">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[11px] font-black tracking-wider uppercase bg-slate-950/90 backdrop-blur-md text-amber-300 border border-slate-700 shadow-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        <span>{{ $article->blogCategory?->name ?? $article->category }}</span>
                                    </span>
                                    @if($article->subcategory)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-bold tracking-wide uppercase bg-amber-500/90 backdrop-blur-md text-slate-950 shadow-sm">
                                            {{ $article->subcategory->name }}
                                        </span>
                                    @endif
                                </div>
                            </a>

                            <!-- Card Body -->
                            <div class="p-7 sm:p-8 flex flex-col flex-grow justify-between">
                                <div>
                                    <!-- Meta Row -->
                                    <div class="flex items-center gap-2 text-xs text-slate-500 font-semibold mb-3">
                                        <span>{{ $article->published_at?->format('M d, Y') ?? 'Recently Published' }}</span>
                                        <span>·</span>
                                        <span>{{ $article->read_time ?? 5 }} min read</span>
                                    </div>

                                    <!-- Headline -->
                                    <h3 class="font-serif text-xl sm:text-2xl font-bold text-slate-950 group-hover:text-amber-800 transition-colors line-clamp-2 leading-snug mb-3">
                                        <a href="{{ route('blog.show', $article->slug) }}" wire:navigate>
                                            {{ $article->title }}
                                        </a>
                                    </h3>

                                    <!-- Excerpt -->
                                    <p class="text-slate-600 text-sm line-clamp-3 leading-relaxed mb-6 font-normal">
                                        {{ $article->excerpt }}
                                    </p>
                                </div>

                                <!-- Read Article Button / Author Row -->
                                <div class="pt-5 border-t border-slate-100 flex items-center justify-between">
                                    <span class="text-xs font-semibold text-slate-700 truncate max-w-[180px]">
                                        {{ $article->author_name ?? 'Editorial Desk' }}
                                    </span>

                                    <a href="{{ route('blog.show', $article->slug) }}"
                                       wire:navigate
                                       class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-amber-700 group-hover:text-amber-800 group-hover:translate-x-1 transition-all">
                                        <span>Read Suite Guide</span>
                                        <x-heroicon-m-arrow-right class="w-4 h-4" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-14 sm:mt-18 flex justify-center">
                    {{ $posts->links() }}
                </div>
            @endif
        </x-ui.container>
    </section>

    <!-- SECTION: DARK BG CTA SECTION -->
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
                Skip public retail markups. Speak directly with a dedicated airline consolidator advisor ready to book your premier business and first class flight with immediate confirmation.
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
