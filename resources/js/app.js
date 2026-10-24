import './bootstrap';
import AOS from 'aos';

// Initialize AOS (Animate On Scroll)
function initAOS() {
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
        delay: 50,
    });
}

// Reveal Observer for [data-reveal] elements
function initReveal() {
    const revealElements = document.querySelectorAll('[data-reveal]:not(.is-revealed)');
    if (!revealElements.length) return;

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    obs.unobserve(entry.target);
                }
            });
        }, {
            root: null,
            threshold: 0.05,
            rootMargin: '0px 0px -40px 0px'
        });

        revealElements.forEach(el => observer.observe(el));
    } else {
        // Fallback if IntersectionObserver is not supported
        revealElements.forEach(el => el.classList.add('is-revealed'));
    }
}

function initPageAnimations() {
    initAOS();
    initReveal();
}

document.addEventListener('DOMContentLoaded', () => {
    initPageAnimations();
});

// Refresh animations on Livewire component updates / navigation
document.addEventListener('livewire:navigated', () => {
    AOS.refreshHard();
    initReveal();
});

if (window.Livewire) {
    window.Livewire.hook('commit', ({ succeed }) => {
        succeed(() => {
            AOS.refresh();
            initReveal();
        });
    });
}
