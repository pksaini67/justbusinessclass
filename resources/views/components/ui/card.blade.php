@props([
    'variant' => 'glass', // glass, white, silver, outline
    'hover' => true,
])

@php
    $baseClasses = 'rounded-2xl transition-all duration-500 relative overflow-hidden';

    $variants = [
        'glass' => 'bg-white/90 backdrop-blur-xl border border-silver-200/90 shadow-lux-card hover:shadow-lux-card-hover',
        'white' => 'bg-white border border-silver-200 shadow-lux-card hover:shadow-lux-card-hover',
        'silver' => 'bg-silver-50 border border-silver-200/80 shadow-lux-card hover:shadow-lux-card-hover',
        'outline' => 'bg-white/60 backdrop-blur-md border border-silver-300/80 hover:border-gold/50 shadow-sm',
    ];

    $hoverClass = $hover ? 'hover:-translate-y-1.5 transition-all duration-300' : '';

    $classes = "{$baseClasses} {$variants[$variant]} {$hoverClass}";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
