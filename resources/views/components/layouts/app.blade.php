@php
    // Determine page identifier from active route
    $currentRoute = request()->route()?->getName() ?? 'home';
    $pageKey = match (true) {
        request()->is('/') => 'home',
        request()->is('about*') => 'about',
        request()->is('deals*') || request()->is('best-deals*') => 'deals',
        request()->is('airlines*') => 'airlines',
        request()->is('blog*') => 'blog',
        request()->is('contact*') => 'contact',
        default => 'home',
    };

    $seo = \App\Models\SeoSetting::forPage($pageKey);
    $resolvedTitle = (!empty($seo->meta_title)) ? $seo->meta_title : ($title ?? 'JustBusinessClass.us · Wholesale Business & First Class Flights USA');
    $resolvedDesc = (!empty($seo->meta_description)) ? $seo->meta_description : ($description ?? 'Save 30% to 60% on international business & first class flights with unlisted wholesale consolidator seat blocks.');
    $resolvedCanonical = $canonical ?? ($seo->canonical_url ?: url()->current());
    $resolvedRobots = $robots ?? ($seo->robots ?: 'index, follow');
    $resolvedFavicon = $seo->favicon_url;
    $resolvedLogo = $seo->logo_url;
    $resolvedOgImage = $ogImage ?? ($seo->og_image_url ?: $resolvedLogo);
    $resolvedOgTitle = $ogTitle ?? ($seo->og_title ?: $resolvedTitle);
    $resolvedOgDesc = $ogDescription ?? ($seo->og_description ?: $resolvedDesc);
    $resolvedSchemaJson = $schemaJson ?? $seo->schema_json;
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $resolvedTitle }}</title>
    <meta name="description" content="{{ $resolvedDesc }}">
    @if(!empty($seo->meta_keywords))
        <meta name="keywords" content="{{ $seo->meta_keywords }}">
    @endif
    <meta name="robots" content="{{ $resolvedRobots }}">
    <link rel="canonical" href="{{ $resolvedCanonical }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="{{ $seo->og_type ?: 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $seo->site_name ?: 'JustBusinessClass.us' }}">
    <meta property="og:title" content="{{ $resolvedOgTitle }}">
    <meta property="og:description" content="{{ $resolvedOgDesc }}">
    <meta property="og:image" content="{{ $resolvedOgImage }}">

    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="{{ $seo->twitter_card ?: 'summary_large_image' }}">
    <meta name="twitter:title" content="{{ $resolvedOgTitle }}">
    <meta name="twitter:description" content="{{ $resolvedOgDesc }}">
    @if($seo->twitter_image)
        <meta name="twitter:image" content="{{ str_starts_with($seo->twitter_image, 'http') ? $seo->twitter_image : asset('storage/' . $seo->twitter_image) }}">
    @else
        <meta name="twitter:image" content="{{ $resolvedOgImage }}">
    @endif

    <meta name="theme-color" content="#FFFFFF">

    <!-- Dynamic Favicon & Flight Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ $resolvedFavicon }}">
    <link rel="shortcut icon" href="{{ $resolvedFavicon }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.svg') }}">

    <!-- Schema.org JSON-LD Structured Data -->
    @if(!empty($resolvedSchemaJson))
        <script type="application/ld+json">
            {!! $resolvedSchemaJson !!}
        </script>
    @endif

    <!-- Injected Header Scripts (GTM, Google Analytics, Pixels) -->
    @if(!empty($seo->header_scripts))
        {!! $seo->header_scripts !!}
    @endif

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="bg-pure text-navy antialiased selection:bg-gold-200 selection:text-gold-900 font-sans min-h-screen flex flex-col justify-between"
      x-data="{ scrolled: false, mobileMenu: false, backToTop: false }"
      x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 40; backToTop = window.pageYOffset > 500; })">

    <!-- Header / Navbar with Glassmorphism -->
    <header :class="scrolled 
                ? ({{ request()->is('/') ? 'true' : 'false' }} ? 'bg-[#0E0B07]/90 backdrop-blur-xl py-3 border-b border-gold-400/25 shadow-xl' : 'bg-glass-nav py-3') 
                : ({{ request()->is('/') ? 'true' : 'false' }} ? 'bg-[#0E0B07]/60 backdrop-blur-md py-4 sm:py-5 border-b border-gold-400/20' : 'bg-white/70 backdrop-blur-md py-4 sm:py-5 border-b border-silver-200/60')"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <x-ui.container size="wide">
            <div class="flex items-center justify-between">
                <!-- Brand Logo for justbusinessclass.us -->
                <a href="{{ route('home') }}" wire:navigate class="flex items-center group focus:outline-none focus-visible:ring-2 focus-visible:ring-gold rounded-xl p-1" aria-label="JustBusinessClass.us Home">
                    <img src="{{ request()->is('/') ? asset('images/logo-light.svg') : asset('images/logo.svg') }}"
                          alt="JustBusinessClass.us Logo"
                          class="h-9 sm:h-11 w-auto transition-transform group-hover:scale-[1.02]"
                          width="240" height="48">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7">
                    <a href="{{ route('about') }}" wire:navigate class="text-xs uppercase tracking-wider {{ request()->routeIs('about') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700') }} font-semibold transition-colors">About</a>
                    <a href="{{ route('deals.index') }}" wire:navigate class="text-xs uppercase tracking-wider {{ request()->routeIs('deals.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700') }} font-semibold transition-colors">Deals</a>
                    <a href="{{ route('airlines.index') }}" wire:navigate class="text-xs uppercase tracking-wider {{ request()->routeIs('airlines.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700') }} font-semibold transition-colors">Airlines</a>
                    <a href="{{ route('blog.index') }}" wire:navigate class="text-xs uppercase tracking-wider {{ request()->routeIs('blog.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700') }} font-semibold transition-colors">Blog</a>
                    <a href="{{ route('contact') }}" wire:navigate class="text-xs uppercase tracking-wider {{ request()->routeIs('contact') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700') }} font-semibold transition-colors">Contact</a>
                </nav>

                <!-- Right Side Desk Contact & CTA -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="tel:18005550147" class="flex flex-col text-left {{ request()->is('/') ? 'text-white hover:text-gold-300' : 'text-navy hover:text-gold-700' }} transition-colors group">
                        <span class="text-[10px] uppercase tracking-widest {{ request()->is('/') ? 'text-gold-400/80' : 'text-silver-400' }} block font-semibold leading-tight">24/7 Advisor Desk</span>
                        <span class="text-xs font-bold {{ request()->is('/') ? 'text-white group-hover:text-gold-200' : 'text-navy group-hover:text-gold-700' }}">(800) 555-0147</span>
                    </a>

                    <a href="#quote"
                       class="px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition-all {{ request()->is('/') ? 'bg-gradient-to-r from-gold-300 to-gold-500 hover:from-gold-200 hover:to-gold-400 text-[#0C0A07] shadow-[0_4px_16px_rgba(212,184,119,0.3)]' : 'bg-gold-gradient hover:bg-gold-gradient-hover text-white shadow-lux-gold' }}">
                        Get the Best Price
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center gap-3 lg:hidden">
                    <button type="button"
                            @click="mobileMenu = true"
                            aria-label="Open Navigation Menu"
                            class="p-2 rounded-xl {{ request()->is('/') ? 'text-gold-300 hover:text-white bg-[#1A140B] border border-gold-400/40' : 'text-navy hover:text-gold-700 bg-silver-100 border border-silver-200' }}">
                        <x-heroicon-o-bars-3 class="w-6 h-6" />
                    </button>
                </div>
            </div>
        </x-ui.container>
    </header>

    <!-- Mobile Full-screen Slide-in Menu -->
    <div x-show="mobileMenu"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-x-0"
         x-transition:leave-end="opacity-0 translate-x-full"
         x-cloak
         class="fixed inset-0 z-50 bg-white flex flex-col p-6 overflow-y-auto shadow-2xl">
        <div class="flex items-center justify-between pb-6 border-b border-silver-200">
            <a href="{{ route('home') }}" wire:navigate @click="mobileMenu = false">
                <img src="{{ asset('images/logo.svg') }}" alt="JustBusinessClass.us Logo" class="h-8 w-auto">
            </a>
            <button type="button"
                    @click="mobileMenu = false"
                    aria-label="Close Navigation Menu"
                    class="p-2 text-silver-600 hover:text-navy">
                <x-heroicon-o-x-mark class="w-7 h-7" />
            </button>
        </div>

        <nav class="flex flex-col gap-4 py-8 text-lg font-serif">
            <a href="{{ route('about') }}" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">About Our Atelier</a>
            <a href="{{ route('deals.index') }}" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Best Flight Deals</a>
            <a href="{{ route('airlines.index') }}" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Partner Airlines</a>
            <a href="{{ route('blog.index') }}" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Travel Blog &amp; Insights</a>
            <a href="{{ route('contact') }}" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Contact Concierge</a>
            <a href="{{ url('/admin') }}" class="text-gold-700 hover:text-gold-900 transition-colors py-2 text-xs uppercase tracking-widest font-sans font-bold">Admin Portal &rarr;</a>
        </nav>

        <div class="mt-auto pt-6 border-t border-silver-200 space-y-4">
            <div class="text-xs text-silver-500 uppercase tracking-wider font-semibold">Direct Concierge Priority Line</div>
            <a href="tel:18005550147" class="flex items-center gap-3 text-gold-700 font-bold text-lg">
                <x-heroicon-m-phone class="w-5 h-5 text-gold-600" />
                <span>(800) 555-0147</span>
            </a>
            <a href="#quote" @click="mobileMenu = false" class="w-full py-4 text-center block bg-gold-gradient text-white font-semibold text-xs uppercase tracking-lux rounded-2xl shadow-lux-gold">
                Get the Best Price Now
            </a>
        </div>
    </div>

    <!-- Main Content Slot -->
    <main class="flex-grow pt-0">
        {{ $slot }}
    </main>

    <!-- Site Footer -->
    <x-footer />

    <!-- Subtle Back To Top Button -->
    <button type="button"
            x-show="backToTop"
            x-transition
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            aria-label="Back to top"
            class="fixed bottom-24 sm:bottom-8 right-6 z-40 p-3 rounded-full bg-white text-gold-700 border border-silver-200 shadow-lux-card hover:bg-gold-50 hover:border-gold transition-all">
        <x-heroicon-m-arrow-up class="w-5 h-5" />
    </button>

    <!-- Sticky Mobile Call / CTA Bar -->
    <div class="fixed bottom-0 left-0 right-0 z-40 lg:hidden bg-white/95 backdrop-blur-xl border-t border-silver-200 px-4 py-3 flex items-center justify-between gap-3 shadow-2xl">
        <a href="tel:18005550147" class="flex-1 py-3 px-3 bg-silver-100 hover:bg-silver-200 text-navy rounded-2xl border border-silver-200 flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-wider">
            <x-heroicon-m-phone class="w-4 h-4 text-gold-600 animate-bounce" />
            <span>(800) 555-0147</span>
        </a>
        <a href="#quote" class="flex-1 py-3 px-3 bg-gold-gradient text-white rounded-2xl flex items-center justify-center gap-1.5 text-xs font-semibold uppercase tracking-wider shadow-lux-gold">
            <span>Get Best Price</span>
            <x-heroicon-m-arrow-right class="w-3.5 h-3.5" />
        </a>
    </div>

    <!-- Dynamic Footer Scripts Injection -->
    @if(!empty($seo->footer_scripts))
        {!! $seo->footer_scripts !!}
    @endif

    @livewireScripts
</body>
</html>
