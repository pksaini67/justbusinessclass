<?php

namespace App\Livewire\Pages;

use App\Support\HomeContent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact Us · Dedicated Flight Advisor Concierge | JustBusinessClass.us')]
class Contact extends Component
{
    public string $name = '';
    public string $countryCode = '+1';
    public string $phone = '';
    public string $email = '';
    public string $message = '';

    public bool $submitted = false;

    public ?int $openFaq = 0;

    protected function rules(): array
    {
        return [
            'name' => 'required|min:2|max:100',
            'countryCode' => 'required|string|max:6',
            'phone' => 'required|min:6|max:25',
            'email' => 'nullable|email|max:120',
            'message' => 'required|min:10|max:2000',
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter your full name.',
        'countryCode.required' => 'Country code is required.',
        'phone.required' => 'Please provide a direct contact number.',
        'email.email' => 'Please provide a valid email address.',
        'message.required' => 'Please share your travel itinerary or questions.',
        'message.min' => 'Please include at least 10 characters so we can best assist you.',
    ];

    public function toggleFaq(int $index): void
    {
        $this->openFaq = ($this->openFaq === $index) ? null : $index;
    }

    public function submit(): void
    {
        $this->validate();

        // In a real application or database, this logs/saves the message
        // Here we simulate successful dispatch to the private concierge desk
        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'phone', 'email', 'message']);
        $this->countryCode = '+1';
        $this->submitted = false;
    }

    public function render()
    {
        $content = HomeContent::get();

        $faqs = [
            [
                'question' => 'How quickly will a flight advisor respond to my request?',
                'answer' => 'Our private concierge desk operates 24/7/365. During typical business and peak travel hours, priority response times average under 15 to 30 minutes via direct phone call or WhatsApp.',
            ],
            [
                'question' => 'Can I request urgent same-day or next-day transatlantic departures?',
                'answer' => 'Yes. Our advisors specialize in last-minute corporate flight bookings, emergency schedule re-routings, and multi-sector itineraries where standard commercial booking engines show sold-out cabins.',
            ],
            [
                'question' => 'How do your unlisted wholesale business class fares work?',
                'answer' => 'We partner directly with leading international airlines and consolidator alliances to access unpublished net fares, unsold corporate blocks, and partner allocations that are never made public on commercial search aggregators.',
            ],
            [
                'question' => 'Can I use WhatsApp to receive flight options and itineraries?',
                'answer' => 'Absolutely. Many of our executive clientele prefer fast WhatsApp messaging for seamless lie-flat seat comparisons, aircraft seat maps, and proposal reviews while on the move.',
            ],
            [
                'question' => 'What information is needed to secure our business class flight?',
                'answer' => 'Only your preferred travel dates, destination cities, passenger names matching your passports, and seating preferences. Once we identify the best flight deal, we issue full airline e-tickets immediately.',
            ],
        ];

        $countryCodes = [
            ['code' => '+1', 'label' => 'United States / Canada (+1)'],
            ['code' => '+44', 'label' => 'United Kingdom (+44)'],
            ['code' => '+971', 'label' => 'United Arab Emirates (+971)'],
            ['code' => '+61', 'label' => 'Australia (+61)'],
            ['code' => '+49', 'label' => 'Germany (+49)'],
            ['code' => '+33', 'label' => 'France (+33)'],
            ['code' => '+41', 'label' => 'Switzerland (+41)'],
            ['code' => '+65', 'label' => 'Singapore (+65)'],
            ['code' => '+81', 'label' => 'Japan (+81)'],
            ['code' => '+91', 'label' => 'India (+91)'],
            ['code' => '+852', 'label' => 'Hong Kong (+852)'],
            ['code' => '+39', 'label' => 'Italy (+39)'],
            ['code' => '+34', 'label' => 'Spain (+34)'],
            ['code' => '+31', 'label' => 'Netherlands (+31)'],
            ['code' => '+353', 'label' => 'Ireland (+353)'],
        ];

        return view('livewire.pages.contact', [
            'content' => $content,
            'faqs' => $faqs,
            'countryCodes' => $countryCodes,
        ])->layout('components.layouts.app');
    }
}
