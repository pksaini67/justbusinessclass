@php
    $content = \App\Support\HomeContent::get();
@endphp

<!-- UNIVERSAL FOOTER (5 Link Columns + Payment Icons + Legal Disclaimer) -->
<footer class="bg-white border-t border-silver-200 pt-16 pb-28 lg:pb-16 text-silver-600 text-xs mt-auto">
    <x-ui.container size="wide">
        <!-- Brand Info Row -->
        <div class="pb-10 mb-10 border-b border-silver-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
            <a href="{{ route('home') }}" wire:navigate class="inline-block">
                <img src="{{ asset('images/logo.svg') }}" alt="JustBusinessClass.us Logo" class="h-10 w-auto">
            </a>
            <div class="text-xs text-silver-500 font-medium max-w-md">
                Premier wholesale and consolidator business class flight reservations across the USA. Direct concierge desk: <strong class="text-navy">(800) 555-0147</strong>.
            </div>
        </div>

        <!-- 5 Columns -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-16">
            @foreach ($content['footer_columns'] as $column)
                <div>
                    <h4 class="font-serif text-sm font-bold text-navy uppercase tracking-wider mb-4">
                        {{ $column['title'] }}
                    </h4>
                    <ul class="space-y-2.5">
                        @foreach ($column['links'] as $link)
                            @php
                                $isInternalRoute = str_starts_with($link['url'], '/') && !str_contains($link['url'], '#');
                            @endphp
                            <li>
                                <a href="{{ $link['url'] }}"
                                   @if($isInternalRoute) wire:navigate @endif
                                   class="text-silver-500 hover:text-gold-700 transition-colors font-medium">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <!-- Payment Icons Row (Visa, Mastercard, Amex, Discover in Crisp Silver/Gold) -->
        <div class="pt-8 border-t border-silver-200 flex flex-col sm:flex-row items-center justify-between gap-6 mb-8">
            <div class="flex items-center gap-4">
                <span class="text-[11px] uppercase tracking-wider text-silver-400 font-bold">Accepted Cards &amp; Billing:</span>
                <div class="flex items-center gap-2.5">
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Visa">
                        <img src="{{ asset('images/cards/visa.svg') }}" alt="Visa" class="h-4.5 w-auto object-contain" width="40" height="18">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Mastercard">
                        <img src="{{ asset('images/cards/mastercard.svg') }}" alt="Mastercard" class="h-5 w-auto object-contain" width="36" height="20">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="American Express">
                        <img src="{{ asset('images/cards/amex.svg') }}" alt="American Express" class="h-4.5 w-auto object-contain" width="40" height="18">
                    </div>
                    <div class="h-8 px-2.5 py-1 rounded-lg bg-white border border-silver-200/90 shadow-2xs flex items-center justify-center hover:border-gold/40 transition-colors" title="Discover">
                        <img src="{{ asset('images/cards/discover.png') }}" alt="Discover" class="h-4 w-auto object-contain" width="45" height="16">
                    </div>
                </div>
            </div>

        </div>

        <!-- Legal Fare Disclaimer -->
        <div class="text-[11px] text-silver-500 leading-relaxed border-t border-silver-100 pt-6 space-y-3 font-normal">
            <p>
                <strong>Wholesale Fare Disclaimer:</strong> {{ $content['brand']['name'] }} operates as an independent flight agency securing consolidator allocations, unlisted net fares, and corporate discount blocks. Fares are subject to advance booking rules, seat tier availability, and seasonal routing adjustments. Final rates and taxes are confirmed in writing at reservation.
            </p>
            <p>
                <strong>Headquarters:</strong> {{ $content['brand']['address'] }}. All flight reservations are subject to airline conditions of carriage.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-2 pt-4 text-silver-400">
                <div>&copy; {{ date('Y') }} {{ $content['brand']['name'] }}. All rights reserved.</div>
                <div class="text-silver-500 font-medium">Concierge Business &amp; First Class Flights, Personal to You.</div>
            </div>
        </div>
    </x-ui.container>
</footer>
