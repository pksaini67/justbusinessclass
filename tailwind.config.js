import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Livewire/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                // Light Luxury Palette: White, Silver/Platinum, Champagne Gold, Muted Slate
                pure: '#FFFFFF',
                canvas: {
                    DEFAULT: '#FFFFFF',
                    subtle: '#F8F9FA',
                    warm: '#FBFBFB',
                    surface: '#F3F4F6',
                },
                silver: {
                    50: '#F9FAFB',
                    100: '#F3F4F6',
                    200: '#E5E7EB',
                    300: '#D1D5DB',
                    400: '#9CA3AF',
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#111827',
                    mist: 'rgba(255, 255, 255, 0.75)',
                    border: 'rgba(229, 231, 235, 0.8)',
                    card: 'rgba(255, 255, 255, 0.82)',
                },
                gold: {
                    50: '#FDFBF7',
                    100: '#FBF6EC',
                    200: '#F4E8D0',
                    300: '#E8D2A4',
                    400: '#D4B877',
                    DEFAULT: '#C6A667',
                    500: '#B8934F',
                    600: '#9B7838',
                    700: '#7A5B27',
                    800: '#5F4620',
                    900: '#463217',
                },
                navy: {
                    DEFAULT: '#0F172A',
                    dark: '#0A0F1D',
                    muted: '#334155',
                },
            },
            fontFamily: {
                serif: ['"Cormorant Garamond"', 'Playfair Display', 'Georgia', 'serif'],
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['"Cormorant Garamond"', 'serif'],
            },
            letterSpacing: {
                widest: '.2em',
                lux: '.25em',
            },
            boxShadow: {
                'lux-card': '0 20px 45px -12px rgba(15, 23, 42, 0.08), 0 0 0 1px rgba(229, 231, 235, 0.85)',
                'lux-card-hover': '0 30px 60px -15px rgba(198, 166, 103, 0.18), 0 0 0 1px rgba(198, 166, 103, 0.45)',
                'lux-glass': '0 25px 50px -12px rgba(15, 23, 42, 0.09), inset 0 1px 1px 0 rgba(255, 255, 255, 0.95)',
                'lux-gold': '0 12px 28px -6px rgba(198, 166, 103, 0.35)',
                'lux-glow': '0 0 40px rgba(198, 166, 103, 0.22)',
            },
            backgroundImage: {
                'gold-gradient': 'linear-gradient(135deg, #D4B877 0%, #C6A667 50%, #A68037 100%)',
                'gold-gradient-hover': 'linear-gradient(135deg, #E8D2A4 0%, #D4B877 50%, #B8934F 100%)',
                'silver-shimmer': 'linear-gradient(135deg, #FFFFFF 0%, #F9FAFB 50%, #F3F4F6 100%)',
                'radial-light': 'radial-gradient(circle at 50% 0%, rgba(198, 166, 103, 0.08) 0%, transparent 65%)',
            },
        },
    },
    plugins: [forms, typography],
};
