@props([
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg
    'href' => null,
])

@php
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
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
