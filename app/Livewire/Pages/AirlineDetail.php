<?php

namespace App\Livewire\Pages;

use App\Models\Airline;
use Livewire\Component;

class AirlineDetail extends Component
{
    public Airline $airline;

    public function mount(string $slug): void
    {
        $this->airline = Airline::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();
    }

    public function render()
    {
        // Related / Other featured airlines
        $relatedAirlines = Airline::where('is_active', true)
            ->where('id', '!=', $this->airline->id)
            ->orderBy('is_featured', 'desc')
            ->orderBy('sort_order', 'asc')
            ->limit(4)
            ->get();

        return view('livewire.pages.airline-detail', [
            'airline' => $this->airline,
            'relatedAirlines' => $relatedAirlines,
        ])
        ->layout('components.layouts.app', [
            'title' => "{$this->airline->name} ({$this->airline->code}) Business Class Flights · JustBusinessClass.us",
            'description' => $this->airline->summary ?? "Save up to 60% on {$this->airline->name} Business & First Class unlisted flights with private wholesale consolidation.",
        ]);
    }
}
