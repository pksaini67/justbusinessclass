<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow' => null,
    'title' => '',
    'subtitle' => null,
    'align' => 'center', // center, left
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'eyebrow' => null,
    'title' => '',
    'subtitle' => null,
    'align' => 'center', // center, left
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $alignClasses = $align === 'center' ? 'text-center mx-auto items-center' : 'text-left items-start';
?>

<div <?php echo e($attributes->merge(['class' => 'max-w-3xl flex flex-col mb-12 sm:mb-16 ' . $alignClasses])); ?>>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($eyebrow): ?>
        <div class="inline-flex items-center gap-2.5 mb-3">
            <span class="w-6 h-[1px] bg-gold/70"></span>
            <span class="text-xs font-semibold uppercase tracking-lux text-gold-700">
                <?php echo e($eyebrow); ?>

            </span>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($align === 'center'): ?>
                <span class="w-6 h-[1px] bg-gold/70"></span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl tracking-tight leading-[1.15] text-navy font-bold">
        <?php echo e($title); ?>

    </h2>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($subtitle): ?>
        <p class="mt-4 text-sm sm:text-base leading-relaxed text-silver-600 max-w-2xl font-normal">
            <?php echo e($subtitle); ?>

        </p>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\components\ui\section-heading.blade.php ENDPATH**/ ?>