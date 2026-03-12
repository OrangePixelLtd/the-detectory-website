# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is **The Detectory** — a WordPress theme (text domain: `app-landing`) that serves as a landing page for a private club management app for UK metal detecting clubs. It targets WordPress 6.0+ and PHP 7.4+.

This is a static landing page theme, not a blog theme. There is no build system, no npm, no bundler — all CSS and JS are authored directly.

## Architecture

### Template Flow

`front-page.php` is the main entry point and assembles the page from eight section partials in order:

`hero → problem → audience → benefits → how-it-works → features → why → cta`

Each section lives in `template-parts/section-{name}.php`. `index.php` is only a fallback for non-front-page views.

### CSS Structure

Three CSS files loaded in dependency order via `wp_enqueue_style`:

1. **`style.css`** — CSS custom properties (`:root`), reset, typography, layout primitives (`.container`, `.grid`, `.btn`), header, footer, utility classes
2. **`assets/css/animations.css`** — Section-specific component styles (hero, problem, audience, benefits, how-it-works, features, why, CTA), scroll animation states (`[data-animate]`), phone mockup/3D tilt, keyframes
3. **`assets/css/responsive.css`** — Breakpoints at 1024px (tablet), 768px (mobile), 480px (small mobile), plus `prefers-reduced-motion` overrides

All colors and spacing use CSS custom properties defined in `style.css :root`. The primary color palette (red tones) is overridable via the WordPress Customizer.

### JavaScript

Single file: `assets/js/scroll-animations.js` (loaded with `defer`). Uses IntersectionObserver for:
- Scroll-triggered reveal animations (`[data-animate]` → `.is-visible`)
- Parallax scroll progress (`[data-parallax]` → `--scroll-progress` CSS var)
- Header background toggle on scroll (`.is-scrolled`)
- Mobile nav hamburger toggle (`.is-open` / `.is-active`)
- Phone 3D tilt on scroll (`[data-phone-tilt]`)
- Back-to-top button visibility

### PHP Includes

- **`inc/customizer.php`** — WordPress Customizer panel "The Detectory" with sections for App Store/Google Play URLs and primary color overrides (with `postMessage` transport)
- **`inc/template-tags.php`** — `app_landing_get_svg_icon($name)` returns inline SVG markup for Feather-style icons; `app_landing_get_default($setting)` for Customizer defaults

### Naming Conventions

- PHP functions prefixed with `app_landing_`
- CSS classes use BEM-like naming: `.section-hero`, `.hero-phone-wrapper`, `.store-btn--dark`
- Animation data attributes: `data-animate="slide-up"`, `data-animate-delay="0.2s"`
- State classes: `.is-visible`, `.is-scrolled`, `.is-open`, `.is-active`

### Customizer Integration

Primary colors set in the Customizer are injected as inline CSS overriding `:root` custom properties via `app_landing_customizer_css()` in `functions.php`. Store URLs (`app_landing_app_store_url`, `app_landing_google_play_url`) are used in template parts for download links.

## Development

No build step. Edit PHP/CSS/JS files directly. To test, place the theme folder in a WordPress installation's `wp-content/themes/` directory and activate it. The theme requires a static front page to be set in WordPress Settings → Reading.

Google Fonts (Inter + Space Grotesk) are loaded from the Google Fonts CDN.
