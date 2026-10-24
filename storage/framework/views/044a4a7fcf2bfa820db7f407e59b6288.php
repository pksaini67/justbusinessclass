<?php
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
?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($resolvedTitle); ?></title>
    <meta name="description" content="<?php echo e($resolvedDesc); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($seo->meta_keywords)): ?>
        <meta name="keywords" content="<?php echo e($seo->meta_keywords); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <meta name="robots" content="<?php echo e($resolvedRobots); ?>">
    <link rel="canonical" href="<?php echo e($resolvedCanonical); ?>">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="<?php echo e($seo->og_type ?: 'website'); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:site_name" content="<?php echo e($seo->site_name ?: 'JustBusinessClass.us'); ?>">
    <meta property="og:title" content="<?php echo e($resolvedOgTitle); ?>">
    <meta property="og:description" content="<?php echo e($resolvedOgDesc); ?>">
    <meta property="og:image" content="<?php echo e($resolvedOgImage); ?>">

    <!-- Twitter / X Cards -->
    <meta name="twitter:card" content="<?php echo e($seo->twitter_card ?: 'summary_large_image'); ?>">
    <meta name="twitter:title" content="<?php echo e($resolvedOgTitle); ?>">
    <meta name="twitter:description" content="<?php echo e($resolvedOgDesc); ?>">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($seo->twitter_image): ?>
        <meta name="twitter:image" content="<?php echo e(str_starts_with($seo->twitter_image, 'http') ? $seo->twitter_image : asset('storage/' . $seo->twitter_image)); ?>">
    <?php else: ?>
        <meta name="twitter:image" content="<?php echo e($resolvedOgImage); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <meta name="theme-color" content="#FFFFFF">

    <!-- Dynamic Favicon & Flight Icons -->
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo e($resolvedFavicon); ?>">
    <link rel="shortcut icon" href="<?php echo e($resolvedFavicon); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('favicon.svg')); ?>">

    <!-- Schema.org JSON-LD Structured Data -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($resolvedSchemaJson)): ?>
        <script type="application/ld+json">
            <?php echo $resolvedSchemaJson; ?>

        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Injected Header Scripts (GTM, Google Analytics, Pixels) -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($seo->header_scripts)): ?>
        <?php echo $seo->header_scripts; ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Vite Styles and Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="bg-pure text-navy antialiased selection:bg-gold-200 selection:text-gold-900 font-sans min-h-screen flex flex-col justify-between"
      x-data="{ scrolled: false, mobileMenu: false, backToTop: false }"
      x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 40; backToTop = window.pageYOffset > 500; })">

    <!-- Header / Navbar with Glassmorphism -->
    <header :class="scrolled 
                ? (<?php echo e(request()->is('/') ? 'true' : 'false'); ?> ? 'bg-[#0E0B07]/90 backdrop-blur-xl py-3 border-b border-gold-400/25 shadow-xl' : 'bg-glass-nav py-3') 
                : (<?php echo e(request()->is('/') ? 'true' : 'false'); ?> ? 'bg-[#0E0B07]/60 backdrop-blur-md py-4 sm:py-5 border-b border-gold-400/20' : 'bg-white/70 backdrop-blur-md py-4 sm:py-5 border-b border-silver-200/60')"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'wide']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'wide']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="flex items-center justify-between">
                <!-- Brand Logo for justbusinessclass.us -->
                <a href="<?php echo e(route('home')); ?>" wire:navigate class="flex items-center group focus:outline-none focus-visible:ring-2 focus-visible:ring-gold rounded-xl p-1" aria-label="JustBusinessClass.us Home">
                    <img src="<?php echo e(request()->is('/') ? asset('images/logo-light.svg') : asset('images/logo.svg')); ?>"
                          alt="JustBusinessClass.us Logo"
                          class="h-9 sm:h-11 w-auto transition-transform group-hover:scale-[1.02]"
                          width="240" height="48">
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-7">
                    <a href="<?php echo e(route('about')); ?>" wire:navigate class="text-xs uppercase tracking-wider <?php echo e(request()->routeIs('about') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700')); ?> font-semibold transition-colors">About</a>
                    <a href="<?php echo e(route('deals.index')); ?>" wire:navigate class="text-xs uppercase tracking-wider <?php echo e(request()->routeIs('deals.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700')); ?> font-semibold transition-colors">Deals</a>
                    <a href="<?php echo e(route('airlines.index')); ?>" wire:navigate class="text-xs uppercase tracking-wider <?php echo e(request()->routeIs('airlines.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700')); ?> font-semibold transition-colors">Airlines</a>
                    <a href="<?php echo e(route('blog.index')); ?>" wire:navigate class="text-xs uppercase tracking-wider <?php echo e(request()->routeIs('blog.*') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700')); ?> font-semibold transition-colors">Blog</a>
                    <a href="<?php echo e(route('contact')); ?>" wire:navigate class="text-xs uppercase tracking-wider <?php echo e(request()->routeIs('contact') ? 'text-gold-300 font-bold' : (request()->is('/') ? 'text-slate-200 hover:text-gold-300' : 'text-silver-600 hover:text-gold-700')); ?> font-semibold transition-colors">Contact</a>
                </nav>

                <!-- Right Side Desk Contact & CTA -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="tel:18005550147" class="flex flex-col text-left <?php echo e(request()->is('/') ? 'text-white hover:text-gold-300' : 'text-navy hover:text-gold-700'); ?> transition-colors group">
                        <span class="text-[10px] uppercase tracking-widest <?php echo e(request()->is('/') ? 'text-gold-400/80' : 'text-silver-400'); ?> block font-semibold leading-tight">24/7 Advisor Desk</span>
                        <span class="text-xs font-bold <?php echo e(request()->is('/') ? 'text-white group-hover:text-gold-200' : 'text-navy group-hover:text-gold-700'); ?>">(800) 555-0147</span>
                    </a>

                    <a href="#quote"
                       class="px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider transition-all <?php echo e(request()->is('/') ? 'bg-gradient-to-r from-gold-300 to-gold-500 hover:from-gold-200 hover:to-gold-400 text-[#0C0A07] shadow-[0_4px_16px_rgba(212,184,119,0.3)]' : 'bg-gold-gradient hover:bg-gold-gradient-hover text-white shadow-lux-gold'); ?>">
                        Get the Best Price
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center gap-3 lg:hidden">
                    <button type="button"
                            @click="mobileMenu = true"
                            aria-label="Open Navigation Menu"
                            class="p-2 rounded-xl <?php echo e(request()->is('/') ? 'text-gold-300 hover:text-white bg-[#1A140B] border border-gold-400/40' : 'text-navy hover:text-gold-700 bg-silver-100 border border-silver-200'); ?>">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-bars-3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                    </button>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $attributes = $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408)): ?>
<?php $component = $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408; ?>
<?php unset($__componentOriginalcdb9c3c7335a462cdf37db675e5c1408); ?>
<?php endif; ?>
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
            <a href="<?php echo e(route('home')); ?>" wire:navigate @click="mobileMenu = false">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="JustBusinessClass.us Logo" class="h-8 w-auto">
            </a>
            <button type="button"
                    @click="mobileMenu = false"
                    aria-label="Close Navigation Menu"
                    class="p-2 text-silver-600 hover:text-navy">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-x-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-7 h-7']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            </button>
        </div>

        <nav class="flex flex-col gap-4 py-8 text-lg font-serif">
            <a href="<?php echo e(route('about')); ?>" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">About Our Atelier</a>
            <a href="<?php echo e(route('deals.index')); ?>" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Best Flight Deals</a>
            <a href="<?php echo e(route('airlines.index')); ?>" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Partner Airlines</a>
            <a href="<?php echo e(route('blog.index')); ?>" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Travel Blog &amp; Insights</a>
            <a href="<?php echo e(route('contact')); ?>" wire:navigate @click="mobileMenu = false" class="text-navy hover:text-gold-700 transition-colors py-2 border-b border-silver-100">Contact Concierge</a>
            <a href="<?php echo e(url('/admin')); ?>" class="text-gold-700 hover:text-gold-900 transition-colors py-2 text-xs uppercase tracking-widest font-sans font-bold">Admin Portal &rarr;</a>
        </nav>

        <div class="mt-auto pt-6 border-t border-silver-200 space-y-4">
            <div class="text-xs text-silver-500 uppercase tracking-wider font-semibold">Direct Concierge Priority Line</div>
            <a href="tel:18005550147" class="flex items-center gap-3 text-gold-700 font-bold text-lg">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold-600']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                <span>(800) 555-0147</span>
            </a>
            <a href="#quote" @click="mobileMenu = false" class="w-full py-4 text-center block bg-gold-gradient text-white font-semibold text-xs uppercase tracking-lux rounded-2xl shadow-lux-gold">
                Get the Best Price Now
            </a>
        </div>
    </div>

    <!-- Main Content Slot -->
    <main class="flex-grow pt-0">
        <?php echo e($slot); ?>

    </main>

    <!-- Site Footer -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>

    <!-- Subtle Back To Top Button -->
    <button type="button"
            x-show="backToTop"
            x-transition
            @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
            aria-label="Back to top"
            class="fixed bottom-24 sm:bottom-8 right-6 z-40 p-3 rounded-full bg-white text-gold-700 border border-silver-200 shadow-lux-card hover:bg-gold-50 hover:border-gold transition-all">
        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-up'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
    </button>

    <!-- Sticky Mobile Call / CTA Bar -->
    <div class="fixed bottom-0 left-0 right-0 z-40 lg:hidden bg-white/95 backdrop-blur-xl border-t border-silver-200 px-4 py-3 flex items-center justify-between gap-3 shadow-2xl">
        <a href="tel:18005550147" class="flex-1 py-3 px-3 bg-silver-100 hover:bg-silver-200 text-navy rounded-2xl border border-silver-200 flex items-center justify-center gap-2 text-xs font-semibold uppercase tracking-wider">
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-600 animate-bounce']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>(800) 555-0147</span>
        </a>
        <a href="#quote" class="flex-1 py-3 px-3 bg-gold-gradient text-white rounded-2xl flex items-center justify-center gap-1.5 text-xs font-semibold uppercase tracking-wider shadow-lux-gold">
            <span>Get Best Price</span>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3.5 h-3.5']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
        </a>
    </div>

    <!-- Dynamic Footer Scripts Injection -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($seo->footer_scripts)): ?>
        <?php echo $seo->footer_scripts; ?>

    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>