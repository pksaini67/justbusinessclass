<div class="relative overflow-hidden bg-white text-slate-900">
    <!-- Breadcrumb & Hero Header -->
    <section class="relative pt-32 sm:pt-36 pb-12 sm:pb-16 bg-gradient-to-b from-slate-100 via-slate-50 to-white border-b border-slate-200">
        <div class="absolute inset-0 z-0 pointer-events-none select-none opacity-30">
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[720px] h-[360px] bg-gradient-to-b from-amber-200 to-transparent blur-3xl rounded-full"></div>
        </div>

        <x-ui.container size="wide" class="relative z-10 text-center">
            <nav aria-label="Breadcrumb" class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white border border-slate-300 shadow-sm mb-6 text-xs text-slate-800 font-semibold">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-amber-700 transition-colors flex items-center gap-1.5 text-slate-800">
                    <x-heroicon-m-home class="w-4 h-4 text-amber-700" />
                    <span>Home</span>
                </a>
                <span class="text-slate-400 font-bold">/</span>
                <span class="text-slate-950 font-bold">Privacy Policy</span>
            </nav>

            <div class="max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-3 mb-4">
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                    <span class="text-xs font-bold uppercase tracking-lux text-amber-800">Data Governance &amp; Confidentiality</span>
                    <span class="w-8 h-[1.5px] bg-amber-600"></span>
                </div>

                <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-950 leading-[1.12] mb-4">
                    Privacy <span class="italic font-normal font-serif text-gold-gradient">Policy</span>
                </h1>

                <p class="text-base sm:text-lg text-slate-700 font-medium max-w-2xl mx-auto leading-relaxed">
                    How JustBusinessClass.us collects, secures, and handles confidential client itinerary data and payment information.
                </p>
                <div class="mt-4 text-xs text-slate-500 font-semibold">Last updated: January 2026</div>
            </div>
        </x-ui.container>
    </section>

    <!-- Policy Content Section -->
    <section class="py-16 sm:py-24 bg-white border-b border-slate-200">
        <x-ui.container size="narrow">
            <div class="prose prose-slate max-w-none text-slate-700 leading-relaxed space-y-8 font-normal">
                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">1. Confidentiality Commitment</h2>
                    <p>
                        At JustBusinessClass.us, we regard the discretion and privacy of our corporate executives, high-net-worth travelers, and distinguished clients as paramount. We do not sell, rent, monetize, or trade any personal, biometric, or itinerary information with third-party marketing brokers.
                    </p>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">2. Information We Collect</h2>
                    <p>To research, negotiate wholesale seat allocations, and issue official airline e-tickets, we collect only the necessary travel details:</p>
                    <ul class="list-disc pl-6 space-y-1 mt-2">
                        <li>Legal name as shown on valid government passport</li>
                        <li>Contact numbers, business emails, and billing address</li>
                        <li>Travel itinerary: origin, destination, preferred flight dates, and cabin class</li>
                        <li>Airline frequent flyer numbers and seating/dietary preferences</li>
                        <li>Payment details (processed securely via PCI-DSS compliant payment gateways)</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">3. How Information is Used</h2>
                    <p>Your information is used exclusively for:</p>
                    <ul class="list-disc pl-6 space-y-1 mt-2">
                        <li>Checking consolidator seat blocks and delivering written rate proposals</li>
                        <li>Ticketing confirmed reservations on official airline stock (GDS / ARC / IATA)</li>
                        <li>Flight status monitoring, schedule change notification, and 24/7 concierge support</li>
                        <li>Compliance with mandatory TSA Secure Flight and international border security requirements</li>
                    </ul>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">4. Data Security Standards</h2>
                    <p>
                        All communications and transactions through JustBusinessClass.us are encrypted using industry-standard Transport Layer Security (TLS 1.3 / 256-bit AES encryption). Payment transactions adhere strictly to PCI-DSS Level 1 specifications. We never store raw credit card CVV codes on our servers.
                    </p>
                </div>

                <div>
                    <h2 class="font-serif text-2xl font-bold text-slate-950 mb-3">5. Data Retention &amp; Rights</h2>
                    <p>
                        Clients may at any time request access to their stored customer profile or request complete deletion of their account records by contacting our Data Privacy Officer at <a href="mailto:privacy@justbusinessclass.us" class="text-amber-800 font-bold underline">privacy@justbusinessclass.us</a> or calling <a href="tel:18005550147" class="text-amber-800 font-bold">(800) 555-0147</a>.
                    </p>
                </div>

                <div class="pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <div class="font-serif font-bold text-slate-950">JustBusinessClass.us Concierge Desk</div>
                        <div class="text-xs text-slate-500">100 Park Avenue, Suite 1600, New York, NY 10017</div>
                    </div>
                    <a href="{{ route('contact') }}" wire:navigate class="px-6 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-colors shadow-sm">
                        Contact Advisory Desk
                    </a>
                </div>
            </div>
        </x-ui.container>
    </section>
</div>
