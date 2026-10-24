<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg
    'href' => null,
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
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg
    'href' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $baseClasses = 'inline-flex items-center justify-center font-medium uppercase transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-gold';

    $sizes = [
        'sm' => 'px-4 py-2 text-[11px] tracking-wider rounded-xl gap-1.5',
        'md' => 'px-6 py-3 text-xs tracking-lux rounded-xl gap-2',
        'lg' => 'px-8 py-3.5 text-xs font-semibold tracking-lux rounded-xl gap-2.5',
    ];

    $variants = [
        'primary' => 'bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold shadow-lux-gold hover:shadow-lux-glow active:scale-[0.98]',
        'secondary' => 'bg-white hover:bg-silver-50 text-navy border border-silver-300 hover:border-gold/60 shadow-sm',
        'outline' => 'bg-transparent border border-gold/70 text-gold-700 hover:bg-gold-50 hover:border-gold shadow-sm',
        'ghost' => 'bg-transparent text-silver-600 hover:text-gold-700 hover:bg-silver-100',
    ];

    $classes = $baseClasses . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['primary']);
?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($href): ?>
    <a href="<?php echo e($href); ?>" <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </a>
<?php else: ?>
    <button <?php echo e($attributes->merge(['class' => $classes])); ?>>
        <?php echo e($slot); ?>

    </button>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\components\ui\button.blade.php ENDPATH**/ ?>