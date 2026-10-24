<?php

namespace App\Livewire\Pages;

use App\Models\Deal;
use Livewire\Component;

class DealDetail extends Component
{
    public Deal $deal;

    public function mount(string $slug): void
    {
        $this->deal = Deal::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
    }

    public function render()
    {
        $otherDeals = Deal::where('is_active', true)
            ->where('id', '!=', $this->deal->id)
            ->orderBy('is_featured', 'desc')
            ->orderBy('sort_order', 'asc')
            ->limit(3)
            ->get();

        return view('livewire.pages.deal-detail', [
            'deal' => $this->deal,
            'otherDeals' => $otherDeals,
        ])
        ->layout('components.layouts.app', [
            'title' => ($this->deal->title ?: "Business Class to {$this->deal->country} Deals: 30-60% Off") . ' · JustBusinessClass.us',
            'description' => $this->deal->summary ?? "Save 30% to 60% on Business & First Class flight reservations to {$this->deal->country} with unpublished consolidator contracts.",
        ]);
    }
}
