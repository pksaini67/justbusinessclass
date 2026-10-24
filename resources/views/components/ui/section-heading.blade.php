@props([
    'eyebrow' => null,
    'title' => '',
    'subtitle' => null,
    'align' => 'center', // center, left
])

@php
    $alignClasses = $align === 'center' ? 'text-center mx-auto items-center' : 'text-left items-start';
@endphp

<div {{ $attributes->merge(['class' => 'max-w-3xl flex flex-col mb-12 sm:mb-16 ' . $alignClasses]) }}>
    @if ($eyebrow)
        <div class="inline-flex items-center gap-2.5 mb-3">
            <span class="w-6 h-[1px] bg-gold/70"></span>
            <span class="text-xs font-semibold uppercase tracking-lux text-gold-700">
                {{ $eyebrow }}
            </span>
            @if ($align === 'center')
                <span class="w-6 h-[1px] bg-gold/70"></span>
            @endif
        </div>
    @endif

    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl tracking-tight leading-[1.15] text-navy font-bold">
        {{ $title }}
    </h2>

    @if ($subtitle)
        <p class="mt-4 text-sm sm:text-base leading-relaxed text-silver-600 max-w-2xl font-normal">
            {{ $subtitle }}
        </p>
    @endif
</div>
