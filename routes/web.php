<?php

use App\Livewire\Pages\About;
use App\Livewire\Pages\AirlineDetail;
use App\Livewire\Pages\AirlinesIndex;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact-us', Contact::class)->name('contact');

// Airlines Directory & Details
Route::get('/airlines', AirlinesIndex::class)->name('airlines.index');
Route::get('/airlines/{slug}', AirlineDetail::class)->name('airlines.show');

// Support reference URL format: /best-deals/airline/{slug}
Route::get('/best-deals/airline/{slug}', AirlineDetail::class)->name('airlines.show.alias');

// Blog Articles & Guides
Route::get('/blog', \App\Livewire\Pages\BlogIndex::class)->name('blog.index');
Route::get('/blog/{slug}', \App\Livewire\Pages\BlogDetail::class)->name('blog.show');

// Deals Directory & Single Country Deals
Route::get('/deals', \App\Livewire\Pages\DealsIndex::class)->name('deals.index');
Route::get('/best-deals', \App\Livewire\Pages\DealsIndex::class)->name('deals.index.alias');
Route::get('/deals/{slug}', \App\Livewire\Pages\DealDetail::class)->name('deals.show');
Route::get('/best-deals/country/{slug}', \App\Livewire\Pages\DealDetail::class)->name('deals.show.alias');

// Legal & Policies
Route::get('/privacy-policy', \App\Livewire\Pages\PrivacyPolicy::class)->name('privacy');
Route::get('/terms-of-booking', \App\Livewire\Pages\TermsOfBooking::class)->name('terms');


