@props([
    'size' => 'default', // default, narrow, wide, full
])

@php
    $sizes = [
        'narrow' => 'max-w-5xl',
        'default' => 'max-w-7xl',
        'wide' => 'max-w-[1400px]',
        'full' => 'max-w-full',
    ];
@endphp

<div {{ $attributes->merge(['class' => 'mx-auto px-4 sm:px-6 lg:px-8 w-full ' . ($sizes[$size] ?? $sizes['default'])]) }}>
    {{ $slot }}
</div>
