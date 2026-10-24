<?php

namespace Tests\Feature;

use App\Livewire\Components\NewsletterSignup;
use App\Livewire\Components\QuoteForm;
use App\Livewire\Pages\Home;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireHomepageComponentsTest extends TestCase
{
    public function test_homepage_livewire_component_renders_successfully(): void
    {
        Livewire::test(Home::class)
            ->assertStatus(200)
            ->assertSee('JustBusinessClass')
            ->assertSee('Fly Business Class')
            ->assertSee('Signature Business Class Routes');
    }

    public function test_signature_deals_toggle_works(): void
    {
        Livewire::test(Home::class)
            ->assertSet('showAllDeals', false)
            ->call('toggleDeals')
            ->assertSet('showAllDeals', true)
            ->call('toggleDeals')
            ->assertSet('showAllDeals', false);
    }

    public function test_faq_accordion_toggle_works(): void
    {
        Livewire::test(Home::class)
            ->assertSet('openFaq', 0)
            ->call('toggleFaq', 1)
            ->assertSet('openFaq', 1)
            ->call('toggleFaq', 1)
            ->assertSet('openFaq', null);
    }

    public function test_quote_form_validates_required_fields(): void
    {
        Livewire::test(QuoteForm::class)
            ->set('origin', '')
            ->set('destination', '')
            ->set('name', '')
            ->set('email', '')
            ->set('phone', '')
            ->call('submit')
            ->assertHasErrors(['origin', 'destination', 'name', 'email', 'phone'])
            ->assertSet('submitted', false);
    }

    public function test_quote_form_submits_successfully_with_valid_data(): void
    {
        Livewire::test(QuoteForm::class)
            ->set('tripType', 'round_trip')
            ->set('cabin', 'Business')
            ->set('origin', 'New York (JFK)')
            ->set('destination', 'London (LHR)')
            ->set('departureDate', now()->addDays(10)->format('Y-m-d'))
            ->set('returnDate', now()->addDays(20)->format('Y-m-d'))
            ->set('adults', 2)
            ->set('name', 'Julian Sterling')
            ->set('email', 'julian.sterling@example.com')
            ->set('phone', '+1 (212) 555-0199')
            ->call('submit')
            ->assertHasNoErrors()
            ->assertSet('submitted', true)
            ->assertSee('Your Best Price Proposal Is Being Curated');
    }

    public function test_quote_form_multi_city_add_and_remove_legs(): void
    {
        Livewire::test(QuoteForm::class)
            ->set('tripType', 'multi_city')
            ->assertCount('legs', 2)
            ->call('addLeg')
            ->assertCount('legs', 3)
            ->call('removeLeg', 2)
            ->assertCount('legs', 2);
    }

    public function test_newsletter_signup_validates_and_submits(): void
    {
        Livewire::test(NewsletterSignup::class)
            ->set('name', '')
            ->set('email', 'invalid-email')
            ->call('subscribe')
            ->assertHasErrors(['name', 'email'])
            ->assertSet('subscribed', false)
            ->set('name', 'Elena Rostova')
            ->set('email', 'elena@example.com')
            ->call('subscribe')
            ->assertHasNoErrors()
            ->assertSet('subscribed', true)
            ->assertSee('Welcome to the JustBusinessClass.us Private Advisory');
    }
}
