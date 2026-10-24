<?php

namespace App\Livewire\Pages;

use App\Models\Airline;
use App\Models\Faq;
use App\Models\Review;
use App\Support\HomeContent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('JustBusinessClass.us · Concierge Business Class Flights USA')]
class Home extends Component
{
    public bool $showAllDeals = false;

    public ?int $openFaq = 0; // First FAQ open by default

    public function toggleDeals(): void
    {
        $this->showAllDeals = ! $this->showAllDeals;
    }

    public function toggleFaq(int $index): void
    {
        $this->openFaq = ($this->openFaq === $index) ? null : $index;
    }

    public function render()
    {
        $content = HomeContent::get();

        // Airlines for homepage partner marquee (fetched dynamically from database)
        $marqueeAirlines = Airline::query()
            ->where('is_active', true)
            ->where('show_in_marquee', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->get()
            ->filter(fn ($a) => ! empty($a->logo_url));

        $signatureSavings = $this->showAllDeals
            ? $content['signature_savings']
            : array_slice($content['signature_savings'], 0, 8);

        // Dynamic Reviews from database (fallback to HomeContent array if table is empty)
        $dbReviews = Review::query()
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $testimonials = $dbReviews->isNotEmpty()
            ? $dbReviews->map(function ($r) {
                return [
                    'id' => $r->id,
                    'author' => $r->author,
                    'role' => $r->role,
                    'city' => $r->city,
                    'route' => $r->route,
                    'quote' => $r->quote,
                    'rating' => $r->rating,
                ];
            })->all()
            : $content['testimonials'];

        // Dynamic FAQs from database (fallback to HomeContent array if table is empty)
        $dbFaqs = Faq::query()
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        $faqs = $dbFaqs->isNotEmpty()
            ? $dbFaqs->map(function ($f) {
                return [
                    'id' => $f->id,
                    'question' => $f->question,
                    'answer' => $f->answer,
                    'category' => $f->category,
                ];
            })->all()
            : $content['faqs'];

        return view('livewire.pages.home', [
            'content' => $content,
            'signatureSavings' => $signatureSavings,
            'testimonials' => $testimonials,
            'faqs' => $faqs,
            'marqueeAirlines' => $marqueeAirlines,
        ])->layout('components.layouts.app');
    }
}
