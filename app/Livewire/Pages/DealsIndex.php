<?php

namespace App\Livewire\Pages;

use App\Models\Deal;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Best Flight Deals · 30-60% Off Business Class | JustBusinessClass.us')]
class DealsIndex extends Component
{
    use WithPagination;

    public string $search = '';
    public string $region = 'all';

    protected $queryString = [
        'search' => ['except' => ''],
        'region' => ['except' => 'all'],
        'page' => ['except' => 1],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingRegion(): void
    {
        $this->resetPage();
    }

    public function setRegion(string $region): void
    {
        $this->region = $region;
        $this->resetPage();
    }

    public function render()
    {
        $query = Deal::query()->where('is_active', true);

        if ($this->search !== '') {
            $query->where(function ($q) {
                $q->where('country', 'like', '%' . $this->search . '%')
                  ->orWhere('title', 'like', '%' . $this->search . '%')
                  ->orWhere('country_code', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->region !== 'all') {
            $query->where('region', $this->region);
        }

        $deals = $query->orderBy('is_featured', 'desc')
            ->orderBy('sort_order', 'asc')
            ->orderBy('country', 'asc')
            ->paginate(12);

        $regions = Deal::query()
            ->where('is_active', true)
            ->whereNotNull('region')
            ->distinct()
            ->pluck('region')
            ->filter()
            ->values();

        return view('livewire.pages.deals-index', [
            'deals' => $deals,
            'regions' => $regions,
        ])->layout('components.layouts.app');
    }
}
