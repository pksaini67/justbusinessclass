<?php

namespace App\Livewire\Components;

use Livewire\Component;

class QuoteForm extends Component
{
    public string $tripType = 'round_trip'; // round_trip, one_way, multi_city

    public string $cabin = 'Business'; // Premium Economy, Business, First

    // Round-trip & One-way fields
    public string $origin = '';

    public string $destination = '';

    public string $departureDate = '';

    public string $returnDate = '';

    // Multi-city legs
    public array $legs = [];

    // Passenger counts
    public int $adults = 1;

    public int $children = 0;

    public int $infants = 0;

    // Contact info
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $notes = '';

    public bool $submitted = false;

    public function mount(): void
    {
        $this->departureDate = now()->addDays(14)->format('Y-m-d');
        $this->returnDate = now()->addDays(24)->format('Y-m-d');

        $this->legs = [
            ['origin' => '', 'destination' => '', 'date' => now()->addDays(14)->format('Y-m-d')],
            ['origin' => '', 'destination' => '', 'date' => now()->addDays(21)->format('Y-m-d')],
        ];
    }

    public function setTripType(string $type): void
    {
        $this->tripType = $type;
        $this->resetValidation();
    }

    public function setCabin(string $cabin): void
    {
        $this->cabin = $cabin;
    }

    public function addLeg(): void
    {
        if (count($this->legs) < 5) {
            $this->legs[] = [
                'origin' => '',
                'destination' => '',
                'date' => now()->addDays(14 + (count($this->legs) * 7))->format('Y-m-d'),
            ];
        }
    }

    public function removeLeg(int $index): void
    {
        if (count($this->legs) > 2) {
            unset($this->legs[$index]);
            $this->legs = array_values($this->legs);
        }
    }

    public function incrementPassenger(string $type): void
    {
        if ($type === 'adults' && $this->adults < 9) {
            $this->adults++;
        }
        if ($type === 'children' && $this->children < 8) {
            $this->children++;
        }
        if ($type === 'infants' && $this->infants < 4) {
            $this->infants++;
        }
    }

    public function decrementPassenger(string $type): void
    {
        if ($type === 'adults' && $this->adults > 1) {
            $this->adults--;
        }
        if ($type === 'children' && $this->children > 0) {
            $this->children--;
        }
        if ($type === 'infants' && $this->infants > 0) {
            $this->infants--;
        }
    }

    public function getPassengerSummaryProperty(): string
    {
        $total = $this->adults + $this->children + $this->infants;

        return $total.' Passenger'.($total > 1 ? 's' : '');
    }

    protected function rules(): array
    {
        $rules = [
            'tripType' => 'required|in:round_trip,one_way,multi_city',
            'cabin' => 'required|in:Premium Economy,Business,First',
            'adults' => 'required|integer|min:1|max:9',
            'children' => 'nullable|integer|min:0|max:8',
            'infants' => 'nullable|integer|min:0|max:4',
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|min:7|max:30',
            'notes' => 'nullable|string|max:1000',
        ];

        if ($this->tripType === 'multi_city') {
            $rules['legs'] = 'required|array|min:2';
            $rules['legs.*.origin'] = 'required|string|min:2|max:80';
            $rules['legs.*.destination'] = 'required|string|min:2|max:80';
            $rules['legs.*.date'] = 'required|date';
        } else {
            $rules['origin'] = 'required|string|min:2|max:80';
            $rules['destination'] = 'required|string|min:2|max:80';
            $rules['departureDate'] = 'required|date';

            if ($this->tripType === 'round_trip') {
                $rules['returnDate'] = 'required|date|after_or_equal:departureDate';
            }
        }

        return $rules;
    }

    protected function messages(): array
    {
        return [
            'origin.required' => 'Please enter departure airport or city.',
            'destination.required' => 'Please enter arrival airport or city.',
            'departureDate.required' => 'Please choose departure date.',
            'returnDate.required' => 'Return date is required for round trips.',
            'returnDate.after_or_equal' => 'Return date must be on or after departure date.',
            'legs.*.origin.required' => 'Please provide departure for all legs.',
            'legs.*.destination.required' => 'Please provide destination for all legs.',
            'legs.*.date.required' => 'Please select date for all legs.',
            'name.required' => 'Please enter your full name.',
            'email.required' => 'A valid email is required to deliver your quote.',
            'email.email' => 'Please provide a valid email address.',
            'phone.required' => 'Phone number is required for advisor verification.',
        ];
    }

    public function submit(): void
    {
        $this->validate();

        // TODO: In Step 2/subsequent steps, persist this request as a Lead Eloquent model,
        // fire email notification to travel concierges, dispatch CRM webhook, and create Filament Resource view.

        $this->submitted = true;
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'phone', 'notes', 'origin', 'destination', 'submitted']);
        $this->departureDate = now()->addDays(14)->format('Y-m-d');
        $this->returnDate = now()->addDays(24)->format('Y-m-d');
    }

    public function render()
    {
        return view('livewire.components.quote-form');
    }
}
