<div class="w-full">
    @if ($subscribed)
        <div class="p-6 bg-white/95 rounded-2xl border border-gold/40 text-center shadow-lux-card">
            <x-heroicon-o-check-circle class="w-8 h-8 text-gold-600 mx-auto mb-2" />
            <h4 class="font-serif text-xl font-bold text-navy">Welcome to the JustBusinessClass.us Private Advisory</h4>
            <p class="text-xs text-silver-600 mt-1">
                Thank you, {{ $name }}. We will transmit confidential seasonal wholesale fare releases directly to <strong class="text-gold-700">{{ $email }}</strong>.
            </p>
        </div>
    @else
        <form wire:submit.prevent="subscribe" class="space-y-3">
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="flex-1">
                    <input type="text"
                           wire:model.defer="name"
                           placeholder="Your Name"
                           class="w-full px-4 py-3 bg-white border border-silver-300 rounded-2xl text-xs text-navy placeholder-silver-400 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20 shadow-sm" />
                    @error('name') <span class="text-[11px] text-rose-600 mt-1 block">{{ $message }}</span> @enderror
                </div>
                <div class="flex-1">
                    <input type="email"
                           wire:model.defer="email"
                           placeholder="Executive Email"
                           class="w-full px-4 py-3 bg-white border border-silver-300 rounded-2xl text-xs text-navy placeholder-silver-400 focus:outline-none focus:border-gold focus:ring-2 focus:ring-gold/20 shadow-sm" />
                    @error('email') <span class="text-[11px] text-rose-600 mt-1 block">{{ $message }}</span> @enderror
                </div>
                <button type="submit"
                        class="px-7 py-3 bg-gold-gradient hover:bg-gold-gradient-hover text-white font-semibold text-xs uppercase tracking-lux rounded-2xl transition-all whitespace-nowrap shadow-lux-gold flex items-center justify-center gap-2">
                    <span wire:loading.remove wire:target="subscribe">Join Private Dispatch</span>
                    <span wire:loading wire:target="subscribe" class="inline-flex items-center gap-2">
                        <span class="w-3 h-3 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
                        Joining...
                    </span>
                    <x-heroicon-m-envelope class="w-4 h-4 text-white" />
                </button>
            </div>
            <p class="text-[11px] text-silver-500">Transmitted bi-weekly. Strict confidentiality. Zero spam. Unsubscribe anytime.</p>
        </form>
    @endif
</div>
