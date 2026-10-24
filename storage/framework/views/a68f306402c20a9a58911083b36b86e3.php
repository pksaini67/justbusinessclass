<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'variant' => 'glass', // glass, white, silver, outline
    'hover' => true,
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
    'variant' => 'glass', // glass, white, silver, outline
    'hover' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $baseClasses = 'rounded-2xl transition-all duration-500 relative overflow-hidden';

    $variants = [
        'glass' => 'bg-white/90 backdrop-blur-xl border border-silver-200/90 shadow-lux-card hover:shadow-lux-card-hover',
        'white' => 'bg-white border border-silver-200 shadow-lux-card hover:shadow-lux-card-hover',
        'silver' => 'bg-silver-50 border border-silver-200/80 shadow-lux-card hover:shadow-lux-card-hover',
        'outline' => 'bg-white/60 backdrop-blur-md border border-silver-300/80 hover:border-gold/50 shadow-sm',
    ];

    $hoverClass = $hover ? 'hover:-translate-y-1.5 transition-all duration-300' : '';

    $classes = "{$baseClasses} {$variants[$variant]} {$hoverClass}";
?>

<div <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views\components\ui\card.blade.php ENDPATH**/ ?>