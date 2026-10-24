<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- Breadcrumb & Hero Header -->
    <section class="relative pt-32 sm:pt-36 pb-12 sm:pb-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-30">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-gradient-to-b from-amber-200 to-transparent blur-3xl rounded-full"></div>
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
                <span class="text-slate-950 font-bold">Terms of Booking</span>
            </nav>

            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">Reservation Terms &amp; Conditions</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-4">
                    Terms of <span class="italic font-normal font-serif text-gold-gradient">Booking</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-700 font-medium max-w-2xl mx-auto leading-relaxed">
                    Standard terms governing wholesale consolidator seat blocks, ticket issuance, changes, and conditions of carriage.
                </p>
                <div class="mt-4 text-xs text-slate-500 font-semibold">Last updated: January 2026</div>
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

    <!-- Terms Content Section -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
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

            <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed space-y-8 font-normal">
                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">1. Agency Role &amp; Consolidator Fares</h2>
                    <p>
                        JustBusinessClass.us operates as an independent boutique travel agency negotiating wholesale consolidator allocations, unpublished net fares, and corporate discount blocks directly with global airline carriers. All flights booked are official, confirmed e-tickets issued on recognized carrier stocks through accredited Global Distribution Systems (GDS).
                    </p>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">2. Quotation &amp; Fare Lock Guarantee</h2>
                    <p>
                        Rate quotations provided by phone, WhatsApp, or written email proposal are based on current tier seat allocations. Airline taxes, government fees, and fuel surcharges are subject to carrier change until payment is authorized and e-tickets are issued. Once ticketed, the fare is guaranteed in writing.
                    </p>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">3. Changes, Cancellations &amp; Reissues</h2>
                    <p>
                        Flexibility conditions vary depending on the chosen fare class:
                    </p>
                    <ul class="list-disc pl-6 space-y-1 mt-2">
                        <li><strong>Wholesale Flexible:</strong> Permitting voluntary flight date or time changes subject to airline fare differences and processing fees.</li>
                        <li><strong>Refundable Tiers:</strong> Fully refundable prior to scheduled departure according to the written terms specified on your itinerary invoice.</li>
                        <li><strong>Restricted Promotional Blocks:</strong> Non-refundable or non-changeable once issued; clients will be explicitly notified in writing before payment confirmation.</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">4. Passports, Visas &amp; Health Regulations</h2>
                    <p>
                        It is the passenger's responsibility to possess a valid passport (minimum 6 months validity from date of return) and required transit or destination visas. Your dedicated flight advisor is available 24/7 to provide transit guidance and alliance check-in protocols.
                    </p>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">5. Airline Conditions of Carriage</h2>
                    <p>
                        All air carriage is subject to the respective operating airlines’ terms, conditions of carriage, and international Warsaw/Montreal conventions. JustBusinessClass.us is not liable for carrier schedule changes, equipment downgrades, or weather delays, but our concierge desk will actively advocate and intervene on your behalf to minimize disruption.
                    </p>
                </div>

                <div class="pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <div class="font-serif font-bold text-slate-950">Questions About Your Reservation?</div>
                        <div class="text-xs text-slate-500">Call (800) 555-0147 or email concierge@justbusinessclass.us</div>
                    </div>
                    <a href="<?php echo e(route('contact')); ?>" wire:navigate class="px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                        Contact Advisory Desk
                    </a>
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
</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\livewire\pages\terms-of-booking.blade.php ENDPATH**/ ?>