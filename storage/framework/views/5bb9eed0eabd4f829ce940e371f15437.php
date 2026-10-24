<?php
    $content = \App\Support\HomeContent::get();
?>

<!-- UNIVERSAL FOOTER (5 Link Columns + Payment Icons + Legal Disclaimer) -->
<footer class="bg-white border-t border-silver-200 pt-16 pb-28 lg:pb-16 text-silver-600 text-xs mt-auto">
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

        <!-- Brand Info Row -->
        <div class="pb-10 mb-10 border-b border-silver-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <a href="<?php echo e(route('home')); ?>" wire:navigate class="inline-block">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="JustBusinessClass.us Logo" class="h-10 w-auto">
            </a>
            <div class="text-xs text-silver-500 font-medium max-w-md">
                Premier wholesale and consolidator business class flight reservations across the USA. Direct concierge desk: <strong class="text-navy">(800) 555-0147</strong>.
            </div>
        </div>

        <!-- 5 Columns -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-16">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $content['footer_columns']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                <div>
                    <h4 class="font-serif text-sm font-bold text-navy uppercase tracking-wider mb-4">
                        <?php echo e($column['title']); ?>

                    </h4>
                    <ul class="space-y-2.5">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $column['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <?php
                                $isInternalRoute = str_starts_with($link['url'], '/') && !str_contains($link['url'], '#');
                            ?>
                            <li>
                                <a href="<?php echo e($link['url']); ?>"
                                   <?php if($isInternalRoute): ?> wire:navigate <?php endif; ?>
                                   class="text-silver-500 hover:text-gold-700 transition-colors font-medium">
                                    <?php echo e($link['label']); ?>

                                </a>
                            </li>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </ul>
                </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
        </div>

        <!-- Payment Icons Row (Visa, Mastercard, Amex, Discover in Crisp Silver/Gold) -->
        <div class="pt-8 border-t border-silver-200 flex flex-col sm:flex-row items-center justify-between gap-6 mb-8">
            <div class="flex items-center gap-4">
                <span class="text-[11px] uppercase tracking-wider text-silver-400 font-bold">Accepted Cards &amp; Billing:</span>
                <div class="flex items-center gap-2.5">
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Visa">
                        <img src="<?php echo e(asset('images/cards/visa.svg')); ?>" alt="Visa" class="h-4.5 w-auto object-contain" width="40" height="18">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Mastercard">
                        <img src="<?php echo e(asset('images/cards/mastercard.svg')); ?>" alt="Mastercard" class="h-5 w-auto object-contain" width="36" height="20">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="American Express">
                        <img src="<?php echo e(asset('images/cards/amex.svg')); ?>" alt="American Express" class="h-4.5 w-auto object-contain" width="40" height="18">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Discover">
                        <img src="<?php echo e(asset('images/cards/discover.png')); ?>" alt="Discover" class="h-4 w-auto object-contain" width="45" height="16">
                    </div>
                </div>
            </div>

        </div>

        <!-- Legal Fare Disclaimer -->
        <div class="text-[11px] text-silver-500 leading-relaxed border-t border-silver-100 pt-6 space-y-3 font-normal">
            <p>
                <strong>Wholesale Fare Disclaimer:</strong> <?php echo e($content['brand']['name']); ?> operates as an independent flight agency securing consolidator allocations, unlisted net fares, and corporate discount blocks. Fares are subject to advance booking rules, seat tier availability, and seasonal routing adjustments. Final rates and taxes are confirmed in writing at reservation.
            </p>
            <p>
                <strong>Headquarters:</strong> <?php echo e($content['brand']['address']); ?>. All flight reservations are subject to airline conditions of carriage.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 pt-4 text-silver-400">
                <div>&copy; <?php echo e(date('Y')); ?> <?php echo e($content['brand']['name']); ?>. All rights reserved.</div>
                <div class="text-silver-500 font-medium">Concierge Business &amp; First Class Flights, Personal to You.</div>
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
</footer>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views/components/footer.blade.php ENDPATH**/ ?>