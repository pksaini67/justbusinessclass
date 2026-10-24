# JustBusinessClass.us · Premium Business Class Travel Concierge (USA)

A luxury flight concierge web application built on **Laravel 12**, **Livewire 3/4**, **Filament Admin Panel**, and **Tailwind CSS**.

---

## 1. Design & Branding Architecture
- **Brand**: **JustBusinessClass.us** (`concierge@justbusinessclass.us`)
- **Aesthetic**: Premium Light Luxury Atelier
- **Color Palette**:
  - **White & Canvas Pure**: `#FFFFFF`, `#F9FAFB`
  - **Silver & Platinum**: `#E5E7EB`, `#D1D5DB`, `rgba(229, 231, 235, 0.8)`
  - **Champagne Gold**: `#C6A667`, gradient `#D4B877` to `#A68037`
  - **Deep Slate / Navy**: `#0F172A`
- **Typography**:
  - Headings/Display: **Cormorant Garamond** (Self-hosted via `@fontsource/cormorant-garamond`)
  - UI & Body: **Inter** (Self-hosted via `@fontsource/inter`)
- **Key Features**:
  - Custom SVG Brand Logo with gold monogram crest (`/public/images/logo.svg`)
  - Glassmorphism cards with multi-layered diffuse shadows (`box-shadow: 0 20px 45px -12px rgba(15, 23, 42, 0.08)`)
  - On-scroll fluid reveal transitions (`data-reveal` with `IntersectionObserver`)
  - **Get the Best Price** primary CTA workflow (unlisted wholesale allocations rather than fixed rack rates)
  - Full-page Livewire reactive quote form with dynamic Multi-City leg adder/remover and passenger dropdown
  - Filament Admin Panel configured at `/admin`

---

## 2. Super Admin Credentials (Development)

> [!IMPORTANT]
> Change default credentials before deploying to a production server.

- **Admin URL**: `http://localhost:8000/admin`
- **Email**: `admin@example.com`
- **Password**: `password`

---

## 3. Technology Stack & Packages Installed

| Package | Version | Purpose |
|---|---|---|
| `laravel/framework` | `12.70.0` | Latest stable Laravel LTS framework |
| `livewire/livewire` | `v4.4.7` | Full-page reactive frontend without Blade-only reloads |
| `filament/filament` | `v5.10.2` | Admin dashboard panel at `/admin` |
| `blade-ui-kit/blade-heroicons` | `v2.7.0` | Lucide / Heroicons Blade component icon suite |
| `tailwindcss` | `^3.4.17` | Utility-first CSS framework with forms and typography plugins |
| `@fontsource/cormorant-garamond` | `^5.2.8` | Self-hosted luxury serif font |
| `@fontsource/inter` | `^5.2.8` | Self-hosted clean sans-serif UI font |

---

## 4. How to Run Locally

### 1. Database Configuration
Ensure MySQL / MariaDB is active on port `3307` (or edit `DB_PORT=3306` in `.env` if your MySQL is on default port).
```bash
php artisan migrate
php artisan db:seed
```

### 2. Build Frontend Assets
```bash
npm run build
# Or start Vite dev server:
npm run dev
```

### 3. Launch Development Server
```bash
php artisan serve
```
Open **`http://localhost:8000`** in your browser.

---

## 5. Verification Commands
```bash
# Run complete test suite (Feature & Unit)
php artisan test

# Verify code style and formatting
./vendor/bin/pint --test
```
