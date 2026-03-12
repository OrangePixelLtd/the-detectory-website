/**
 * Scroll Animations - Intersection Observer
 *
 * @package App_Landing
 */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    // 1. Scroll-triggered reveal animations
    const animatedElements = document.querySelectorAll('[data-animate]');

    animatedElements.forEach((el) => {
        const delay = el.getAttribute('data-animate-delay');
        if (delay) {
            el.style.setProperty('--animate-delay', delay);
        }
    });

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px',
            }
        );

        animatedElements.forEach((el) => revealObserver.observe(el));
    } else {
        // Fallback: show everything immediately
        animatedElements.forEach((el) => el.classList.add('is-visible'));
    }

    // 2. Parallax scroll progress
    const parallaxElements = document.querySelectorAll('[data-parallax]');

    if (parallaxElements.length && 'IntersectionObserver' in window) {
        const thresholds = Array.from({ length: 50 }, (_, i) => i / 49);

        const parallaxObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.style.setProperty(
                            '--scroll-progress',
                            entry.intersectionRatio.toFixed(3)
                        );
                    }
                });
            },
            { threshold: thresholds }
        );

        parallaxElements.forEach((el) => parallaxObserver.observe(el));
    }

    // 3. Header background toggle on scroll
    const header = document.querySelector('.site-header');
    const hero = document.querySelector('.section-hero');

    if (header && hero && 'IntersectionObserver' in window) {
        const headerObserver = new IntersectionObserver(
            ([entry]) => {
                header.classList.toggle('is-scrolled', !entry.isIntersecting);
            },
            { threshold: 0.1 }
        );

        headerObserver.observe(hero);
    }

    // 4. Mobile navigation toggle
    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('.primary-navigation');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const isOpen = nav.classList.toggle('is-open');
            toggle.classList.toggle('is-active', isOpen);
            toggle.setAttribute('aria-expanded', String(isOpen));
        });

        // Close nav on link click
        nav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                nav.classList.remove('is-open');
                toggle.classList.remove('is-active');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // 5. Phone 3D tilt on scroll
    const phoneTilt = document.querySelector('[data-phone-tilt]');
    const phoneWrapper = document.querySelector('.hero-phone-wrapper');

    if (phoneTilt && phoneWrapper && 'IntersectionObserver' in window) {
        const tiltThresholds = Array.from({ length: 60 }, (_, i) => i / 59);

        const tiltObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Map intersection ratio to tilt values
                        // As you scroll down (ratio decreases), tilt increases
                        const r = entry.intersectionRatio;
                        const rotateY = -8 + (1 - r) * -20;  // -8deg to -28deg
                        const rotateX = 2 + (1 - r) * 8;     // 2deg to 10deg
                        const translateY = (1 - r) * -30;     // 0 to -30px

                        phoneTilt.style.transform =
                            `translateX(0) rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateY(${translateY}px)`;
                        phoneTilt.style.animation = 'none'; // pause float during scroll tilt
                    }
                });
            },
            { threshold: tiltThresholds }
        );

        // Only start tilt tracking after the reveal animation
        let tiltActive = false;
        const startTiltObserver = new MutationObserver(() => {
            if (phoneWrapper.classList.contains('is-visible') && !tiltActive) {
                tiltActive = true;
                // Wait for reveal animation to finish before enabling scroll-tilt
                setTimeout(() => {
                    tiltObserver.observe(phoneWrapper);
                }, 1500);
                startTiltObserver.disconnect();
            }
        });

        startTiltObserver.observe(phoneWrapper, {
            attributes: true,
            attributeFilter: ['class'],
        });
    }

    // 6. Back-to-top button
    const backToTop = document.querySelector('.back-to-top');

    if (backToTop) {
        const scrollThreshold = 600;

        window.addEventListener(
            'scroll',
            () => {
                backToTop.classList.toggle(
                    'is-visible',
                    window.scrollY > scrollThreshold
                );
            },
            { passive: true }
        );

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
});
