<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- JSON-LD ContactPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "name": "Contact JustBusinessClass.us Flight Concierge",
      "url": "<?php echo e(url()->current()); ?>",
      "telephone": "<?php echo e($content['brand']['phone_raw']); ?>",
      "email": "<?php echo e($content['brand']['email']); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "100 Park Avenue",
        "addressLocality": "New York",
        "addressRegion": "NY",
        "postalCode": "10017",
        "addressCountry": "US"
      }
    }
    </script>

    <!-- SECTION 1: BREADCRUMB / HERO HEADER -->
    <section class="relative pt-32 sm:pt-36 pb-12 sm:pb-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <!-- Subtle Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-30">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-gradient-to-b from-amber-200 to-transparent blur-3xl rounded-full"></div>
        </div>

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'wide','class' => 'relative z-10 text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'wide','class' => 'relative z-10 text-center']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <!-- Breadcrumbs Trail with High Contrast -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-300 shadow-sm mb-6 text-xs text-slate-800 font-semibold">
                <a href="<?php echo e(route('home')); ?>" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-800">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-amber-700']); ?>
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
                    <span>Home</span>
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold">Contact Us</span>
            </nav>

            <div class="max-w-3xl mx-auto">
                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">24/7 Aviation Concierge Desk</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-4">
                    Direct Contact <span class="italic font-normal font-serif text-gold-gradient">&amp; Support Desk</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-800 font-medium max-w-2xl mx-auto leading-relaxed">
                    Connect directly with an elite transatlantic flight advisor. Reach us via priority telephone, instant WhatsApp messaging, or our Midtown Manhattan executive suite.
                </p>
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

    <!-- SECTION 2: CONTACT NUMBER, WHATSAPP SUPPORT & OFFICE ADDRESS CARDS -->
    <section class="py-16 sm:py-20 bg-slate-100/70 border-b border-slate-200 relative">
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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

                <!-- Card 1: Direct Toll-Free Phone -->
                <div class="group bg-white rounded-3xl p-8 border-2 border-slate-200 hover:border-amber-600 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-amber-800 mb-6 group-hover:scale-105 group-hover:bg-amber-700 group-hover:text-white transition-all duration-300 shadow-sm">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-phone'); ?>
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
                        </div>

                        <div class="inline-flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 animate-pulse"></span>
                            <span class="text-xs uppercase tracking-widest font-black text-emerald-800">Lines Open 24/7</span>
                        </div>

                        <h3 class="font-serif text-2xl font-extrabold text-slate-950 mb-3">Telephone Concierge</h3>
                        <p class="text-sm text-slate-800 leading-relaxed mb-6 font-medium">
                            Immediate 1:1 consultation for unpublished business class seat blocks, urgent itineraries, and airline corporate rates.
                        </p>
                    </div>

                    <div class="pt-6 border-t border-slate-200 flex flex-col gap-2">
                        <a href="tel:18005550147" class="font-serif text-2xl sm:text-3xl font-extrabold text-slate-950 group-hover:text-amber-800 transition-colors">
                            (800) 555-0147
                        </a>
                        <span class="text-xs text-slate-700 font-bold">Toll-Free USA &amp; Canada · Direct Advisor Desk</span>
                    </div>
                </div>

                <!-- Card 2: WhatsApp Support -->
                <div class="group bg-white rounded-3xl p-8 border-2 border-slate-200 hover:border-emerald-600 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-emerald-100 rounded-full blur-2xl pointer-events-none"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-emerald-100 border border-emerald-300 flex items-center justify-center text-emerald-800 mb-6 group-hover:scale-105 group-hover:bg-emerald-700 group-hover:text-white transition-all duration-300 shadow-sm">
                            <!-- WhatsApp / Chat SVG Icon -->
                            <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                <path d="M12.031 2C6.495 2 2 6.496 2 12.032c0 1.986.58 3.842 1.583 5.414L2 22l4.735-1.543a10.02 10.02 0 0 0 5.296 1.511c5.536 0 10.031-4.496 10.031-10.032C22.062 6.496 17.567 2 12.031 2zm5.82 14.283c-.244.686-1.42 1.32-1.956 1.405-.512.08-1.18.115-1.905-.116a12.87 12.87 0 0 1-4.004-2.14 11.235 11.235 0 0 1-2.905-3.627c-.443-.762-.47-1.632-.073-2.112.222-.269.49-.49.733-.733.268-.268.423-.377.633-.024.232.39 1.157 2.825 1.258 3.033.1.207.037.402-.09.609-.127.207-.285.347-.456.559-.17.21-.358.44-.153.791.205.352.912 1.503 1.957 2.433 1.346 1.198 2.482 1.568 2.834 1.743.352.174.559.146.766-.09.208-.236.888-1.036 1.127-1.39.239-.353.477-.294.79-.178.314.116 1.996.94 2.337 1.11.341.17.57.255.654.398.084.143.084.827-.16 1.513z"/>
                            </svg>
                        </div>

                        <div class="inline-flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600"></span>
                            <span class="text-xs uppercase tracking-widest font-black text-emerald-800">Instant Messaging</span>
                        </div>

                        <h3 class="font-serif text-2xl font-extrabold text-slate-950 mb-3">WhatsApp Support</h3>
                        <p class="text-sm text-slate-800 leading-relaxed mb-6 font-medium">
                            Fast flight option previews, seat maps, and itinerary confirmations sent directly to your phone while you travel.
                        </p>
                    </div>

                    <div class="pt-6 border-t border-slate-200 flex flex-col gap-2">
                        <a href="https://wa.me/18005550147" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 font-serif text-2xl sm:text-3xl font-extrabold text-emerald-800 hover:text-emerald-900 transition-colors">
                            <span>+1 (800) 555-0147</span>
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-arrow-top-right-on-square'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-emerald-700']); ?>
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
                        <span class="text-xs text-slate-700 font-bold">Click to chat directly with an advisor</span>
                    </div>
                </div>

                <!-- Card 3: Office Address -->
                <div class="group bg-white rounded-3xl p-8 border-2 border-slate-200 hover:border-amber-600 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-amber-800 mb-6 group-hover:scale-105 group-hover:bg-amber-700 group-hover:text-white transition-all duration-300 shadow-sm">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-building-office-2'); ?>
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
                        </div>

                        <div class="inline-flex items-center gap-2 mb-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-600"></span>
                            <span class="text-xs uppercase tracking-widest font-black text-amber-800">Headquarters</span>
                        </div>

                        <h3 class="font-serif text-2xl font-extrabold text-slate-950 mb-3">Manhattan Office</h3>
                        <p class="text-sm text-slate-800 leading-relaxed mb-6 font-medium">
                            Private corporate client consultations by appointment. Conveniently situated in Midtown East near Grand Central.
                        </p>
                    </div>

                    <div class="pt-6 border-t border-slate-200 flex flex-col gap-1">
                        <div class="font-serif text-xl sm:text-2xl font-extrabold text-slate-950">
                            100 Park Avenue
                        </div>
                        <div class="text-sm text-slate-800 font-semibold">
                            New York, NY 10017 · United States
                        </div>
                        <span class="text-xs text-slate-700 font-bold mt-1">Suite 1600 · By Appointment</span>
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

    <!-- SECTION 3: INQUIRY FORM -->
    <section class="py-20 sm:py-28 bg-white relative">
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

            <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
                <div class="inline-flex items-center gap-2.5 mb-3">
                    <span class="w-6 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">
                        Direct Concierge Inquiry
                    </span>
                    <span class="w-6 h-[1.5px] bg-amber-600"></span>
                </div>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.15]">
                    Send Us a Message
                </h2>
                <p class="mt-4 text-base sm:text-lg text-slate-800 font-medium max-w-2xl mx-auto leading-relaxed">
                    Share your destination, dates, or custom travel specifications. Your personal flight advisor will review consolidator allotments and reach out promptly.
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($submitted): ?>
                    <!-- Success Banner -->
                    <div class="p-8 sm:p-12 text-center bg-white rounded-3xl border-2 border-amber-500 shadow-xl relative overflow-hidden"
                         x-data
                         x-init="$el.scrollIntoView({ behavior: 'smooth', block: 'center' })">
                        <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-amber-100 border border-amber-300 flex items-center justify-center text-amber-800 shadow-md">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-10 h-10 text-amber-700']); ?>
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
                        </div>

                        <span class="text-xs uppercase tracking-lux text-amber-800 font-bold block mb-2">Inquiry Dispatched</span>
                        <h3 class="font-serif text-3xl sm:text-4xl text-slate-950 font-extrabold mb-4">We Have Received Your Request</h3>
                        <p class="text-slate-800 max-w-xl mx-auto text-base sm:text-lg leading-relaxed mb-6 font-medium">
                            Thank you, <strong class="text-slate-950"><?php echo e($name); ?></strong>. Your message has been routed to our senior flight advisory desk. We will contact you at <strong class="text-amber-800 font-bold"><?php echo e($countryCode); ?> <?php echo e($phone); ?></strong> shortly.
                        </p>

                        <div class="inline-flex items-center gap-2 text-sm text-slate-900 bg-slate-100 px-5 py-3 rounded-full border border-slate-300 mb-8 font-semibold">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600 animate-pulse"></span>
                            <span>Desk Live: Priority response typically within 15–30 minutes</span>
                        </div>

                        <div>
                            <button type="button"
                                    wire:click="resetForm"
                                    class="text-xs uppercase tracking-widest text-amber-800 hover:text-amber-950 font-bold underline underline-offset-8 transition-colors">
                                Send Another Message &rarr;
                            </button>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Interactive Contact Form with High Contrast Dark Inputs & Labels -->
                    <form wire:submit.prevent="submit" class="bg-slate-50/90 rounded-3xl p-6 sm:p-10 lg:p-12 shadow-xl border-2 border-slate-200 relative backdrop-blur-2xl">
                        <!-- Loading Overlay -->
                        <div wire:loading.flex class="absolute inset-0 z-30 bg-white/90 rounded-3xl backdrop-blur-sm items-center justify-center flex-col gap-3">
                            <div class="w-10 h-10 border-3 border-amber-300 border-t-amber-700 rounded-full animate-spin"></div>
                            <p class="text-xs font-bold tracking-widest uppercase text-slate-900">Connecting with Flight Advisor...</p>
                        </div>

                        <div class="space-y-6">
                            <!-- Field 1: Name -->
                            <div>
                                <label for="contact-name" class="block text-xs uppercase tracking-wider text-slate-950 font-extrabold mb-2">
                                    Your Full Name <span class="text-rose-600">*</span>
                                </label>
                                <input type="text"
                                       id="contact-name"
                                       wire:model.defer="name"
                                       placeholder="e.g. Jonathan Sterling"
                                       class="w-full px-4 py-3.5 bg-white border-2 border-slate-300 rounded-2xl text-base text-slate-950 placeholder-slate-500 font-semibold focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 shadow-sm transition-all" />
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-xs text-rose-700 mt-1.5 block font-bold"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <!-- Field 2: Contact Number with Country Code Dropdown -->
                            <div>
                                <label for="contact-phone" class="block text-xs uppercase tracking-wider text-slate-950 font-extrabold mb-2">
                                    Contact Number <span class="text-rose-600">*</span>
                                </label>
                                <div class="grid grid-cols-1 sm:grid-cols-12 gap-3">
                                    <!-- Country Code Picker -->
                                    <div class="sm:col-span-5">
                                        <select id="country-code"
                                                wire:model.defer="countryCode"
                                                class="w-full px-3.5 py-3.5 bg-white border-2 border-slate-300 rounded-2xl text-sm text-slate-950 font-bold focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 shadow-sm transition-all">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $countryCodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                                <option value="<?php echo e($item['code']); ?>"><?php echo e($item['label']); ?></option>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                        </select>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['countryCode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-xs text-rose-700 mt-1.5 block font-bold"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>

                                    <!-- Direct Number -->
                                    <div class="sm:col-span-7">
                                        <input type="tel"
                                               id="contact-phone"
                                               wire:model.defer="phone"
                                               placeholder="(555) 019-2834"
                                               class="w-full px-4 py-3.5 bg-white border-2 border-slate-300 rounded-2xl text-base text-slate-950 placeholder-slate-500 font-semibold focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 shadow-sm transition-all" />
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-xs text-rose-700 mt-1.5 block font-bold"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    </div>
                                </div>
                                <span class="text-xs text-slate-700 mt-1.5 block font-semibold">We can connect via direct phone call or WhatsApp per your preference.</span>
                            </div>

                            <!-- Field 3: Email (Optional) -->
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <label for="contact-email" class="block text-xs uppercase tracking-wider text-slate-950 font-extrabold">
                                        Email Address
                                    </label>
                                    <span class="text-[11px] text-slate-800 uppercase tracking-wider font-extrabold bg-slate-200 px-3 py-1 rounded-full border border-slate-300">
                                        Optional
                                    </span>
                                </div>
                                <input type="email"
                                       id="contact-email"
                                       wire:model.defer="email"
                                       placeholder="executive@company.com"
                                       class="w-full px-4 py-3.5 bg-white border-2 border-slate-300 rounded-2xl text-base text-slate-950 placeholder-slate-500 font-semibold focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 shadow-sm transition-all" />
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-xs text-rose-700 mt-1.5 block font-bold"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <!-- Field 4: Message -->
                            <div>
                                <label for="contact-message" class="block text-xs uppercase tracking-wider text-slate-950 font-extrabold mb-2">
                                    Your Message or Flight Request <span class="text-rose-600">*</span>
                                </label>
                                <textarea id="contact-message"
                                          wire:model.defer="message"
                                          rows="5"
                                          placeholder="Please share your travel itinerary, preferred airline (e.g., Emirates, Qatar, Lufthansa), travel dates, number of passengers, or any special requirements..."
                                          class="w-full px-4 py-3.5 bg-white border-2 border-slate-300 rounded-2xl text-base text-slate-950 placeholder-slate-500 font-semibold focus:outline-none focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 shadow-sm transition-all resize-none"></textarea>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="text-xs text-rose-700 mt-1.5 block font-bold"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>

                            <!-- Submit Action -->
                            <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="flex items-center gap-2.5 text-xs text-slate-800 font-bold">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-lock-closed'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-amber-700 shrink-0']); ?>
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
                                    <span>Private &amp; Confidential · Strictly No Spam Guarantee</span>
                                </div>

                                <button type="submit"
                                        class="w-full sm:w-auto px-10 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-bold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-lux-gold flex items-center justify-center gap-2.5 group">
                                    <span>Send Message</span>
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-white group-hover:translate-x-1 group-hover:-translate-y-0.5 transition-transform']); ?>
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
                    </form>
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

    <!-- SECTION 4: FAQS SECTION -->
    <section id="faqs" class="py-20 sm:py-28 bg-slate-100/80 border-t border-slate-200 relative">
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

            <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
                <div class="inline-flex items-center gap-2.5 mb-3">
                    <span class="w-6 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">
                        Help &amp; Transparency
                    </span>
                    <span class="w-6 h-[1.5px] bg-amber-600"></span>
                </div>
                <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-950 tracking-tight leading-[1.15]">
                    Frequently Asked Questions
                </h2>
                <p class="mt-4 text-base sm:text-lg text-slate-800 font-medium max-w-2xl mx-auto leading-relaxed">
                    Answers to common questions about consulting with our flight desk, wholesale consolidator allocations, and booking protocols.
                </p>
            </div>

            <div class="space-y-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="rounded-3xl border-2 border-slate-200 bg-white overflow-hidden shadow-sm transition-all duration-300 <?php echo e($openFaq === $index ? 'border-amber-600 shadow-md' : 'hover:border-slate-300'); ?>">
                        <button type="button"
                                wire:click="toggleFaq(<?php echo e($index); ?>)"
                                class="w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none">
                            <span class="font-serif text-lg sm:text-xl font-extrabold text-slate-950 <?php echo e($openFaq === $index ? 'text-amber-800' : ''); ?>">
                                <?php echo e($faq['question']); ?>

                            </span>
                            <span class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center shrink-0 text-slate-900 transition-transform duration-300 <?php echo e($openFaq === $index ? 'rotate-180 bg-amber-100 text-amber-900' : ''); ?>">
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
                            <div class="px-6 pb-6 pt-3 border-t border-slate-200 text-sm sm:text-base text-slate-800 leading-relaxed font-medium">
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

    <!-- SECTION 5: DARK BG SECTION CTA (Your advisor is one call away) -->
    <section class="py-24 sm:py-32 bg-navy text-white relative overflow-hidden">
        <!-- Ambient Glow in Dark Section -->
        <div class="absolute inset-0 pointer-events-none select-none opacity-20">
            <div class="absolute -top-40 right-1/4 w-[600px] h-[600px] bg-gold rounded-full blur-[140px]"></div>
            <div class="absolute -bottom-40 left-1/4 w-[500px] h-[500px] bg-gold-600 rounded-full blur-[130px]"></div>
        </div>

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'default','class' => 'relative z-10 text-center']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'default','class' => 'relative z-10 text-center']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <!-- Gold Eyebrow -->
            <div class="inline-flex items-center gap-3 mb-6">
                <span class="w-8 h-[1px] bg-gold/50"></span>
                <span class="text-xs font-semibold uppercase tracking-lux text-gold-gradient">
                    Direct Private Concierge Desk
                </span>
                <span class="w-8 h-[1px] bg-gold/50"></span>
            </div>

            <!-- Heading -->
            <h2 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold text-white tracking-tight leading-[1.12] mb-6">
                Your Advisor is <br class="hidden sm:inline">
                <span class="italic font-normal font-serif text-gold-gradient">One Call Away</span>
            </h2>

            <!-- Subtitle -->
            <p class="text-base sm:text-lg text-slate-200 max-w-2xl mx-auto leading-relaxed mb-12 font-medium">
                Avoid generic call centers and automated chatbots. Speak with a dedicated airline consolidator advisor ready to secure your premier business and first class flights with immediate confirmation.
            </p>

            <!-- 3 Columns Details: Contact Number, Support Email, Office Address -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left mb-12">
                <!-- Phone Info Card -->
                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold']); ?>
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
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Direct Advisor Desk</span>
                    <a href="tel:18005550147" class="text-lg sm:text-xl font-bold text-white hover:text-gold transition-colors block">
                        (800) 555-0147
                    </a>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">Toll-Free USA · Available 24/7</span>
                </div>

                <!-- Support Email Card -->
                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-envelope'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold']); ?>
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
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Support Email</span>
                    <a href="mailto:concierge@justbusinessclass.us" class="text-base sm:text-lg font-bold text-white hover:text-gold transition-colors break-all block">
                        concierge@justbusinessclass.us
                    </a>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">Private Proposals &amp; Inquiries</span>
                </div>

                <!-- Office Address Card -->
                <div class="bg-white/10 border border-white/20 hover:border-gold/60 rounded-3xl p-6 backdrop-blur-xl transition-all">
                    <div class="w-10 h-10 rounded-xl bg-gold/20 text-gold-gradient flex items-center justify-center mb-4">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold']); ?>
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
                    </div>
                    <span class="text-[10px] uppercase tracking-widest text-gold-gradient font-extrabold block mb-1">Executive Office</span>
                    <div class="text-base sm:text-lg font-bold text-white block">
                        100 Park Avenue
                    </div>
                    <span class="text-xs text-slate-300 mt-1 block font-medium">New York, NY 10017 · Suite 1600</span>
                </div>
            </div>

            <!-- Call-to-Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="tel:18005550147"
                   class="w-full sm:w-auto px-9 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-lux-gold flex items-center justify-center gap-2.5">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-white']); ?>
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
                <a href="https://wa.me/18005550147"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="w-full sm:w-auto px-8 py-4 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 flex items-center justify-center gap-2.5 shadow-md">
                    <!-- WhatsApp SVG -->
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 2C6.495 2 2 6.496 2 12.032c0 1.986.58 3.842 1.583 5.414L2 22l4.735-1.543a10.02 10.02 0 0 0 5.296 1.511c5.536 0 10.031-4.496 10.031-10.032C22.062 6.496 17.567 2 12.031 2zm5.82 14.283c-.244.686-1.42 1.32-1.956 1.405-.512.08-1.18.115-1.905-.116a12.87 12.87 0 0 1-4.004-2.14 11.235 11.235 0 0 1-2.905-3.627c-.443-.762-.47-1.632-.073-2.112.222-.269.49-.49.733-.733.268-.268.423-.377.633-.024.232.39 1.157 2.825 1.258 3.033.1.207.037.402-.09.609-.127.207-.285.347-.456.559-.17.21-.358.44-.153.791.205.352.912 1.503 1.957 2.433 1.346 1.198 2.482 1.568 2.834 1.743.352.174.559.146.766-.09.208-.236.888-1.036 1.127-1.39.239-.353.477-.294.79-.178.314.116 1.996.94 2.337 1.11.341.17.57.255.654.398.084.143.084.827-.16 1.513z"/>
                    </svg>
                    <span>Message on WhatsApp</span>
                </a>
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
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\livewire\pages\contact.blade.php ENDPATH**/ ?>