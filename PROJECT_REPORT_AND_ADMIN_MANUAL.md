# JustBusinessClass.us — Project Report & Admin User Manual

---

## 1. Project Overview & Architecture

**JustBusinessClass.us** is a luxury business & first-class flight boutique platform. It provides clients with private consolidator inventory, wholesale corporate seat blocks, and personalized 1:1 flight concierge booking workflows.

### 1.1 Technical Stack
| Layer | Technology |
|---|---|
| **Backend Framework** | Laravel 11 / 12 (PHP 8.2+) |
| **Front-End & Reactivity** | Laravel Livewire 3 + Alpine.js |
| **Admin Control Panel** | Filament PHP v3 |
| **Styling & Design System** | Tailwind CSS (Custom Dark Gold / Champagne / Silver Palette) |
| **Database** | MySQL / MariaDB (Database: `bct_travel` on Port `3307`) |
| **Assets Bundler** | Vite + PostCSS |
| **Source Control** | GitHub (`git@github.com:pksaini67/justbusinessclass.git`) |

---

## 2. Admin Credentials & Access

- **Admin URL:** `http://127.0.0.1:8000/admin` (or `https://justbusinessclass.us/admin`)
- **Username / Email:** `admin@justbusinessclass.us`
- **Password:** `Admin@Zomo#123`
- **Role:** Super Administrator

---

## 3. Core Admin Features & Modules

The administration dashboard is powered by **Filament PHP** with custom tailored schemas, image upload directories, and rich text editors.

### 3.1 Airline Partners Management (`/admin/airlines`)
- **Carrier Profile:** Airline Name, IATA Code (e.g. `EK`, `AF`, `BA`, `QR`), URL slug.
- **Alliance & Cabin:** SkyTeam, Star Alliance, oneworld, or Independent; cabin class specs and rating.
- **Direct Logo Upload:**
  - PNG/SVG upload directly to `storage/app/public/airlines`.
  - Automatically cropped/resized.
- **Homepage Marquee Visibility:**
  - Toggle `show_in_marquee` to show or hide the carrier logo in the second section of the homepage (the partner logo carousel).
  - Sort order to prioritize high-margin airlines.
- **Editorial Guide:** Rich editor for airline reviews, cabin seat specs, baggage allowance, and lie-flat seat details.

### 3.2 Country Deals & Flight Offers (`/admin/deals`)
- **Destination & Pricing:** Country/city name, starting fare (e.g., `$1,895`), standard airline retail fare comparison (e.g., `$4,800`), and wholesale discount badge (e.g., `Save 58%`).
- **Route Specifics:** Round-trip and one-way availability, flight duration, stopover details.
- **Publishing:** Toggle active status and featured flags for placement on `/deals`.

### 3.3 Blog Articles & Travel Intelligence (`/admin/posts`)
- **Content Creation:** Full WYSIWYG editor for business class cabin reviews, flight strategies, and airline news.
- **Categorization:** Assign posts to categories (Cabin Reviews, Booking Strategies, Airline Guides).
- **SEO Per Post:** Dedicated meta title, meta description, and social share image fields per article.

### 3.4 Client Testimonials & Reviews (`/admin/reviews`)
- **Author Information:** Client name, executive role (e.g., *Managing Director, NYC*), route flown (e.g., *JFK &rarr; LHR Business Suite*).
- **Rating:** Star rating (1–5) and review quote.
- **Control:** Reorder reviews or toggle active status to update the homepage testimonial carousel in real time.

### 3.5 FAQ Management (`/admin/faqs`)
- **Accordion Control:** Add, reorder, or edit questions regarding wholesale ticket ticketing, changes, cancellations, and consolidator guarantees.
- **Categorization:** Booking, Tickets, Pricing, or Safety.

### 3.6 SEO & Analytics Suite (`/admin/seo-settings`)
- **Granular Pages:** Custom meta titles, descriptions, and canonical URLs for `home`, `about`, `deals`, `airlines`, `blog`, and `contact`.
- **Branding Assets:** Upload website favicons and OpenGraph images.
- **Script Injection:** Safe fields for Google Tag Manager (GTM), Google Analytics 4 (GA4), and Meta Pixel scripts.

---

## 4. Front-End Features Summary

1. **Cinematic Hero Section:**
   - Dark gold atmospheric background showcasing an ultra-luxury private business class suite.
   - Polished white, champagne gold, and platinum silver typography.
   - Dual CTAs: *"Get the Best Price"* and *"Call for Unpublished Rates"* `(800) 555-0147`.
2. **Interactive Flight Proposal Widget:**
   - Multi-leg, Round-Trip, and One-Way booking options.
   - Dynamic passenger counter (Adults, Children, Infants).
   - Glassmorphic dark gold card design.
3. **Database-Driven Partner Logo Ribbon:**
   - Seamless marquee slider showing official airline logos stored in the database.
   - Dynamic fallback with hover micro-animations and route links.
4. **Curated Footer:**
   - Payment acceptance badges (`Visa`, `Mastercard`, `American Express`, `Discover`) with clean SVGs.
   - Regulatory and consolidator net-fare legal disclaimer.
   - Direct navigation links.
5. **Full SEO Architecture:**
   - `robots.txt` configured with crawler rules and XML sitemap directives.
   - Custom `favicon.svg` and `favicon.ico` flight icon.
   - Enriched JSON-LD Schema.org `@graph` for `TravelAgency` and `WebSite` search action.

---

## 5. Maintenance & Useful Commands

All operations can be managed via PowerShell inside `c:\xampp\htdocs\justbusinessclass.us`:

| Goal | Command |
|---|---|
| **Start Local Server** | `php artisan serve --port=8000` |
| **Compile CSS/JS Assets** | `npm run build` |
| **Clear Blade Cache** | `php artisan view:clear` |
| **Clear Application Cache** | `php artisan optimize:clear` |
| **Seed Admin User** | `php artisan db:seed` |
| **Push Changes to GitHub** | `git add . ; git commit -m "update" ; git push` |

---
*Created on October 24, 2026 for JustBusinessClass.us*
