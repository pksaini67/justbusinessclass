<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- HERO & BREADCRUMB HEADER -->
    <section class="relative pt-32 sm:pt-36 pb-12 sm:pb-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <!-- Ambient Glow -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-30">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-gradient-to-b from-amber-200 to-transparent blur-3xl rounded-full"></div>
        </div>

        <?php if (isset($component)) { $__componentOriginalcdb9c3c7335a462cdf37db675e5c1408 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdb9c3c7335a462cdf37db675e5c1408 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.container','data' => ['size' => 'wide','class' => 'relative z-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'wide','class' => 'relative z-10']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <!-- Breadcrumbs Trail -->
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
                <a href="<?php echo e(route('blog.index')); ?>" wire:navigate class="hover:text-amber-700 transition-colors text-slate-800">
                    Blog
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold truncate max-w-[200px] sm:max-w-md"><?php echo e($post->title); ?></span>
            </nav>

            <div class="max-w-4xl">
                <!-- Category & Read Time -->
                <div class="flex flex-wrap items-center gap-2.5 sm:gap-3 mb-5">
                    <a href="<?php echo e(route('blog.index', ['category' => $post->blogCategory?->name ?? $post->category])); ?>" wire:navigate class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-black tracking-wider uppercase bg-slate-950 text-amber-300 hover:bg-slate-800 transition-colors shadow-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                        <span><?php echo e($post->blogCategory?->name ?? $post->category); ?></span>
                    </a>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->subcategory): ?>
                        <a href="<?php echo e(route('blog.index', ['category' => $post->subcategory->name])); ?>" wire:navigate class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-bold tracking-wide uppercase bg-amber-100 text-amber-900 hover:bg-amber-200 transition-colors border border-amber-300">
                            <?php echo e($post->subcategory->name); ?>

                        </a>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    <span class="text-xs text-slate-500 font-bold">·</span>
                    <span class="text-xs font-semibold text-slate-600"><?php echo e($post->read_time ?? 5); ?> min read</span>
                    <span class="text-xs text-slate-500 font-bold">·</span>
                    <span class="text-xs font-semibold text-slate-600"><?php echo e($post->published_at?->format('F d, Y') ?? 'Published'); ?></span>
                </div>

                <!-- Headline with Luxury Typography -->
                <h1 class="font-serif text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.14] mb-6">
                    <?php echo e($post->title); ?>

                </h1>

                <!-- Lead Deck / Excerpt -->
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->excerpt): ?>
                    <p class="text-lg sm:text-xl text-slate-700 font-medium leading-relaxed mb-6">
                        <?php echo e($post->excerpt); ?>

                    </p>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <!-- Author Byline -->
                <div class="flex items-center gap-3 pt-4 border-t border-slate-200">
                    <div class="w-10 h-10 rounded-full bg-slate-950 text-amber-300 flex items-center justify-center font-bold text-xs">
                        <?php echo e(substr($post->author_name, 0, 2)); ?>

                    </div>
                    <div>
                        <div class="text-sm font-bold text-slate-950"><?php echo e($post->author_name); ?></div>
                        <div class="text-[11px] text-slate-500 font-medium">JustBusinessClass.us Private Aviation Desk</div>
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

    <!-- FEATURED IMAGE (IF AVAILABLE) -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($post->featured_image_url): ?>
        <section class="bg-slate-100 py-8 border-b border-slate-200">
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

                <div class="max-w-4xl mx-auto rounded-3xl overflow-hidden shadow-[0_20px_50px_-12px_rgba(15,23,42,0.15)] border border-slate-200">
                    <img src="<?php echo e($post->featured_image_url); ?>" alt="<?php echo e($post->title); ?>" class="w-full max-h-[500px] object-cover" />
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
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- ARTICLE MAIN CONTENT -->
    <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
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

            <div class="max-w-3xl mx-auto">
                <!-- Rich Editor Content matching website typography -->
                <div class="prose prose-slate prose-lg max-w-none prose-headings:font-serif prose-headings:font-bold prose-headings:tracking-tight prose-headings:text-slate-950 prose-h2:text-3xl prose-h2:sm:text-4xl prose-h2:mt-12 prose-h2:mb-5 prose-h2:border-b prose-h2:border-slate-200 prose-h2:pb-3 prose-h3:text-2xl prose-h3:text-slate-900 prose-h3:mt-8 prose-h3:mb-3 prose-p:text-slate-800 prose-p:leading-relaxed prose-p:font-normal prose-li:text-slate-800 prose-li:my-1.5 prose-strong:text-slate-950 prose-strong:font-bold prose-a:text-amber-700 hover:prose-a:text-amber-800 prose-blockquote:border-l-amber-600 prose-blockquote:bg-slate-50 prose-blockquote:py-3 prose-blockquote:px-5 prose-blockquote:rounded-r-2xl prose-blockquote:text-slate-800 prose-blockquote:font-serif prose-blockquote:italic">
                    <?php echo $post->content; ?>

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
                            <span>Call (800) 555-0147</span>
                        </a>
                        <a href="<?php echo e(route('airlines.index')); ?>" class="w-full sm:w-auto px-6 py-3.5 bg-white/10 hover:bg-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-xl border border-white/20 flex items-center justify-center gap-2 transition-colors">
                            <span>Browse Fleet Allocations</span>
                        </a>
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

    <!-- SECTION: EMBEDDED QUOTATION FORM ON DETAIL PAGE -->
    <section class="py-16 sm:py-20 bg-slate-50 border-b border-slate-200">
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
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('components.quote-form', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1044247668-0', $__key);

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

    <!-- RECENT POSTS SECTION -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($recentPosts->isNotEmpty()): ?>
        <section class="py-16 sm:py-20 bg-white border-b border-slate-200">
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

                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-10">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-lux text-amber-800 block mb-1">More Articles</span>
                        <h3 class="font-serif text-3xl font-bold text-slate-950">
                            Recent <span class="italic font-normal font-serif text-gold-gradient">Aviation Insights</span>
                        </h3>
                    </div>
                    <a href="<?php echo e(route('blog.index')); ?>" wire:navigate class="text-xs font-bold uppercase tracking-wider text-amber-700 hover:text-amber-800 flex items-center gap-1.5 transition-colors">
                        <span>View All Articles</span>
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

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $recentPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <article class="group bg-white rounded-3xl border border-slate-200/90 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <a href="<?php echo e(route('blog.show', $recent->slug)); ?>" wire:navigate class="block aspect-[16/10] bg-slate-900 overflow-hidden relative">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($recent->featured_image_url): ?>
                                    <img src="<?php echo e($recent->featured_image_url); ?>" alt="<?php echo e($recent->title); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                                <?php else: ?>
                                    <div class="w-full h-full bg-gradient-to-br from-slate-950 to-slate-800 p-6 flex flex-col justify-end">
                                        <div class="font-serif text-lg font-bold text-white line-clamp-2">
                                            <?php echo e($recent->title); ?>

                                        </div>
                                    </div>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </a>

                            <div class="p-6 flex flex-col flex-grow justify-between">
                                <div>
                                    <div class="text-[11px] text-amber-800 font-bold uppercase tracking-wider mb-2">
                                        <?php echo e($recent->category); ?>

                                    </div>
                                    <h4 class="font-serif text-lg font-bold text-slate-950 group-hover:text-amber-800 transition-colors line-clamp-2 mb-2 leading-snug">
                                        <a href="<?php echo e(route('blog.show', $recent->slug)); ?>" wire:navigate>
                                            <?php echo e($recent->title); ?>

                                        </a>
                                    </h4>
                                    <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed">
                                        <?php echo e($recent->excerpt); ?>

                                    </p>
                                </div>

                                <div class="pt-4 mt-4 border-t border-slate-100 flex items-center justify-between">
                                    <span class="text-[11px] text-slate-400 font-medium">
                                        <?php echo e($recent->published_at?->format('M d, Y')); ?>

                                    </span>
                                    <a href="<?php echo e(route('blog.show', $recent->slug)); ?>" wire:navigate class="text-xs font-bold text-amber-700 group-hover:text-amber-800">
                                        Read &rarr;
                                    </a>
                                </div>
                            </div>
                        </article>
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
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- SECTION: DARK BG SECTION CTA (Your advisor is one call away) -->
    <section class="py-24 sm:py-32 bg-navy text-white relative overflow-hidden">
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
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\livewire\pages\blog-detail.blade.php ENDPATH**/ ?>