<div class="relative overflow-hidden bg-pure">
    <!-- JSON-LD TravelAgency & FlightReservation Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "TravelAgency",
          "@id": "https://justbusinessclass.us/#organization",
          "name": "JustBusinessClass.us",
          "url": "https://justbusinessclass.us",
          "logo": "<?php echo e(asset('images/logo.svg')); ?>",
          "image": "<?php echo e(asset('images/hero/business-class-luxury-cabin.jpg')); ?>",
          "telephone": "+1-800-555-0147",
          "email": "concierge@justbusinessclass.us",
          "priceRange": "$$$$",
          "description": "Boutique flight atelier providing privileged access to unpublished international business and first class airline consolidator allocations with up to 60% savings.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "100 Park Avenue",
            "addressLocality": "New York",
            "addressRegion": "NY",
            "postalCode": "10017",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 40.7512,
            "longitude": -73.9774
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
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
          "@type": "WebSite",
          "@id": "https://justbusinessclass.us/#website",
          "url": "https://justbusinessclass.us",
          "name": "JustBusinessClass.us",
          "description": "Concierge Business & First Class Flights USA",
          "publisher": {
            "@id": "https://justbusinessclass.us/#organization"
          },
          "potentialAction": {
            "@type": "SearchAction",
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
            <img src="<?php echo e(asset('images/hero/business-class-luxury-cabin.jpg')); ?>"
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

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'wide','class' => 'relative z-10 my-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'wide','class' => 'relative z-10 my-auto']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="max-w-4xl mx-auto text-center pt-6 pb-14" data-reveal>
                <!-- Eyebrow label with shimmering gold & silver hairlines -->
                <div class="inline-flex items-center gap-3.5 mb-6 px-4 py-1.5 rounded-full bg-[#1A140B]/80 border border-gold-400/30 backdrop-blur-md shadow-[0_0_20px_rgba(212,184,119,0.15)]">
                    <span class="w-6 h-[1px] bg-gradient-to-r from-transparent via-gold-300 to-white"></span>
                    <span class="text-[11px] sm:text-xs font-semibold uppercase tracking-lux text-gold-300">
                        <?php echo e($content['hero']['eyebrow']); ?>

                    </span>
                    <span class="w-6 h-[1px] bg-gradient-to-l from-transparent via-gold-300 to-white"></span>
                </div>

                <!-- H1 Heading: White, Silver & Gold Shimmer -->
                <h1 class="font-serif text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-white leading-[1.08] mb-6 drop-shadow-[0_4px_16px_rgba(0,0,0,0.6)]">
                    Fly Business Class <span class="italic font-normal font-serif text-gold-shimmer">for Less.</span>
                </h1>

                <!-- Subcopy in polished Silver & Platinum tones -->
                <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-normal leading-relaxed mb-10 text-silver-shimmer drop-shadow-sm">
                    <?php echo e($content['hero']['subcopy']); ?>

                </p>

                <!-- Dual CTAs: Glowing Gold & Polished Silver Glass -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-14">
                    <a href="#quote"
                       class="w-full sm:w-auto px-9 py-4 bg-gradient-to-r from-[#D4B877] via-[#C6A667] to-[#A68037] hover:from-[#E8D2A4] hover:to-[#B8934F] text-[#0C0A07] font-bold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-[0_10px_30px_rgba(212,184,119,0.35)] hover:shadow-[0_15px_35px_rgba(212,184,119,0.5)] flex items-center justify-center gap-2.5 group">
                        <span>Get the Best Price</span>
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-[#0C0A07] group-hover:translate-x-1 transition-transform']); ?>
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
                    <a href="tel:18005550147"
                       class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/15 text-white border border-slate-300/40 hover:border-gold-400/80 text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2 backdrop-blur-xl shadow-lg group">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-300 group-hover:scale-110 transition-transform']); ?>
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
                        <span class="text-slate-100 group-hover:text-gold-200">Call for Unpublished Rates</span>
                    </a>
                </div>

                <!-- Inline Trust Stats Bar in Silver, Gold & White -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8 border-t border-[#382E1C]/80">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['hero']['stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <div class="text-center group">
                            <div class="font-serif text-2xl sm:text-3xl font-bold text-gold-shimmer drop-shadow-sm group-hover:scale-105 transition-transform duration-300"><?php echo e($stat['value']); ?></div>
                            <div class="text-[11px] sm:text-xs text-slate-300 uppercase tracking-wider font-semibold mt-1"><?php echo e($stat['label']); ?></div>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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

        <!-- SECTION 3: QUOTE FORM WIDGET (Overlaps bottom of Hero with Glassmorphism) -->
        <div id="quote" class="relative z-20 max-w-6xl mx-auto px-4 pb-24 sm:px-6 w-full -mb-28 sm:-mb-32" data-reveal>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.quote-form', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-742474730-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
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
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php for($loop_repeat = 0; $loop_repeat < 4; $loop_repeat++): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $marqueeAirlines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($airline->logo_url): ?>
                            <div class="flex items-center shrink-0 group">
                                <a href="<?php echo e(route('airlines.show', $airline->slug)); ?>" 
                                   wire:navigate
                                   title="<?php echo e($airline->name); ?>"
                                   class="h-12 sm:h-14 px-4 py-2 rounded-xl flex items-center justify-center transition-all duration-300 opacity-80 hover:opacity-100 hover:scale-105">
                                    <img src="<?php echo e($airline->logo_url); ?>" 
                                         alt="<?php echo e($airline->name); ?>" 
                                         class="h-7 sm:h-9 max-w-[140px] sm:max-w-[160px] w-auto object-contain transition-transform" 
                                         loading="lazy">
                                </a>
                                <span class="w-1.5 h-1.5 rounded-full bg-gold-400/40 ml-8 sm:ml-12"></span>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION 5: WHAT WE DO / ABOUT SNIPPET (Light Editorial Split Section) -->
    <section id="about" class="py-24 sm:py-32 bg-silver-50 text-navy relative border-b border-silver-200">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left Column: Editorial Story -->
                <div class="lg:col-span-7" data-reveal>
                    <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['align' => 'left','eyebrow' => ''.e($content['about']['eyebrow']).'','title' => ''.e($content['about']['heading']).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'left','eyebrow' => ''.e($content['about']['eyebrow']).'','title' => ''.e($content['about']['heading']).'']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>

                    <div class="space-y-5 text-silver-700 text-sm sm:text-base leading-relaxed mb-8 font-normal">
                        <p><?php echo e($content['about']['paragraph_1']); ?></p>
                        <p><?php echo e($content['about']['paragraph_2']); ?></p>
                    </div>

                    <!-- Category Link Chips -->
                    <div class="flex flex-wrap gap-2 pt-2">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['about']['chips']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <a href="<?php echo e($chip['url']); ?>"
                               class="inline-flex items-center px-4 py-2 rounded-2xl text-xs font-semibold bg-white border border-silver-200 hover:border-gold hover:text-gold-800 transition-colors shadow-sm">
                                <span><?php echo e($chip['label']); ?></span>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-up-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3.5 h-3.5 ml-1.5 text-gold-600']); ?>
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
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 6: SIGNATURE SAVINGS & ROUTE INTELLIGENCE (No Direct Fares, 'Get the Best Price' CTA) -->
    <section id="deals" class="py-24 sm:py-32 bg-pure relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Route Intelligence & Private Allotments','title' => 'Signature Business Class Routes','subtitle' => 'Wholesale consolidator inventory across premier international flight corridors. We secure the best market price with verified lie-flat seating.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Route Intelligence & Private Allotments','title' => 'Signature Business Class Routes','subtitle' => 'Wholesale consolidator inventory across premier international flight corridors. We secure the best market price with verified lie-flat seating.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <!-- Route Cards Grid with Glassmorphism and Luxury Shadow -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $signatureSavings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="group bg-white rounded-3xl border border-silver-200 hover:border-gold/60 shadow-lux-card hover:shadow-lux-card-hover overflow-hidden transition-all duration-500 hover:-translate-y-1.5 flex flex-col justify-between" data-reveal>
                        <!-- Destination Image Slot -->
                        <div class="relative h-48 overflow-hidden bg-silver-100">
                            <!-- Comment: Replace with high-resolution photo at /public/images/destinations/<?php echo e(strtolower($deal['city'])); ?>.jpg -->
                            <img src="<?php echo e(asset('images/destinations/' . strtolower(str_replace(' ', '', $deal['city'])) . '.svg')); ?>"
                                 alt="<?php echo e($deal['route']); ?>"
                                 class="w-full h-full object-cover hover-zoom-img"
                                 loading="lazy"
                                 width="400" height="250">
                            <div class="absolute inset-0 bg-gradient-to-t from-white via-white/20 to-transparent"></div>

                            <!-- Gold Savings Badge -->
                            <div class="absolute top-3 right-3 px-3 py-1 rounded-full bg-gold-gradient text-white font-bold text-xs uppercase tracking-wider shadow-md">
                                Up to <?php echo e($deal['savings_pct']); ?>% Off
                            </div>

                            <!-- Cabin Pill -->
                            <div class="absolute bottom-3 left-3 text-[10px] uppercase tracking-widest text-gold-800 font-bold bg-white/90 px-3 py-1 rounded-lg border border-silver-200 shadow-sm">
                                <?php echo e($deal['cabin']); ?>

                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-serif text-lg font-bold text-navy group-hover:text-gold-700 transition-colors">
                                    <?php echo e($deal['route']); ?>

                                </h3>
                                <p class="text-xs text-silver-500 mt-1 mb-2 flex items-center gap-1.5">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-3.5 h-3.5 text-gold-600']); ?>
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
                                    <span><?php echo e($deal['airline']); ?></span>
                                </p>
                                <span class="inline-block text-[11px] text-silver-600 bg-silver-50 px-2 py-0.5 rounded border border-silver-200 font-medium">
                                    <?php echo e($deal['highlight']); ?>

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
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <!-- Show More / Less Toggle Button -->
            <div class="text-center" data-reveal>
                <button type="button"
                        wire:click="toggleDeals"
                        class="px-8 py-3.5 rounded-2xl bg-white hover:bg-silver-50 text-navy border border-silver-300 hover:border-gold/60 text-xs uppercase tracking-lux transition-all duration-300 inline-flex items-center gap-2 shadow-sm">
                    <span><?php echo e($showAllDeals ? 'Show Fewer Routes' : 'View All 12 Signature Routes'); ?></span>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-700 transition-transform '.e($showAllDeals ? 'rotate-180' : '').'']); ?>
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
    </section>

    <!-- SECTION 7: HOW OUR PRICING WORKS (4 Numbered Horizontal Cards) -->
    <section id="pricing" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'The Wholesale Advantage','title' => 'How Our Pricing Works','subtitle' => 'Transparent mechanisms that unlock unadvertised wholesale seat inventory for corporate and discerning private travelers.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'The Wholesale Advantage','title' => 'How Our Pricing Works','subtitle' => 'Transparent mechanisms that unlock unadvertised wholesale seat inventory for corporate and discerning private travelers.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['pricing_steps']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="p-8 bg-white/95 rounded-3xl border border-silver-200 hover:border-gold/50 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300 relative group" data-reveal>
                        <div class="font-serif text-4xl sm:text-5xl font-bold text-gold-200 group-hover:text-gold-600 transition-colors mb-6">
                            <?php echo e($step['step']); ?>

                        </div>
                        <h3 class="font-serif text-xl font-bold text-navy mb-3">
                            <?php echo e($step['title']); ?>

                        </h3>
                        <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                            <?php echo e($step['description']); ?>

                        </p>
                        <div class="w-8 h-[2px] bg-gold/50 mt-6 group-hover:w-16 transition-all duration-300"></div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 8: ADVISOR / CONCIERGE SPLIT SECTION -->
    <section class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative overflow-hidden">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left: Cinematic Image Slot of Private Flight Lounge / Advisor -->
                <div class="lg:col-span-6 relative" data-reveal>
                    <div class="aspect-[4/3] rounded-3xl overflow-hidden border border-silver-200 shadow-lux-card bg-silver-50 relative">
                        <!-- Comment: Place high-end concierge advisor or first class lounge image at /public/images/advisor.jpg -->
                        <img src="<?php echo e(asset('images/hero/advisor.svg')); ?>"
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
                    <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['align' => 'left','eyebrow' => 'White Glove Route Mastery','title' => 'Your Dedicated Flight Concierge','subtitle' => 'No automated phone trees. No outsourced chat bots. You work directly with a senior aviation specialist who understands aircraft sub-types, seat maps, and airport connection privileges.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'left','eyebrow' => 'White Glove Route Mastery','title' => 'Your Dedicated Flight Concierge','subtitle' => 'No automated phone trees. No outsourced chat bots. You work directly with a senior aviation specialist who understands aircraft sub-types, seat maps, and airport connection privileges.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>

                    <!-- 4 Advisor Trust Stats -->
                    <div class="grid grid-cols-2 gap-6 my-8 py-6 border-y border-silver-200">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['concierge_stats']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <div>
                                <div class="font-serif text-3xl font-bold text-gold-700"><?php echo e($stat['value']); ?></div>
                                <div class="text-xs text-silver-500 mt-1 uppercase tracking-wider font-semibold"><?php echo e($stat['label']); ?></div>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center gap-4">
                        <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['href' => '#quote','size' => 'lg','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '#quote','size' => 'lg','variant' => 'primary']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                            Get the Best Price
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['href' => 'tel:18005550147','size' => 'lg','variant' => 'secondary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => 'tel:18005550147','size' => 'lg','variant' => 'secondary']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 mr-2 text-gold-600']); ?>
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
                            Call (800) 555-0147
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
                    </div>
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
    </section>

    <!-- SECTION 9: SIX REASONS TO BOOK WITH US (6-Card Grid) -->
    <section class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Why Elite Flyers Choose Us','title' => 'Six Pillars of Exceptional Travel','subtitle' => 'Engineered for corporate executives, high-net-worth families, and frequent international flyers who demand the highest aviation standard.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Why Elite Flyers Choose Us','title' => 'Six Pillars of Exceptional Travel','subtitle' => 'Engineered for corporate executives, high-net-worth families, and frequent international flyers who demand the highest aviation standard.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['reasons']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="p-8 bg-white/95 rounded-3xl border border-silver-200 hover:border-gold/50 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300 hover:-translate-y-1.5 group" data-reveal>
                        <div class="w-12 h-12 rounded-2xl bg-gold-50 border border-gold/30 flex items-center justify-center text-gold-600 mb-6 group-hover:scale-110 group-hover:border-gold transition-all shadow-sm">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($reason['icon'] === 'sparkles'): ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-sparkles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php elseif($reason['icon'] === 'clock'): ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php elseif($reason['icon'] === 'arrows-pointing-out'): ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-arrows-pointing-out'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php elseif($reason['icon'] === 'academic-cap'): ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-academic-cap'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php elseif($reason['icon'] === 'phone-arrow-up-right'): ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-phone-arrow-up-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-shield-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gold-600']); ?>
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
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                        <h3 class="font-serif text-xl font-bold text-navy mb-3">
                            <?php echo e($reason['title']); ?>

                        </h3>
                        <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                            <?php echo e($reason['description']); ?>

                        </p>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 10: HOW TO BOOK IN 4 STEPS -->
    <section class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Seamless Execution','title' => 'How to Book in 4 Simple Steps','subtitle' => 'From first route inquiry to boarding your lie-flat suite, we manage every detail with discretion and speed.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Seamless Execution','title' => 'How to Book in 4 Simple Steps','subtitle' => 'From first route inquiry to boarding your lie-flat suite, we manage every detail with discretion and speed.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['how_to_book']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="relative flex flex-col justify-between p-7 bg-white rounded-3xl border border-silver-200 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-300" data-reveal>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="font-serif text-3xl font-bold text-gold-700">0<?php echo e($item['step']); ?></span>
                                <span class="text-[10px] uppercase tracking-lux text-silver-400 font-bold">Step <?php echo e($item['step']); ?></span>
                            </div>
                            <h3 class="font-serif text-lg font-bold text-navy mb-2">
                                <?php echo e($item['title']); ?>

                            </h3>
                            <p class="text-xs sm:text-sm text-silver-600 leading-relaxed font-normal">
                                <?php echo e($item['description']); ?>

                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-silver-100 text-[11px] text-gold-700 font-semibold uppercase tracking-wider">
                            <?php echo e(match((string)$item['step']) {
                                '1' => 'Dial or Request Online',
                                '2' => 'Consolidator Audit',
                                '3' => 'Best Price Proposal',
                                default => 'Confirmed E-Tickets'
                            }); ?>

                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 11: PREMIER DESTINATIONS BY REGION -->
    <section id="destinations" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
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

            <div data-aos="fade-up">
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Global Horizons','title' => 'Premier Destinations by Region','subtitle' => 'Discover preferred business class allocations to financial and leisure metropolises across seven continents.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Global Horizons','title' => 'Premier Destinations by Region','subtitle' => 'Discover preferred business class allocations to financial and leisure metropolises across seven continents.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <!-- Mobile Snap Carousel / Desktop Grid -->
            <div class="flex lg:grid lg:grid-cols-7 gap-5 overflow-x-auto no-scrollbar pb-6 lg:pb-0 snap-x snap-mandatory">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['regions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="min-w-[260px] sm:min-w-[280px] lg:min-w-0 snap-center group relative aspect-[3/4] rounded-3xl overflow-hidden border border-silver-200 hover:border-gold/60 shadow-lux-card hover:shadow-lux-card-hover transition-all duration-500"
                         data-aos="fade-up"
                         data-aos-delay="<?php echo e(100 + ($index * 75)); ?>">
                        <!-- Background Image Slot -->
                        <img src="<?php echo e(asset('images/' . $region['image_slot'])); ?>"
                             alt="<?php echo e($region['name']); ?>"
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
                                    <?php echo e($region['name']); ?>

                                </h3>
                                <p class="text-[11px] text-silver-600 mt-1 line-clamp-1 font-medium">
                                    <?php echo e($region['cities']); ?>

                                </p>
                                <div class="mt-4 pt-3 border-t border-silver-200">
                                    <a href="#quote" class="text-xs uppercase tracking-wider text-gold-700 hover:text-gold-800 font-bold flex items-center justify-between">
                                        <span>Get the Best Price</span>
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
                            </div>
                        </div>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 12: POPULAR BUSINESS CLASS DESTINATIONS (Pill Cloud) -->
    <section class="py-16 sm:py-20 bg-pure border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="text-center mb-8" data-reveal>
                <span class="text-xs uppercase tracking-lux text-gold-700 font-bold">
                    Popular Global Hubs
                </span>
                <h3 class="font-serif text-2xl sm:text-3xl text-navy font-bold mt-2">Book Business Class to Major Metropolises</h3>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-2.5 max-w-4xl mx-auto" data-reveal>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['popular_cities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <a href="#quote"
                       class="px-4 py-2.5 rounded-2xl bg-white hover:bg-gold-50 border border-silver-200 hover:border-gold/60 text-xs font-semibold text-silver-700 hover:text-gold-800 shadow-sm transition-all duration-200">
                        Business Class to <?php echo e($city); ?> &rarr;
                    </a>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 13: TESTIMONIALS (Alpine Carousel + Rated Excellent Badge) -->
    <section id="testimonials" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative"
             x-data="{
                active: 0,
                total: <?php echo e(count($testimonials)); ?>,
                next() { this.active = (this.active + 1) % this.total },
                prev() { this.active = (this.active - 1 + this.total) % this.total }
             }">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'narrow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'narrow']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Distinguished Client Experiences','title' => 'Tested by Those Who Fly Often','subtitle' => 'Authentic feedback from executives, managing partners, and luxury leisure flyers.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Distinguished Client Experiences','title' => 'Tested by Those Who Fly Often','subtitle' => 'Authentic feedback from executives, managing partners, and luxury leisure flyers.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <!-- Trust Badge Row -->
            <div class="flex items-center justify-center gap-3 mb-12" data-reveal>
                <div class="flex text-gold gap-1">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php for($s = 0; $s < 5; $s++): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold-500']); ?>
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
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <div x-show="active === <?php echo e($index); ?>"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 translate-y-3"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-cloak
                             class="max-w-2xl mx-auto">
                            <p class="font-serif text-lg sm:text-2xl text-navy italic leading-relaxed mb-6 font-normal">
                                <?php echo e($t['quote']); ?>

                            </p>
                            <div class="font-bold text-sm text-gold-700"><?php echo e($t['author']); ?></div>
                            <div class="text-xs text-silver-500 mt-0.5">
                                <?php echo e($t['role'] ?? ''); ?> <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($t['role']) && !empty($t['city'])): ?> · <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?> <?php echo e($t['city'] ?? ''); ?>

                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($t['route'])): ?>
                                <div class="text-[11px] text-silver-400 uppercase tracking-widest mt-2 font-mono font-semibold"><?php echo e($t['route']); ?></div>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>

                <!-- Navigation Controls -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($testimonials) > 1): ?>
                    <div class="flex items-center justify-center gap-4 mt-8 pt-6 border-t border-silver-100">
                        <button type="button"
                                @click="prev()"
                                aria-label="Previous testimonial"
                                class="p-2.5 rounded-full bg-silver-100 hover:bg-gold-50 hover:text-gold-700 text-navy border border-silver-200 transition-colors">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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

                        <div class="flex gap-2">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <button type="button"
                                        @click="active = <?php echo e($index); ?>"
                                        class="w-2.5 h-2.5 rounded-full transition-all"
                                        :class="active === <?php echo e($index); ?> ? 'bg-gold w-6' : 'bg-silver-300'"></button>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>

                        <button type="button"
                                @click="next()"
                                aria-label="Next testimonial"
                                class="p-2.5 rounded-full bg-silver-100 hover:bg-gold-50 hover:text-gold-700 text-navy border border-silver-200 transition-colors">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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
    </section>

    <!-- SECTION 14: FAQ (Livewire Accordion) -->
    <section id="faq" class="py-24 sm:py-32 bg-pure border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'narrow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'narrow']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Intelligence & Transparency','title' => 'Frequently Asked Questions','subtitle' => 'Everything you need to know about our wholesale airline inventory, ticket issuing, and concierge service.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Intelligence & Transparency','title' => 'Frequently Asked Questions','subtitle' => 'Everything you need to know about our wholesale airline inventory, ticket issuing, and concierge service.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <div class="space-y-4" data-reveal>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="rounded-3xl border border-silver-200 bg-white overflow-hidden shadow-sm transition-all <?php echo e($openFaq === $index ? 'border-gold/60 shadow-lux-card' : 'hover:border-silver-300'); ?>">
                        <button type="button"
                                wire:click="toggleFaq(<?php echo e($index); ?>)"
                                class="w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-serif text-lg sm:text-xl font-bold text-navy <?php echo e($openFaq === $index ? 'text-gold-700' : ''); ?>">
                                <?php echo e($faq['question']); ?>

                            </span>
                            <span class="w-8 h-8 rounded-full bg-silver-100 flex items-center justify-center shrink-0 text-gold-700 transition-transform <?php echo e($openFaq === $index ? 'rotate-180 bg-gold-50 text-gold-800' : ''); ?>">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
                            </span>
                        </button>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($openFaq === $index): ?>
                            <div class="px-6 pb-6 pt-2 border-t border-silver-100 text-sm sm:text-base text-silver-600 leading-relaxed font-normal">
                                <?php echo e($faq['answer']); ?>

                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 15: PREMIER AIRLINES (8 Cards) -->
    <section id="airlines" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div data-reveal>
                <?php if (isset($component)) { $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.section-heading','data' => ['eyebrow' => 'Alliance Excellence','title' => 'Premier Airlines We Partner With','subtitle' => 'Flagship carriers featuring lie-flat business suites, direct aisle access, and acclaimed inflight cellars.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Alliance Excellence','title' => 'Premier Airlines We Partner With','subtitle' => 'Flagship carriers featuring lie-flat business suites, direct aisle access, and acclaimed inflight cellars.']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $attributes = $__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__attributesOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f)): ?>
<?php $component = $__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f; ?>
<?php unset($__componentOriginalfdf68e90b8911e1acb34fb0a05efc30f); ?>
<?php endif; ?>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['premier_airlines']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $airline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="group bg-white rounded-3xl border border-silver-200 hover:border-gold/60 p-6 transition-all duration-300 flex flex-col justify-between hover:-translate-y-1.5 shadow-lux-card hover:shadow-lux-card-hover" data-reveal>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <span class="font-mono text-xs text-gold-800 font-bold px-2.5 py-1 rounded-lg bg-gold-50 border border-gold/30"><?php echo e($airline['code']); ?></span>
                                <span class="text-[10px] uppercase tracking-wider text-silver-500 font-bold"><?php echo e($airline['badge']); ?></span>
                            </div>
                            <h3 class="font-serif text-2xl font-bold text-navy group-hover:text-gold-700 transition-colors">
                                <?php echo e($airline['name']); ?>

                            </h3>
                            <p class="text-xs text-silver-600 mt-2 leading-relaxed">
                                <?php echo e($airline['tagline']); ?>

                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-silver-100">
                            <a href="#quote" class="text-xs uppercase tracking-wider text-gold-700 hover:text-gold-900 inline-flex items-center gap-1 font-bold">
                                <span>Get the Best Price</span>
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
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
    </section>

    <!-- SECTION 16: NEWSLETTER SIGNUP -->
    <section class="py-20 bg-pure border-t border-silver-200 relative">
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'narrow']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'narrow']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <div class="bg-gradient-to-r from-silver-50 via-white to-silver-50 rounded-3xl p-8 sm:p-12 border border-silver-200 shadow-lux-card relative overflow-hidden" data-reveal>
                <div class="max-w-xl mx-auto text-center mb-8">
                    <span class="text-xs uppercase tracking-lux text-gold-700 font-bold">Confidential Flight Dispatches</span>
                    <h3 class="font-serif text-3xl sm:text-4xl text-navy font-bold mt-2">Private Wholesale Fare Advisory</h3>
                    <p class="text-xs sm:text-sm text-silver-600 mt-3 leading-relaxed">
                        Join over 10,000 frequent flyers receiving our bi-weekly dispatch of unpublished business and first class rate dumps.
                    </p>
                </div>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.newsletter-signup', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-742474730-1', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
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
    </section>

    <!-- SECTION 17: FINAL CTA BAND -->
    <section id="contact" class="py-24 sm:py-32 bg-silver-50 border-t border-silver-200 relative overflow-hidden">
        <div class="absolute inset-0 z-0 pointer-events-none select-none">
            <!-- Comment: Place light luxury flight lounge photo at /public/images/lounge.jpg -->
            <img src="<?php echo e(asset('images/hero/lounge.svg')); ?>"
                 alt="Luxury Lounge Background"
                 class="w-full h-full object-cover opacity-25 filter blur-[2px]"
                 loading="lazy"
                 width="1920" height="800">
            <div class="absolute inset-0 bg-gradient-to-t from-silver-50 via-silver-50/80 to-silver-50"></div>
        </div>

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'narrow','class' => 'relative z-10 text-center','dataReveal' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'narrow','class' => 'relative z-10 text-center','data-reveal' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4']); ?>
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
                <a href="tel:18005550147"
                   class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-silver-50 text-navy border border-silver-300 hover:border-gold/60 text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2 shadow-sm">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-600']); ?>
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
                    <span>Dial (800) 555-0147</span>
                </a>
            </div>

            <div class="inline-flex items-center gap-2 text-xs text-silver-500 font-medium">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-600']); ?>
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
                <span><?php echo e($content['brand']['address']); ?></span>
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
    </section>
</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\livewire\pages\home.blade.php ENDPATH**/ ?>