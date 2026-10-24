<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class TermsOfBooking extends Component
{
    public function render()
    {
        return view('livewire.pages.terms-of-booking');
    }
}
