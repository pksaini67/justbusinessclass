<?php

namespace App\Livewire\Pages;

use App\Models\Airline;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Partner Airlines · Unlisted Business & First Class Flights | JustBusinessClass.us')]
class AirlinesIndex extends Component
{
    use WithPagination;

    public string $search = '';
    public string $alliance = 'all';

    protected $queryString = [
        'search' => ['except' => ''],
        'alliance' => ['except' => 'all'],
        'page' => ['except' => 1],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingAlliance(): void
    {
        $this->resetPage();
    }

    public function setAlliance(string $alliance): void
    {
        $this->alliance = $alliance;
        $this->resetPage();
    }

    public function render()
    {
        $query = Airline::query()->where('is_active', true);

        if ($this->search !== '') {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('code', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->alliance !== 'all') {
            $query->where('alliance', $this->alliance);
        }

        $airlines = $query->orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->paginate(12);

        $alliances = Airline::query()
            ->where('is_active', true)
            ->whereNotNull('alliance')
            ->distinct()
            ->pluck('alliance')
            ->filter()
            ->values();

        return view('livewire.pages.airlines-index', [
            'airlines' => $airlines,
            'alliances' => $alliances,
        ])->layout('components.layouts.app');
    }
}
