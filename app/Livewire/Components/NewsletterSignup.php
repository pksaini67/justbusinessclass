<?php

namespace App\Livewire\Components;

use Livewire\Component;

class NewsletterSignup extends Component
{
    public string $name = '';

    public string $email = '';

    public bool $subscribed = false;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:80',
            'email' => 'required|email|max:120',
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Please provide your name.',
            'email.required' => 'Please provide an email address.',
            'email.email' => 'Please enter a valid email format.',
        ];
    }

    public function subscribe(): void
    {
        $this->validate();

        // TODO: In Step 2/subsequent steps, persist subscriber into NewsletterSubscriber model,
        // send welcome issue with private fare advisory, and integrate with marketing ESP.

        $this->subscribed = true;
    }

    public function render()
    {
        return view('livewire.components.newsletter-signup');
    }
}
