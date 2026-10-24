<?php

namespace Database\Seeders;

use App\Models\Airline;
use Illuminate\Database\Seeder;

class AirlineSeeder extends Seeder
{
    public function run(): void
    {
        $airlines = [
            [
                'name' => 'Air France',
                'code' => 'AF',
                'slug' => 'air-france',
                'alliance' => 'SkyTeam',
                'cabin_class' => 'Business & La Première',
                'rating' => '4.9',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
                'summary' => 'French elegance at 35,000 feet featuring full-flat suites, direct aisle access, signature gastronomy by Michelin-starred French chefs, and access to the exquisite Salon Paris-CDG lounge.',
                'content' => '<h2>The Essence of French Haute Couture in Aviation</h2>
<p>Air France redefines transatlantic flight with timeless French savoir-vivre. The newly redesigned long-haul Business Class cabin offers passengers an intimate cocoon configured in a contemporary 1-2-1 layout, ensuring every traveler enjoys direct aisle access and uninterrupted privacy.</p>

<h3>Lie-Flat Bed & Suite Comfort</h3>
<p>Each suite converts into a full 2-meter (6.5 ft) lie-flat bed with plush soft bedding, a memory-foam pillow, and high-density privacy doors on select Boeing 777-300ER and Airbus A350-900 aircraft. With dedicated wireless charging pads, noise-canceling headsets, and 4K ultra-high-definition touchscreens, long-haul journeys feel effortless.</p>

<h3>Michelin-Starred French Gastronomy</h3>
<p>Dining aboard Air France Business Class is curated in collaboration with world-renowned chefs including Régis Marcon, Anne-Sophie Pic, and Mauro Colagreco. Every meal is paired with prestigious vintages selected by the Master Sommelier of France, accompanied by fine champagne served in signature crystal stemware.</p>

<h3>SkyTeam Elite Privileges & Lounge Access</h3>
<p>Departing travelers enjoy SkyPriority expedited check-in, priority security clearance, and complimentary access to Air France lounges worldwide—highlighted by the flagship Paris-Charles de Gaulle Terminal 2E lounge featuring Clarins wellness spa treatments and private relaxation cabanas.</p>',
            ],
            [
                'name' => 'Emirates',
                'code' => 'EK',
                'slug' => 'emirates',
                'alliance' => 'Independent',
                'cabin_class' => 'A380 Onboard Lounge & Suites',
                'rating' => '5.0',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
                'summary' => 'Iconic Airbus A380 upper deck luxury with lie-flat seating, the legendary horseshoe Onboard Lounge & Bar, Bvlgari luxury amenity kits, and 6,500 channels on ice entertainment.',
                'content' => '<h2>Unmatched Opulence Above the Clouds</h2>
<p>Emirates Business Class sets the global benchmark for international aviation luxury. Cruising on the double-decker Airbus A380, passengers experience unprecedented comfort, social lounge spaces, and award-winning Arabesque hospitality.</p>

<h3>The Celebrated A380 Onboard Lounge</h3>
<p>Step away from your seat and socialize at 40,000 feet in the exclusive upper-deck lounge. Enjoy premium canapés, craft cocktails, and vintage champagne served by a dedicated flight bartender.</p>

<h3>Personal Mini-Bar & Lie-Flat Comfort</h3>
<p>Every seat is equipped with an integrated personal minibar, mood lighting, motorized privacy screens, and HDMI connectivity. Stretch out into a spacious flat bed with mattress padding and quilted blankets for undisturbed sleep between continents.</p>',
            ],
            [
                'name' => 'Qatar Airways',
                'code' => 'QR',
                'slug' => 'qatar-airways',
                'alliance' => 'oneworld',
                'cabin_class' => 'Qsuite First in Business',
                'rating' => '5.0',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
                'summary' => 'Multi-award-winning Qsuite featuring private sliding doors, double beds in business class, dine-on-demand a la carte service, and world-class hospitality via Hamad International Doha.',
                'content' => '<h2>Qsuite: First in Business</h2>
<p>Regularly crowned the World’s Best Business Class by Skytrax, Qatar Airways revolutionized premium travel with the Qsuite. Featuring the industry’s first double bed in Business Class and customizable quad-configuration suites for families or colleagues, privacy is paramount.</p>

<h3>Dine on Demand Anytime</h3>
<p>Unlike traditional flight schedules, Qatar Airways offers fully bespoke dining on demand. Order five-course gourmet Arabic and international feasts, artisan espresso, and Ladurée patisseries whenever you choose.</p>',
            ],
            [
                'name' => 'British Airways',
                'code' => 'BA',
                'slug' => 'british-airways',
                'alliance' => 'oneworld',
                'cabin_class' => 'Club Suite',
                'rating' => '4.8',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
                'summary' => 'The British Airways Club Suite features personal privacy doors, direct aisle access for all passengers, luxury bedding by The White Company London, and the Galleries Club Lounges.',
                'content' => '<h2>The New Generation Club Suite</h2>
<p>British Airways has transformed transatlantic travel with the rollout of the Club Suite. Designed with discrete closing suite doors, 1-2-1 direct aisle access, and generous vanity stowage, it offers British refinement at its best.</p>

<h3>The White Company Amenities</h3>
<p>Indulge in day-bed mattress toppers, woven luxury day blankets, and satin-piped pillows from London’s The White Company, paired with luxury skincare elixirs.</p>',
            ],
            [
                'name' => 'Lufthansa',
                'code' => 'LH',
                'slug' => 'lufthansa',
                'alliance' => 'Star Alliance',
                'cabin_class' => 'Allegris Business Class',
                'rating' => '4.8',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 5,
                'summary' => 'Precision German engineering and the revolutionary Allegris cabin suites featuring individually heated/cooled seats, shoulder sink-in zones, and Star Alliance hub connectivity.',
                'content' => '<h2>Lufthansa Allegris: A New Chapter in Comfort</h2>
<p>Lufthansa’s newest long-haul cabin concept, Allegris, introduces five distinct business class seating options—including private suites with shoulder-high walls and closing doors, extra-long beds, and double suites.</p>',
            ],
            [
                'name' => 'Singapore Airlines',
                'code' => 'SQ',
                'slug' => 'singapore-airlines',
                'alliance' => 'Star Alliance',
                'cabin_class' => 'Business Class & Suites',
                'rating' => '5.0',
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 6,
                'summary' => 'Legendary Asian hospitality, ultra-wide handcrafted Scottish leather seats, "Book the Cook" fine dining pre-ordering, and seamless hub luxury at Changi Airport.',
                'content' => '<h2>A Great Way to Fly</h2>
<p>Singapore Airlines Business Class is celebrated worldwide for its unparalleled personal service and ultra-wide lie-flat seats upholstered in Poltrona Frau leather. Pre-order exquisite culinary dishes crafted by the International Culinary Panel up to 24 hours prior to flight departure.</p>',
            ],
            [
                'name' => 'Turkish Airlines',
                'code' => 'TK',
                'slug' => 'turkish-airlines',
                'alliance' => 'Star Alliance',
                'cabin_class' => 'Flying Chef Business',
                'rating' => '4.9',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 7,
                'summary' => 'Dedicated on-board Flying Chefs preparing candlelit Mediterranean dinners, full lie-flat beds, and entry to the award-winning Istanbul Grand Lounge.',
                'content' => '<h2>Dining with the Flying Chefs</h2>
<p>Turkish Airlines flies to more international countries than any other airline in the world. Experience authentic Turkish mezze served at candlelit tables by professional on-board chefs and relax in the sprawling Istanbul Lounge complete with private day rooms and golf simulators.</p>',
            ],
            [
                'name' => 'Etihad Airways',
                'code' => 'EY',
                'slug' => 'etihad-airways',
                'alliance' => 'Independent',
                'cabin_class' => 'Business Studio',
                'rating' => '4.9',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 8,
                'summary' => 'Dovetail-designed Business Studios with privacy sliding doors, Armani/Casa dining ware, Acqua di Parma amenity kits, and Abu Dhabi Terminal A hospitality.',
                'content' => '<h2>Abu Dhabi Sophistication</h2>
<p>Etihad Airways delivers contemporary Arabian luxury aboard its Boeing 787 and Airbus A350 aircraft with forward and aft facing Business Studios, bespoke ambient lighting, and bespoke Armani/Casa tableware.</p>',
            ],
            [
                'name' => 'Delta One',
                'code' => 'DL',
                'slug' => 'delta-one',
                'alliance' => 'SkyTeam',
                'cabin_class' => 'Delta One Suites',
                'rating' => '4.8',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 9,
                'summary' => 'Full-height sliding suite doors, Missoni luxury bedding, chef-curated regional American menus, and exclusive Delta One Lounges at JFK and LAX.',
                'content' => '<h2>America’s Premier Transatlantic Suite</h2>
<p>Delta One represents the pinnacle of premium US commercial aviation, offering private closing suites, Westin Heavenly or Missoni bedding, craft cocktails, and complimentary Delta Sky Club & Delta One Lounge privileges.</p>',
            ],
            [
                'name' => 'United Polaris',
                'code' => 'UA',
                'slug' => 'united-polaris',
                'alliance' => 'Star Alliance',
                'cabin_class' => 'United Polaris Business',
                'rating' => '4.7',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 10,
                'summary' => 'Custom Saks Fifth Avenue luxury bedding, direct aisle access pods, Therabody wellness amenities, and private sit-down Polaris Lounge dining.',
                'content' => '<h2>Sleep Focused Intercontinental Travel</h2>
<p>Crafted around the ultimate night’s sleep, United Polaris features Saks Fifth Avenue cooling gel pillows, ergonomic mattress pads, and exclusive access to the United Polaris Lounge featuring private dining rooms and shower suites.</p>',
            ],
            [
                'name' => 'ANA All Nippon Airways',
                'code' => 'NH',
                'slug' => 'all-nippon-airways',
                'alliance' => 'Star Alliance',
                'cabin_class' => 'The Room Business Class',
                'rating' => '5.0',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 11,
                'summary' => '“The Room” on Boeing 777-300ER featuring one of the widest business class seats in the sky with sliding doors and multi-course Japanese kaiseki gastronomy.',
                'content' => '<h2>Japanese Perfection in "The Room"</h2>
<p>ANA’s "The Room" offers an unprecedented seat width rivaling traditional first class, combined with discreet Japanese omotenashi hospitality and seasonal kaiseki dining.</p>',
            ],
            [
                'name' => 'Cathay Pacific',
                'code' => 'CX',
                'slug' => 'cathay-pacific',
                'alliance' => 'oneworld',
                'cabin_class' => 'Aria Suite Business',
                'rating' => '4.9',
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 12,
                'summary' => 'The brand-new Aria Suite featuring warm wood finishes, wireless charging, and world-renowned Hong Kong hub lounges including The Pier and The Wing.',
                'content' => '<h2>Refined Asian Aviation Heritage</h2>
<p>Cathay Pacific’s Aria Suite introduces intuitive suite doors, wireless device charging, personalized audio via Bluetooth, and classic Hong Kong hospitality paired with craft Betsy beer.</p>',
            ],
        ];

        foreach ($airlines as $data) {
            Airline::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
