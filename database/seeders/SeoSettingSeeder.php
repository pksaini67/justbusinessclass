<?php

namespace Database\Seeders;

use App\Models\SeoSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'page_identifier' => 'global',
                'page_name' => 'Global Site Defaults & Branding',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'JustBusinessClass.us · Wholesale Business Class Flight Concierge USA',
                'meta_description' => 'Save 30% to 60% on international business and first class flights with unlisted wholesale consolidator contracts, lie-flat suites, and dedicated flight concierge.',
                'meta_keywords' => 'business class flights, wholesale business class, discount first class, flight concierge, cheap business class to europe, business class to asia, consolidator fares',
                'canonical_url' => url('/'),
                'robots' => 'index, follow',
                'favicon' => null,
                'logo' => null,
                'og_type' => 'website',
                'og_title' => 'JustBusinessClass.us · Concierge Business Class Flights USA',
                'og_description' => 'Save 30% to 60% on genuine international business class tickets. Confirmed e-tickets on flagship airlines.',
                'og_image' => null,
                'twitter_card' => 'summary_large_image',
                'twitter_title' => 'JustBusinessClass.us · Wholesale Business Class Flights',
                'twitter_description' => 'Consolidator contracts and unlisted net fares on flagship global airlines.',
                'schema_json' => '{"@context":"https://schema.org","@type":"TravelAgency","name":"JustBusinessClass.us","telephone":"+1-800-555-0147","priceRange":"$$$$","url":"https://justbusinessclass.us"}',
                'header_scripts' => '<!-- Google Analytics or Tag Manager script slots can be added here -->',
                'footer_scripts' => null,
                'is_active' => true,
            ],
            [
                'page_identifier' => 'home',
                'page_name' => 'Homepage',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'JustBusinessClass.us · Private Concierge Business & First Class Flights USA',
                'meta_description' => 'Direct wholesale allocations across 60+ flagship airlines. Save 30% to 60% on lie-flat transatlantic and transpacific suites with personalized route concierge.',
                'meta_keywords' => 'business class flights usa, business class flight deals, cheap business class tickets, private business class fares',
                'canonical_url' => url('/'),
                'robots' => 'index, follow',
                'og_title' => 'Unpublished Business Class Flights · JustBusinessClass.us',
                'og_description' => 'Private wholesale seat allocations on flagship international carriers. Get a custom proposal in 30 minutes.',
                'is_active' => true,
            ],
            [
                'page_identifier' => 'about',
                'page_name' => 'About Us Page',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'About Us · A Decade of Aviation Mastery | JustBusinessClass.us',
                'meta_description' => 'Discover how our boutique flight concierge has spent 10+ years helping 15,000+ discerning travelers access unpublished business class consolidator fares.',
                'meta_keywords' => 'about justbusinessclass, flight concierge team, wholesale airline broker, boutique travel desk',
                'canonical_url' => url('/about'),
                'robots' => 'index, follow',
                'og_title' => 'Helping People Travel Smart · About JustBusinessClass.us',
                'og_description' => 'A decade of negotiating unpublished Business and First Class fares with personal phone concierge.',
                'is_active' => true,
            ],
            [
                'page_identifier' => 'deals',
                'page_name' => 'Best Deals Page',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'Best Business Class Flight Deals · 30-60% Off | JustBusinessClass.us',
                'meta_description' => 'Browse our latest unpublished business class country deals to Australia, the United Kingdom, France, Japan, Italy, and beyond at consolidator savings.',
                'meta_keywords' => 'business class deals, business class to australia deals, business class to europe deals, consolidator airfare deals',
                'canonical_url' => url('/deals'),
                'robots' => 'index, follow',
                'og_title' => 'Business Class Country Deals · Up to 60% Off',
                'og_description' => 'Direct wholesale allocations across Oceania, Europe, and Asia. Lock in unpublished business class rates.',
                'is_active' => true,
            ],
            [
                'page_identifier' => 'airlines',
                'page_name' => 'Partner Airlines Page',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'Partner Airlines · Unlisted Business & First Class Cabins | JustBusinessClass.us',
                'meta_description' => 'Explore our network of 60+ flagship partner airlines including Emirates, Qatar Airways, Air France, Singapore Airlines, British Airways, and Lufthansa.',
                'meta_keywords' => 'partner airlines, air france business class, emirates business class, qatar qsuite, lie-flat business class carriers',
                'canonical_url' => url('/airlines'),
                'robots' => 'index, follow',
                'og_title' => 'Flagship Partner Airlines · JustBusinessClass.us',
                'og_description' => 'Fly lie-flat business suites on the world\'s highest-rated carriers with consolidator contract pricing.',
                'is_active' => true,
            ],
            [
                'page_identifier' => 'blog',
                'page_name' => 'Travel Blog & Guides',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'Travel Intelligence & Business Class Reviews | JustBusinessClass.us',
                'meta_description' => 'In-depth business class cabin reviews, route analyses, seat comparisons, and insider booking strategies curated by our aviation desk.',
                'meta_keywords' => 'business class reviews, airline cabin guides, qsuite review, booking secrets, aviation insights',
                'canonical_url' => url('/blog'),
                'robots' => 'index, follow',
                'og_title' => 'Aviation Intelligence & Cabin Reviews · JustBusinessClass.us',
                'og_description' => 'Expert reviews and booking strategies for premium international flight travelers.',
                'is_active' => true,
            ],
            [
                'page_identifier' => 'contact',
                'page_name' => 'Contact Concierge Page',
                'site_name' => 'JustBusinessClass.us',
                'meta_title' => 'Contact Flight Concierge Desk · Direct Phone & Support | JustBusinessClass.us',
                'meta_description' => 'Connect directly with a senior flight advisor. Call (800) 555-0147 or submit your custom itinerary for a response within 30 minutes.',
                'meta_keywords' => 'contact flight concierge, business class phone number, travel agent phone number, request flight quote',
                'canonical_url' => url('/contact-us'),
                'robots' => 'index, follow',
                'og_title' => 'Direct Concierge Desk · JustBusinessClass.us',
                'og_description' => 'Dedicated flight specialists ready to engineer your next international journey. No phone trees.',
                'is_active' => true,
            ],
        ];

        foreach ($settings as $setting) {
            SeoSetting::updateOrCreate(
                ['page_identifier' => $setting['page_identifier']],
                $setting
            );
        }
    }
}
