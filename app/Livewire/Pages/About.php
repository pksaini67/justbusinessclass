<?php

namespace App\Livewire\Pages;

use App\Support\HomeContent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About Us · Private Aviation Standard Flight Concierge | JustBusinessClass.us')]
class About extends Component
{
    public ?int $openFaq = 0; // First FAQ open by default

    public function toggleFaq(int $index): void
    {
        $this->openFaq = ($this->openFaq === $index) ? null : $index;
    }

    public function render()
    {
        $content = HomeContent::get();

        $aboutFaqs = [
            [
                'question' => 'How long has JustBusinessClass.us been in business?',
                'answer' => 'We have been operating for over a decade, helping discerning private executives, business travelers, and families book international business and first class flights with exceptional savings and personalized service.',
            ],
            [
                'question' => 'How are your business class fares lower than published airline prices?',
                'answer' => 'We hold private wholesale consolidator contracts and bulk corporate allotments directly with over 60 global commercial airlines. Because airlines prefer not to publicly discount retail tickets, these net allocations are distributed exclusively through accredited flight atelier desks like ours.',
            ],
            [
                'question' => 'Do you charge booking fees or consulting retainers?',
                'answer' => 'No. We provide free flight research and custom quote proposals without any upfront retainers or hidden agency markups. The price you are quoted is the complete, all-inclusive fare including all mandatory government taxes and carrier surcharges.',
            ],
            [
                'question' => 'What happens if my flight is delayed, canceled, or schedule-changed?',
                'answer' => 'Unlike automated booking engines that force you onto public airline telephone queues, your designated flight advisor monitors your flights 24/7. In the event of a delay or cancellation, our priority operations desk handles rebooking, routing changes, and lounge re-accreditation immediately.',
            ],
            [
                'question' => 'Are your ticket issuances legitimate and eligible for airline frequent flyer miles?',
                'answer' => 'Yes. All tickets are officially ticketed on airline e-ticket stocks (with valid 13-digit airline ticket numbers and 6-character PNR booking codes). They can be verified directly on the operating carrier’s official website or mobile app, and are eligible for alliance frequent flyer accrual.',
            ],
            [
                'question' => 'What licensing, accreditation, and seller of travel registrations do you maintain?',
                'answer' => 'We maintain direct ARC/IATA registration, full Seller of Travel compliance across the United States, and strict PCI-DSS payment encryption standards to guarantee complete client data confidentiality.',
            ],
        ];

        return view('livewire.pages.about', [
            'content' => $content,
            'aboutFaqs' => $aboutFaqs,
        ])->layout('components.layouts.app');
    }
}
