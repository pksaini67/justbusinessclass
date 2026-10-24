<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'size' => 'default', // default, narrow, wide, full
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
    'size' => 'default', // default, narrow, wide, full
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $sizes = [
        'narrow' => 'max-w-5xl',
        'default' => 'max-w-7xl',
        'wide' => 'max-w-[1400px]',
        'full' => 'max-w-full',
    ];
?>

<div <?php echo e($attributes->merge(['class' => 'mx-auto px-4 sm:px-6 lg:px-8 w-full ' . ($sizes[$size] ?? $sizes['default'])])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH C:\xampp\htdocs\justbusinessclass.us\resources\views/components/ui/container.blade.php ENDPATH**/ ?>