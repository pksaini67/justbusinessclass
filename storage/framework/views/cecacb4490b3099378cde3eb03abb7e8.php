<div>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($submitted): ?>
        <div class="p-8 sm:p-12 text-center bg-white/95 backdrop-blur-2xl rounded-3xl border border-gold/40 shadow-lux-card relative overflow-hidden"
             x-data
             x-init="$el.scrollIntoView({ behavior: 'smooth', block: 'center' })">
            <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gold-50 border border-gold/40 flex items-center justify-center text-gold-600 shadow-lux-glow">
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8 text-gold-600']); ?>
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

            <p class="text-xs uppercase tracking-lux text-gold-700 font-semibold mb-2">Private Request Received</p>
            <h3 class="font-serif text-3xl sm:text-4xl text-navy font-bold mb-4">Your Best Price Proposal Is Being Curated</h3>
            <p class="text-silver-600 max-w-xl mx-auto text-sm sm:text-base leading-relaxed mb-6">
                Thank you, <strong class="text-navy"><?php echo e($name); ?></strong>. Your designated flight advisor is auditing wholesale consolidator allocations and unlisted business class inventory. We will deliver the optimal flight proposal to <strong class="text-gold-700"><?php echo e($email); ?></strong>.
            </p>

            <div class="inline-flex items-center gap-2 text-xs text-silver-600 bg-silver-50 px-4 py-2.5 rounded-full border border-silver-200 mb-8">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Advisor Status: Live on desk · Priority response within 30 mins</span>
            </div>

            <div>
                <button type="button"
                        wire:click="resetForm"
                        class="text-xs uppercase tracking-widest text-gold-700 hover:text-gold-800 font-semibold underline underline-offset-8 transition-colors">
                    Submit Another Route Request &rarr;
                </button>
            </div>
        </div>
    <?php else: ?>
        <form wire:submit.prevent="submit" class="bg-dark-gold-card rounded-3xl p-6 sm:p-8 lg:p-10 shadow-[0_25px_60px_-15px_rgba(0,0,0,0.85)] relative backdrop-blur-2xl border border-gold-400/30">
            <!-- Loading Overlay -->
            <div wire:loading.flex class="absolute inset-0 z-30 bg-[#0C0A07]/90 rounded-3xl backdrop-blur-sm items-center justify-center flex-col gap-3">
                <div class="w-10 h-10 border-2 border-gold/40 border-t-gold-400 rounded-full animate-spin"></div>
                <p class="text-xs font-semibold tracking-widest uppercase text-gold-300">Auditing Wholesale Allocations...</p>
            </div>

            <!-- Top Row: Trip Type & Cabin Selection -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-6 border-b border-gold-400/20">
                <!-- Trip Types -->
                <div class="inline-flex p-1 bg-[#1A140B]/90 rounded-2xl border border-gold-400/25">
                    <button type="button"
                            wire:click="setTripType('round_trip')"
                            class="px-4 py-2 text-xs font-semibold uppercase tracking-wider rounded-xl transition-all <?php echo e($tripType === 'round_trip' ? 'bg-gradient-to-r from-gold-400 to-gold-600 text-[#0C0A07] font-bold shadow-md' : 'text-slate-300 hover:text-white'); ?>">
                        Round Trip
                    </button>
                    <button type="button"
                            wire:click="setTripType('one_way')"
                            class="px-4 py-2 text-xs font-semibold uppercase tracking-wider rounded-xl transition-all <?php echo e($tripType === 'one_way' ? 'bg-gradient-to-r from-gold-400 to-gold-600 text-[#0C0A07] font-bold shadow-md' : 'text-slate-300 hover:text-white'); ?>">
                        One Way
                    </button>
                    <button type="button"
                            wire:click="setTripType('multi_city')"
                            class="px-4 py-2 text-xs font-semibold uppercase tracking-wider rounded-xl transition-all <?php echo e($tripType === 'multi_city' ? 'bg-gradient-to-r from-gold-400 to-gold-600 text-[#0C0A07] font-bold shadow-md' : 'text-slate-300 hover:text-white'); ?>">
                        Multi-City
                    </button>
                </div>

                <!-- Cabin Select -->
                <div class="flex items-center gap-2">
                    <span class="text-xs text-gold-300 uppercase tracking-wider hidden sm:inline font-semibold">Cabin:</span>
                    <div class="inline-flex p-1 bg-[#1A140B]/90 rounded-2xl border border-gold-400/25">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = ['Business', 'First', 'Premium Economy']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <button type="button"
                                    wire:click="setCabin('<?php echo e($c); ?>')"
                                    class="px-3.5 py-1.5 text-xs font-semibold rounded-xl transition-all <?php echo e($cabin === $c ? 'bg-gold-400/25 text-gold-200 border border-gold-400/50 shadow-sm' : 'text-slate-300 hover:text-white'); ?>">
                                <?php echo e($c); ?>

                            </button>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Route Fields -->
            <div class="py-6">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($tripType === 'multi_city'): ?>
                    <!-- Multi-city dynamic legs -->
                    <div class="space-y-4">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $legs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $leg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <div class="grid grid-cols-1 md:grid-cols-12 gap-3 p-4 bg-[#140F08]/85 rounded-2xl border border-gold-400/20 relative items-end">
                                <div class="md:col-span-1 flex items-center justify-between md:justify-center">
                                    <span class="text-xs font-bold text-gold-300 tracking-wider uppercase">Leg <?php echo e($index + 1); ?></span>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($legs) > 2): ?>
                                        <button type="button"
                                                wire:click="removeLeg(<?php echo e($index); ?>)"
                                                class="md:hidden text-xs text-rose-400 hover:text-rose-300">
                                            Remove
                                        </button>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="md:col-span-4">
                                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">From</label>
                                    <div class="relative">
                                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-400 absolute left-3 top-3.5']); ?>
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
                                        <input type="text"
                                               wire:model.defer="legs.<?php echo e($index); ?>.origin"
                                               placeholder="Departure City or Airport (e.g. JFK)"
                                               class="w-full pl-9 pr-3 py-2.5 bg-[#1F180D]/90 border border-gold-400/30 rounded-xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner" />
                                    </div>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['legs.' . $index . '.origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="md:col-span-4">
                                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">To</label>
                                    <div class="relative">
                                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-400 absolute left-3 top-3.5']); ?>
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
                                        <input type="text"
                                               wire:model.defer="legs.<?php echo e($index); ?>.destination"
                                               placeholder="Destination City or Airport (e.g. LHR)"
                                               class="w-full pl-9 pr-3 py-2.5 bg-[#1F180D]/90 border border-gold-400/30 rounded-xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner" />
                                    </div>
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['legs.' . $index . '.destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Date</label>
                                    <input type="date"
                                           wire:model.defer="legs.<?php echo e($index); ?>.date"
                                           class="w-full px-3 py-2.5 bg-[#1F180D]/90 border border-gold-400/30 rounded-xl text-sm text-white focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner [color-scheme:dark]" />
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['legs.' . $index . '.date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                                <div class="hidden md:flex md:col-span-1 items-center justify-center">
                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($legs) > 2): ?>
                                        <button type="button"
                                                wire:click="removeLeg(<?php echo e($index); ?>)"
                                                title="Remove this leg"
                                                class="p-2 text-slate-400 hover:text-rose-400 transition-colors">
                                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-trash'); ?>
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
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(count($legs) < 5): ?>
                            <div class="pt-2">
                                <button type="button"
                                        wire:click="addLeg"
                                        class="inline-flex items-center gap-2 text-xs font-semibold text-gold-300 hover:text-gold-200 transition-colors uppercase tracking-wider py-1.5">
                                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-plus-circle'); ?>
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
                                    Add Another Leg (Up to 5)
                                </button>
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php else: ?>
                    <!-- Standard Round Trip & One Way Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Origin -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Flying From</label>
                            <div class="relative">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-paper-airplane'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-400 absolute left-3.5 top-3.5']); ?>
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
                                <input type="text"
                                       wire:model.defer="origin"
                                       placeholder="Origin (e.g. New York / JFK)"
                                       class="w-full pl-10 pr-3 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner transition-all" />
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <!-- Destination -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Flying To</label>
                            <div class="relative">
                                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-map-pin'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-400 absolute left-3.5 top-3.5']); ?>
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
                                <input type="text"
                                       wire:model.defer="destination"
                                       placeholder="Destination (e.g. London / LHR)"
                                       class="w-full pl-10 pr-3 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner transition-all" />
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <!-- Departure Date -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Departure Date</label>
                            <div class="relative">
                                <input type="date"
                                       wire:model.defer="departureDate"
                                       class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner transition-all [color-scheme:dark]" />
                            </div>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['departureDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <!-- Return Date (conditional) -->
                        <div>
                            <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">
                                Return Date
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($tripType === 'one_way'): ?>
                                    <span class="text-slate-400 lowercase font-normal">(not required)</span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </label>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($tripType === 'one_way'): ?>
                                <div class="w-full px-3.5 py-3 bg-[#140F08]/70 border border-dashed border-gold-400/25 rounded-2xl text-sm text-slate-400 italic select-none">
                                    One Way Flight
                                </div>
                            <?php else: ?>
                                <div class="relative">
                                    <input type="date"
                                           wire:model.defer="returnDate"
                                           class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner transition-all [color-scheme:dark]" />
                                </div>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['returnDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <!-- Bottom Row: Passengers, Contact & Submit CTA -->
            <div class="pt-6 border-t border-gold-400/20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-4 items-end">
                <!-- Passengers Stepper Dropdown -->
                <div class="lg:col-span-3 relative" x-data="{ open: false }">
                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Travelers</label>
                    <button type="button"
                            @click="open = !open"
                            @click.away="open = false"
                            class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white flex items-center justify-between text-left focus:outline-none focus:border-gold-300 shadow-inner">
                        <span class="flex items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-user-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-gold-400']); ?>
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
                            <span class="font-medium text-slate-100"><?php echo e($this->passengerSummary); ?></span>
                        </span>
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-chevron-down'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-slate-400 transition-transform',':class' => 'open ? \'rotate-180\' : \'\'']); ?>
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

                    <!-- Popover -->
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-150"
                         x-transition:enter-start="opacity-0 translate-y-1"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-cloak
                         class="absolute z-20 left-0 right-0 mt-2 p-4 bg-[#140F08] border border-gold-400/40 rounded-2xl shadow-2xl space-y-3">
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-xs font-bold text-white">Adults</div>
                                <div class="text-[10px] text-slate-400">Age 12+</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" wire:click="decrementPassenger('adults')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">-</button>
                                <span class="w-6 text-center text-sm font-bold text-gold-300"><?php echo e($adults); ?></span>
                                <button type="button" wire:click="incrementPassenger('adults')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">+</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-xs font-bold text-white">Children</div>
                                <div class="text-[10px] text-slate-400">Age 2–11</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" wire:click="decrementPassenger('children')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">-</button>
                                <span class="w-6 text-center text-sm font-bold text-gold-300"><?php echo e($children); ?></span>
                                <button type="button" wire:click="incrementPassenger('children')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">+</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-xs font-bold text-white">Infants</div>
                                <div class="text-[10px] text-slate-400">Under 2 (on lap)</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <button type="button" wire:click="decrementPassenger('infants')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">-</button>
                                <span class="w-6 text-center text-sm font-bold text-gold-300"><?php echo e($infants); ?></span>
                                <button type="button" wire:click="incrementPassenger('infants')" class="w-7 h-7 rounded-lg border border-gold-400/40 text-white hover:border-gold-300 hover:bg-gold-400/10 flex items-center justify-center font-bold">+</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact: Name -->
                <div class="lg:col-span-3">
                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Your Name</label>
                    <input type="text"
                           wire:model.defer="name"
                           placeholder="Full Name"
                           class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <!-- Contact: Email -->
                <div class="lg:col-span-3">
                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Email for Proposal</label>
                    <input type="email"
                           wire:model.defer="email"
                           placeholder="executive@example.com"
                           class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <!-- Contact: Phone -->
                <div class="lg:col-span-3">
                    <label class="block text-xs uppercase tracking-wider text-slate-300 mb-1.5 font-semibold">Phone Number</label>
                    <input type="tel"
                           wire:model.defer="phone"
                           placeholder="(555) 000-0000"
                           class="w-full px-3.5 py-3 bg-[#18120B]/90 border border-gold-400/30 rounded-2xl text-sm text-white placeholder-slate-400 focus:outline-none focus:border-gold-300 focus:ring-2 focus:ring-gold-400/30 shadow-inner" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-xs text-rose-400 mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>
            </div>

            <!-- Submit CTA & Best Price Trust Bar -->
            <div class="pt-6 mt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3 text-xs text-slate-300">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-s-shield-check'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-gold-400 shrink-0']); ?>
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
                    <span class="text-silver-shimmer">Unpublished wholesale contracts. Strict confidentiality. Best Price Assurance.</span>
                </div>

                <button type="submit"
                        class="w-full sm:w-auto px-9 py-3.5 bg-gradient-to-r from-[#D4B877] via-[#C6A667] to-[#A68037] hover:from-[#E8D2A4] hover:to-[#B8934F] text-[#0C0A07] font-bold text-xs uppercase tracking-lux rounded-2xl transition-all duration-300 shadow-[0_10px_25px_rgba(212,184,119,0.35)] hover:shadow-[0_15px_30px_rgba(212,184,119,0.5)] flex items-center justify-center gap-2.5 group">
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
                </button>
            </div>
        </form>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views/livewire/components/quote-form.blade.php ENDPATH**/ ?>