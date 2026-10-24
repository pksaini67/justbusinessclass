<?php

// Generates light-aesthetic SVG placeholders using white, silver, and champagne gold
$dirs = [
    __DIR__.'/destinations',
    __DIR__.'/airlines',
    __DIR__.'/hero',
];

foreach ($dirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

function generateLightSvg($text, $subtext, $color1 = '#FFFFFF', $color2 = '#F3F4F6', $accent = '#C6A667')
{
    return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="800" viewBox="0 0 1200 800">
  <defs>
    <radialGradient id="lightBg" cx="50%" cy="30%" r="85%">
      <stop offset="0%" stop-color="$color1" />
      <stop offset="60%" stop-color="#F9FAFB" />
      <stop offset="100%" stop-color="$color2" />
    </radialGradient>
    <linearGradient id="goldG" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#E8D2A4" />
      <stop offset="50%" stop-color="$accent" />
      <stop offset="100%" stop-color="#9B7838" />
    </linearGradient>
    <pattern id="lightGrid" width="48" height="48" patternUnits="userSpaceOnUse">
      <circle cx="24" cy="24" r="1" fill="#C6A667" fill-opacity="0.12" />
      <line x1="0" y1="24" x2="48" y2="24" stroke="#E5E7EB" stroke-width="0.5" stroke-opacity="0.5" />
      <line x1="24" y1="0" x2="24" y2="48" stroke="#E5E7EB" stroke-width="0.5" stroke-opacity="0.5" />
    </pattern>
  </defs>

  <!-- Clean Canvas Background -->
  <rect width="1200" height="800" fill="url(#lightBg)" />
  <rect width="1200" height="800" fill="url(#lightGrid)" />

  <!-- Subtle Silver & Golden Architectural Hairlines -->
  <circle cx="600" cy="400" r="320" stroke="url(#goldG)" stroke-opacity="0.35" stroke-width="1.2" fill="none" />
  <circle cx="600" cy="400" r="260" stroke="#D1D5DB" stroke-opacity="0.5" stroke-width="1" fill="none" />
  <line x1="160" y1="400" x2="1040" y2="400" stroke="url(#goldG)" stroke-opacity="0.3" stroke-width="1" />
  <line x1="600" y1="100" x2="600" y2="700" stroke="url(#goldG)" stroke-opacity="0.3" stroke-width="1" />

  <!-- Center White & Gold Seal -->
  <circle cx="600" cy="400" r="76" fill="#FFFFFF" stroke="url(#goldG)" stroke-width="2" />
  <circle cx="600" cy="400" r="68" fill="#FAF6EC" stroke="#E5E7EB" stroke-width="1" />
  <path d="M575 400 L600 375 L625 400 L600 425 Z" fill="none" stroke="url(#goldG)" stroke-width="2" />
  <circle cx="600" cy="400" r="9" fill="url(#goldG)" />

  <!-- Typography -->
  <text x="600" y="525" text-anchor="middle" fill="#0F172A" font-family="'Cormorant Garamond', Georgia, serif" font-size="46" font-weight="700" letter-spacing="1">$text</text>
  <text x="600" y="565" text-anchor="middle" fill="#9B7838" font-family="'Inter', sans-serif" font-size="15" font-weight="600" letter-spacing="4" text-transform="uppercase">$subtext</text>
  <text x="600" y="735" text-anchor="middle" fill="#9CA3AF" font-family="'Inter', sans-serif" font-size="12" letter-spacing="3" font-weight="600">JUSTBUSINESSCLASS.US · PRIVATE AVIATION DESK</text>
</svg>
SVG;
}

$destinations = [
    'london' => ['London Heathrow', 'United Kingdom · Club Suite Lie-Flat'],
    'paris' => ['Paris Charles de Gaulle', 'France · Haute Flight Luxury'],
    'rome' => ['Rome Fiumicino', 'Italy · Mediterranean Flagship'],
    'tokyo' => ['Tokyo Haneda', 'Japan · Private Suite Sanctuary'],
    'singapore' => ['Singapore Changi', 'Asia · Five Star Excellence'],
    'sydney' => ['Sydney Kingsford Smith', 'Australia · Long Haul Lie-Flat'],
    'dubai' => ['Dubai International', 'United Arab Emirates · First Class Apex'],
    'capetown' => ['Cape Town International', 'South Africa · African Luxury'],
    'zurich' => ['Zurich Airport', 'Switzerland · Alpine Precision'],
    'buenosaires' => ['Buenos Aires Ezeiza', 'Argentina · South American Hub'],
    'hongkong' => ['Hong Kong Chek Lap Kok', 'Asia · Transpacific Flagship'],
    'seoul' => ['Seoul Incheon', 'South Korea · Premier Prestige'],
    'europe' => ['Europe Premier Hubs', 'Wholesale Business Class Allocations'],
    'asia' => ['Asia & Pacific Sanctuaries', 'Lie-Flat Sleeper Suites'],
    'middleeast' => ['Middle East Luxury Gateways', 'Consolidator Contract Rates'],
    'oceania' => ['Australia & New Zealand', 'Transpacific Flatbed Rest'],
    'africa' => ['African Wildlife & Capitals', 'Exclusive Net Fare Blocks'],
    'latinamerica' => ['Latin American Capitals', 'Direct Premium Routing'],
    'indiansubcontinent' => ['Indian Subcontinent & Maldives', 'Luxury Island & Business Routes'],
];

foreach ($destinations as $key => [$name, $sub]) {
    file_put_contents(__DIR__."/destinations/{$key}.svg", generateLightSvg($name, $sub, '#FFFFFF', '#E5E7EB', '#C6A667'));
}

// Light Hero placeholder
file_put_contents(__DIR__.'/hero/hero.svg', generateLightSvg('Commercial Business Class Privileges', 'Consolidator Inventory & Corporate Allocations', '#FFFFFF', '#E2E8F0', '#B8934F'));

// Light Lounge & Advisor placeholder
file_put_contents(__DIR__.'/hero/lounge.svg', generateLightSvg('Flagship First Class Lounge', 'Private Dining · Chauffeur Connections · Quiet Suites', '#FFFFFF', '#EDEBE4', '#C6A667'));
file_put_contents(__DIR__.'/hero/advisor.svg', generateLightSvg('Dedicated Flight Concierge Desk', '1:1 Private Route Architecture · Direct Line', '#FFFFFF', '#F1EEDB', '#B8934F'));

echo "Light theme placeholders generated successfully!\n";
