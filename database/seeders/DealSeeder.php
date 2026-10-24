<?php

namespace Database\Seeders;

use App\Models\Deal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DealSeeder extends Seeder
{
    public function run(): void
    {
        $deals = [
            [
                'country' => 'Australia',
                'country_code' => 'AU',
                'region' => 'Oceania',
                'title' => 'Business Class to Australia Deals',
                'slug' => 'australia',
                'cabin_class' => 'Business & First Class',
                'starting_price' => 2895.00,
                'savings_tag' => '30-60% OFF',
                'featured_image' => null,
                'summary' => 'Direct consolidator business class allocations to Sydney, Melbourne, Brisbane, and Perth. Fly across the Pacific in lie-flat suites with Qantas, United Polaris, Delta One, or Air New Zealand at unpublished wholesale rates.',
                'top_cities' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaide'],
                'pricing_routes' => [
                    [
                        'origin' => 'Los Angeles (LAX)',
                        'destination' => 'Sydney (SYD)',
                        'airline' => 'Qantas / United Polaris',
                        'retail_price' => '$7,400',
                        'our_price' => '$2,895',
                    ],
                    [
                        'origin' => 'San Francisco (SFO)',
                        'destination' => 'Melbourne (MEL)',
                        'airline' => 'Virgin Australia / United',
                        'retail_price' => '$7,950',
                        'our_price' => '$3,140',
                    ],
                    [
                        'origin' => 'New York (JFK)',
                        'destination' => 'Sydney (SYD)',
                        'airline' => 'Qantas / Air New Zealand',
                        'retail_price' => '$8,800',
                        'our_price' => '$3,490',
                    ],
                    [
                        'origin' => 'Dallas (DFW)',
                        'destination' => 'Brisbane (BNE)',
                        'airline' => 'American Airlines Flagship',
                        'retail_price' => '$7,650',
                        'our_price' => '$3,050',
                    ],
                ],
                'content' => '<h2>Why Fly Business Class to Australia with JustBusinessClass.us?</h2>
<p>Flying across the Pacific Ocean is one of commercial aviation\'s greatest distance challenges, with non-stop flights from the US West Coast taking between 14 to 16 hours, and East Coast connections requiring up to 22 hours. In an economy or premium economy seat, severe fatigue and jet lag can compromise your trip\'s first four to five days.</p>
<p>Our private consolidator flight desk secures unpublished wholesale contract fares on flagship Transpacific carriers, providing you with 180-degree lie-flat sleeper suites, chef-curated multi-course gastronomy, sommelier-selected Australian and Californian wines, and guaranteed lounge access across both hemispheres.</p>

<h3>Unpublished Wholesale Consolidator Contracts</h3>
<p>Major carriers like <strong>Qantas, United Airlines, American Airlines, Delta, Air New Zealand, and Fiji Airways</strong> allocate unsold premium cabin seat tiers to accredited wholesale brokers. Rather than letting premium suites fly vacant, these blocks are issued at 30% to 60% discounts below public airline retail rack rates.</p>

<h3>Top Australian Gateways We Serve</h3>
<ul>
  <li><strong>Sydney Kingsford Smith (SYD):</strong> Non-stop routes from Los Angeles (LAX), San Francisco (SFO), Dallas (DFW), and Honolulu (HNL).</li>
  <li><strong>Melbourne Tullamarine (MEL):</strong> Daily non-stops from LAX and SFO featuring direct lie-flat suites with private sliding doors.</li>
  <li><strong>Brisbane (BNE):</strong> Direct service connecting Queensland\'s commercial capital and the Great Barrier Reef gateway.</li>
  <li><strong>Perth & Western Australia (PER):</strong> Convenient single-transfer itineraries through Singapore or Doha.</li>
</ul>

<h3>What Is Included With Your Business Class Reservation</h3>
<p>Every ticket booked through JustBusinessClass.us is a genuine, fully confirmed electronic ticket issued on official airline stock with complete passenger name records (PNR):</p>
<ul>
  <li>180-degree fully lie-flat bed with mattress pads, duvet, and luxury amenity kits.</li>
  <li>Full mileage accrual on Star Alliance, oneworld, or SkyTeam frequent flyer accounts.</li>
  <li>Direct aisle access on modern Boeing 787 Dreamliner, Airbus A350, and Boeing 777 aircraft.</li>
  <li>Priority check-in, priority security lanes, priority boarding, and expedited luggage handling.</li>
  <li>Flagship lounge entry including the Qantas First & International Lounges, United Polaris Lounges, and SkyTeam Lounges.</li>
</ul>',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'country' => 'United Kingdom',
                'country_code' => 'GB',
                'region' => 'Europe',
                'title' => 'Business Class to United Kingdom Deals',
                'slug' => 'united-kingdom',
                'cabin_class' => 'Business & First Class',
                'starting_price' => 1990.00,
                'savings_tag' => '40-60% OFF',
                'featured_image' => null,
                'summary' => 'Premier transatlantic business class fares to London Heathrow, Manchester, and Edinburgh. Experience British Airways Club Suite, Virgin Atlantic Upper Class, or Delta One suites at wholesale savings.',
                'top_cities' => ['London', 'Manchester', 'Edinburgh', 'Birmingham', 'Glasgow'],
                'pricing_routes' => [
                    [
                        'origin' => 'New York (JFK)',
                        'destination' => 'London Heathrow (LHR)',
                        'airline' => 'British Airways / Virgin Atlantic',
                        'retail_price' => '$5,200',
                        'our_price' => '$1,990',
                    ],
                    [
                        'origin' => 'Boston (BOS)',
                        'destination' => 'London Heathrow (LHR)',
                        'airline' => 'Delta One / Virgin Atlantic',
                        'retail_price' => '$4,800',
                        'our_price' => '$1,850',
                    ],
                    [
                        'origin' => 'Chicago (ORD)',
                        'destination' => 'London Heathrow (LHR)',
                        'airline' => 'American Flagship / British Airways',
                        'retail_price' => '$5,600',
                        'our_price' => '$2,190',
                    ],
                    [
                        'origin' => 'Los Angeles (LAX)',
                        'destination' => 'London Heathrow (LHR)',
                        'airline' => 'Virgin Atlantic Upper Class',
                        'retail_price' => '$6,400',
                        'our_price' => '$2,490',
                    ],
                ],
                'content' => '<h2>Experience Transatlantic Luxury to London & The UK</h2>
<p>The transatlantic corridor between the United States and the United Kingdom is the busiest premium business travel market in the world. Whether flying for corporate meetings in The City of London, banking conferences in Canary Wharf, or private holidays in the Scottish Highlands, traveling in business class ensures you arrive refreshed and prepared.</p>
<h3>Flagship Cabin Suites</h3>
<p>Experience the latest generation of closed-door privacy suites, including the <strong>British Airways Club Suite</strong>, <strong>Virgin Atlantic Upper Class Retreat</strong>, and <strong>Delta One Suite</strong>. Enjoy dedicated chauffeur service, Heathrow Clubhouse access, and priority fast-track immigration.</p>',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'country' => 'France',
                'country_code' => 'FR',
                'region' => 'Europe',
                'title' => 'Business Class to France Deals',
                'slug' => 'france',
                'cabin_class' => 'Business & First Class',
                'starting_price' => 2150.00,
                'savings_tag' => '35-55% OFF',
                'featured_image' => null,
                'summary' => 'Indulge in French haute cuisine and privacy door suites to Paris Charles de Gaulle and Nice Côte d\'Azur with Air France and SkyTeam partners at consolidator wholesale rates.',
                'top_cities' => ['Paris', 'Nice', 'Lyon', 'Marseille', 'Bordeaux'],
                'pricing_routes' => [
                    [
                        'origin' => 'New York (JFK)',
                        'destination' => 'Paris (CDG)',
                        'airline' => 'Air France Business Class',
                        'retail_price' => '$5,400',
                        'our_price' => '$2,150',
                    ],
                    [
                        'origin' => 'Miami (MIA)',
                        'destination' => 'Paris (CDG)',
                        'airline' => 'Air France / Delta One',
                        'retail_price' => '$5,800',
                        'our_price' => '$2,320',
                    ],
                    [
                        'origin' => 'Los Angeles (LAX)',
                        'destination' => 'Paris (CDG)',
                        'airline' => 'Air France Suite',
                        'retail_price' => '$6,700',
                        'our_price' => '$2,690',
                    ],
                ],
                'content' => '<h2>French Art de Vivre at 38,000 Feet</h2>
<p>Fly directly to Paris Charles de Gaulle and the French Riviera in refined elegance. Enjoy gourmet menus crafted by Michelin-starred French chefs, sommelier-curated Champagne and Bordeaux grands crus, and personal sliding door suites designed for undisturbed sleep.</p>',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'country' => 'Japan',
                'country_code' => 'JP',
                'region' => 'Asia',
                'title' => 'Business Class to Japan Deals',
                'slug' => 'japan',
                'cabin_class' => 'Business & First Class',
                'starting_price' => 3190.00,
                'savings_tag' => '30-55% OFF',
                'featured_image' => null,
                'summary' => 'Unrivaled Japanese hospitality, kaiseki dining, and private suites to Tokyo (Haneda/Narita) and Osaka with ANA "The Room", Japan Airlines (JAL), and United Polaris.',
                'top_cities' => ['Tokyo', 'Osaka', 'Kyoto', 'Sapporo', 'Fukuoka'],
                'pricing_routes' => [
                    [
                        'origin' => 'Los Angeles (LAX)',
                        'destination' => 'Tokyo Haneda (HND)',
                        'airline' => 'ANA "The Room" / JAL Sky Suite',
                        'retail_price' => '$7,900',
                        'our_price' => '$3,190',
                    ],
                    [
                        'origin' => 'San Francisco (SFO)',
                        'destination' => 'Tokyo Narita (NRT)',
                        'airline' => 'Japan Airlines / United',
                        'retail_price' => '$8,200',
                        'our_price' => '$3,280',
                    ],
                    [
                        'origin' => 'New York (JFK)',
                        'destination' => 'Tokyo Haneda (HND)',
                        'airline' => 'ANA / JAL Flagship',
                        'retail_price' => '$9,400',
                        'our_price' => '$3,750',
                    ],
                ],
                'content' => '<h2>Experience Japanese Omotenashi Hospitality Across the Pacific</h2>
<p>Traveling to Tokyo in business class is an unparalleled cultural and culinary journey. With ANA\'s legendary "The Room" business suite and JAL\'s award-winning Sky Suite, flyers enjoy double-width beds, privacy doors, authentic multi-course kaiseki menus, and access to flagship Sakura and ANA Suite lounges.</p>',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'country' => 'Italy',
                'country_code' => 'IT',
                'region' => 'Europe',
                'title' => 'Business Class to Italy Deals',
                'slug' => 'italy',
                'cabin_class' => 'Business & First Class',
                'starting_price' => 2290.00,
                'savings_tag' => '35-60% OFF',
                'featured_image' => null,
                'summary' => 'Exclusive business class flight offers to Rome (FCO), Milan (MXP), and Venice (VCE). Lie-flat seats, Italian gastronomy, and priority VIP services at consolidator discounts.',
                'top_cities' => ['Rome', 'Milan', 'Venice', 'Florence', 'Naples'],
                'pricing_routes' => [
                    [
                        'origin' => 'New York (JFK)',
                        'destination' => 'Milan Malpensa (MXP)',
                        'airline' => 'Emirates / ITA Airways / Delta',
                        'retail_price' => '$5,600',
                        'our_price' => '$2,290',
                    ],
                    [
                        'origin' => 'Boston (BOS)',
                        'destination' => 'Rome Fiumicino (FCO)',
                        'airline' => 'ITA Airways / Air France',
                        'retail_price' => '$5,800',
                        'our_price' => '$2,380',
                    ],
                    [
                        'origin' => 'Miami (MIA)',
                        'destination' => 'Rome Fiumicino (FCO)',
                        'airline' => 'ITA Airways / American',
                        'retail_price' => '$6,100',
                        'our_price' => '$2,450',
                    ],
                ],
                'content' => '<h2>La Dolce Vita in Transatlantic Business Class</h2>
<p>Fly effortlessly to Italy\'s fashion and cultural capitals. Lie-flat suites allow you to rest comfortably across the Atlantic and touch down ready to explore Milanese boutiques or the historic wonders of Rome without skipping a beat.</p>',
                'is_active' => true,
                'is_featured' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($deals as $deal) {
            Deal::updateOrCreate(
                ['slug' => $deal['slug']],
                $deal
            );
        }
    }
}
