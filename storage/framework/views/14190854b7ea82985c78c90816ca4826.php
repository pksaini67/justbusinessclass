<div class="relative overflow-hidden bg-slate-50 text-slate-900">
    <!-- Breadcrumb & Hero Header (Same styling as /airlines page) -->
    <section class="relative pt-32 sm:pt-36 pb-14 sm:pb-20 bg-gradient-to-b from-white via-slate-50 to-slate-100/60 border-b border-slate-200/80">
        <!-- Ambient Champagne Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-40">
            <div class="absolute -top-36 left-1/2 -translate-x-1/2 w-[850px] h-[400px] bg-gradient-to-b from-amber-200/50 via-amber-100/20 to-transparent blur-3xl rounded-full"></div>
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

            <!-- Breadcrumbs -->
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-md border border-slate-200 shadow-sm mb-6 text-xs text-slate-700 font-semibold">
                <a href="<?php echo e(route('home')); ?>" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-700">
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
                <span class="text-slate-300 font-bold">/</span>
                <span class="text-slate-950 font-bold">Best Flight Deals</span>
            </nav>

            <div class="max-w-3xl mx-auto">
                <!-- Eyebrow -->
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-[11px] sm:text-xs font-bold uppercase tracking-lux text-amber-800">Unpublished Wholesale Rates</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-5">
                    Business Class <span class="italic font-normal font-serif text-gold-gradient">Country Deals</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-700 font-medium max-w-2xl mx-auto leading-relaxed">
                    Save 30% to 60% on international business &amp; first class flights. Browse premier destinations across Oceania, Europe, Asia, and the Americas with dedicated flight concierge support.
                </p>
            </div>

            <!-- Search & Region Filter Bar -->
            <div class="mt-10 max-w-2xl mx-auto flex flex-col sm:flex-row items-center gap-3">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-magnifying-glass'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5 text-amber-700']); ?>
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
                    <input type="text"
                           wire:model.live.debounce.300ms="search"
                           placeholder="Search destination country (e.g. Australia, France, Japan)..."
                           class="w-full pl-11 pr-10 py-3.5 rounded-2xl bg-white border border-slate-300/90 shadow-sm focus:border-amber-600 focus:ring-2 focus:ring-amber-500/20 text-slate-900 placeholder:text-slate-400 text-sm font-medium transition-all" />
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search): ?>
                        <button type="button" wire:click="$set('search', '')" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-x-mark'); ?>
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
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                </div>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($regions->isNotEmpty()): ?>
                    <div class="inline-flex items-center p-1.5 bg-white border border-slate-300/90 rounded-2xl shadow-sm shrink-0 gap-1 overflow-x-auto max-w-full">
                        <button type="button"
                                wire:click="setRegion('all')"
                                class="px-3.5 py-2 text-xs font-bold rounded-xl transition-all <?php echo e($region === 'all' ? 'bg-slate-950 text-amber-300 shadow-sm' : 'text-slate-600 hover:text-slate-950 hover:bg-slate-100'); ?>">
                            All
                        </button>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <button type="button"
                                    wire:click="setRegion('<?php echo e($r); ?>')"
                                    class="px-3.5 py-2 text-xs font-bold rounded-xl transition-all whitespace-nowrap <?php echo e($region === $r ? 'bg-slate-950 text-amber-300 shadow-sm' : 'text-slate-600 hover:text-slate-950 hover:bg-slate-100'); ?>">
                                <?php echo e($r); ?>

                            </button>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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

    <!-- SECTION: LUXURY DEAL CARDS GRID -->
    <section class="py-16 sm:py-24 bg-slate-50 relative">
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

            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($deals->isEmpty()): ?>
                <div class="text-center py-20 bg-white rounded-3xl border border-slate-200/90 shadow-sm p-8 max-w-md mx-auto">
                    <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-100/70 text-amber-700 flex items-center justify-center mb-4">
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-o-globe-americas'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-8 h-8']); ?>
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
                    <h3 class="font-serif text-xl font-bold text-slate-950 mb-2">No Destinations Found</h3>
                    <p class="text-sm text-slate-600 mb-6">No country deal matched "<?php echo e($search); ?>". Contact our concierge directly for unlisted custom routing.</p>
                    <button type="button"
                            wire:click="$set('search', ''); $set('region', 'all');"
                            class="px-6 py-3 bg-gold-gradient text-white font-bold text-xs uppercase tracking-wider rounded-xl shadow-lux-gold">
                        Reset Filters
                    </button>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $deals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <article <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'deal-card-'.e($deal->id).''; ?>wire:key="deal-card-<?php echo e($deal->id); ?>"
                                 class="group bg-white rounded-3xl border border-slate-200/90 shadow-sm hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            
                            <!-- Card Header Image / Graphic Stage -->
                            <a href="<?php echo e(route('deals.show', $deal->slug)); ?>" wire:navigate class="relative block aspect-[16/10] bg-slate-950 overflow-hidden">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($deal->featured_image_url): ?>
                                    <img src="<?php echo e($deal->featured_image_url); ?>"
                                         alt="<?php echo e($deal->country); ?> Business Class Deals"
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         loading="lazy" />
                                <?php else: ?>
                                    <!-- Dynamic Destination Graphic Canvas -->
                                    <div class="w-full h-full bg-gradient-to-br from-slate-950 via-slate-900 to-amber-950/80 p-8 flex flex-col justify-between relative overflow-hidden group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute -right-8 -bottom-8 w-48 h-48 rounded-full bg-amber-500/10 blur-2xl pointer-events-none"></div>
                                        <div class="flex items-center justify-between z-10">
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest bg-amber-400 text-slate-950">
                                                <?php echo e($deal->savings_tag ?? '30-60% OFF'); ?>

                                            </span>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($deal->country_code): ?>
                                                <span class="text-xs font-mono font-bold text-amber-200 tracking-wider">
                                                    <?php echo e($deal->country_code); ?>

                                                </span>
                                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                        </div>
                                        <div class="z-10">
                                            <span class="text-[11px] uppercase tracking-wider text-amber-300/80 font-bold block mb-1">
                                                <?php echo e($deal->region); ?>

                                            </span>
                                            <h3 class="font-serif text-3xl font-bold text-white tracking-tight">
                                                <?php echo e($deal->country); ?>

                                            </h3>
                                        </div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                                <!-- Region & Savings Pill Badges -->
                                <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-black tracking-wider uppercase bg-slate-950/90 backdrop-blur-md text-amber-300 border border-slate-700 shadow-sm">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                        <span><?php echo e($deal->region); ?></span>
                                    </span>
                                </div>

                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($deal->starting_price): ?>
                                    <div class="absolute bottom-4 right-4 z-10">
                                        <span class="px-3.5 py-1.5 rounded-xl bg-white/95 backdrop-blur-md text-slate-950 font-bold text-xs shadow-md border border-slate-200">
                                            Fares from <span class="text-amber-800 font-extrabold">$<?php echo e(number_format($deal->starting_price)); ?></span>*
                                        </span>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </a>

                            <!-- Card Body -->
                            <div class="p-7 sm:p-8 flex flex-col flex-grow justify-between">
                                <div>
                                    <h3 class="font-serif text-2xl font-bold text-slate-950 group-hover:text-amber-800 transition-colors leading-snug mb-3">
                                        <a href="<?php echo e(route('deals.show', $deal->slug)); ?>" wire:navigate>
                                            <?php echo e($deal->display_title); ?>

                                        </a>
                                    </h3>

                                    <p class="text-slate-600 text-sm line-clamp-3 leading-relaxed mb-6 font-normal">
                                        <?php echo e($deal->summary ?? "Unpublished wholesale business class flight contracts to {$deal->country} on flagship international airlines."); ?>

                                    </p>

                                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!empty($deal->top_cities)): ?>
                                        <div class="flex flex-wrap gap-1.5 mb-6">
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = array_slice($deal->top_cities, 0, 4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                                <span class="text-[11px] font-semibold text-slate-700 bg-slate-100 px-2.5 py-1 rounded-lg">
                                                    <?php echo e($city); ?>

                                                </span>
                                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                        </div>
                                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                </div>

                                <!-- Action Row -->
                                <div class="pt-5 border-t border-slate-100 flex items-center justify-between">
                                    <div class="text-xs text-slate-500 font-semibold">
                                        <?php echo e($deal->cabin_class ?? 'Business & First Class'); ?>

                                    </div>

                                    <a href="<?php echo e(route('deals.show', $deal->slug)); ?>"
                                       wire:navigate
                                       class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-wider text-amber-700 group-hover:text-amber-800 group-hover:translate-x-1 transition-all">
                                        <span>View Country Deals</span>
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
                                </div>
                            </div>
                        </article>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                </div>

                <!-- Pagination -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($deals->hasPages()): ?>
                    <div class="mt-14">
                        <?php echo e($deals->links()); ?>

                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
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

    <!-- QUOTATION FORM SECTION -->
    <section id="quote" class="py-16 sm:py-24 bg-gradient-to-b from-white via-slate-50 to-slate-100 border-t border-slate-200">
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

            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-2">Unpublished Net Rates</span>
                <h2 class="font-serif text-3xl sm:text-5xl font-extrabold text-slate-950 tracking-tight">
                    Request a Customized <span class="italic font-normal font-serif text-gold-gradient">Flight Proposal</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-700 mt-3 font-medium">
                    Submit your itinerary below. Our flight desk audits consolidator allocations and delivers written options within 30 minutes.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.quote-form', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1448772429-0', $__key);

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

    <!-- DARK CTA SECTION -->
    <section class="py-16 sm:py-20 bg-slate-950 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gold-gradient opacity-10 pointer-events-none"></div>
        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'wide','class' => 'relative z-10 text-center max-w-3xl mx-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'wide','class' => 'relative z-10 text-center max-w-3xl mx-auto']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <span class="text-xs uppercase tracking-lux text-amber-400 font-bold block mb-3">Direct Concierge Booking</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-extrabold mb-4">
                Need urgent departures or complex multi-country routing?
            </h2>
            <p class="text-slate-300 text-sm sm:text-base mb-8 font-normal">
                Call our senior flight advisors directly. We secure confirmed business class seats when commercial retail websites show sold-out cabins.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="tel:18005550147" class="w-full sm:w-auto px-8 py-4 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-bold text-xs uppercase tracking-wider rounded-2xl shadow-lux-gold flex items-center justify-center gap-2">
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heroicon-m-phone'); ?>
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
                    <span>Call Concierge: (800) 555-0147</span>
                </a>
                <a href="<?php echo e(route('contact')); ?>" wire:navigate class="w-full sm:w-auto px-8 py-4 bg-white/10 hover:bg-white/15 border border-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-2xl transition-all">
                    <span>Message Travel Desk</span>
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
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\livewire\pages\deals-index.blade.php ENDPATH**/ ?>