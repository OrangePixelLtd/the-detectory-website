/**
 * Blog Filter — progressive enhancement for the category pill bar and pagination.
 *
 * Intercepts pill / pagination clicks, fetches the target URL, and swaps in
 * only the .blog-grid and .blog-pagination markup with a short crossfade.
 * Falls back to a normal navigation on any error or modifier-click.
 */
(function () {
    'use strict';

    const container = document.querySelector('.section-blog .container');
    if (!container) {
        return;
    }

    const FADE_MS = 180;

    /**
     * Should this click be left to the browser? (new-tab, middle-click, etc.)
     */
    function isModifiedClick(event) {
        return (
            event.defaultPrevented ||
            event.button !== 0 ||
            event.metaKey ||
            event.ctrlKey ||
            event.shiftKey ||
            event.altKey
        );
    }

    /**
     * Resolve the link target inside the container that was clicked, if any.
     */
    function getInterceptableLink(event) {
        const anchor = event.target.closest('a');
        if (!anchor || !container.contains(anchor)) {
            return null;
        }
        if (!anchor.matches('.filter-pill, .blog-pagination a.page-numbers')) {
            return null;
        }
        if (anchor.target === '_blank' || anchor.hasAttribute('download')) {
            return null;
        }
        if (anchor.origin !== window.location.origin) {
            return null;
        }
        return anchor;
    }

    /**
     * Fetch a URL and return a parsed Document so we can pluck pieces out of it.
     */
    async function fetchDocument(url) {
        const response = await fetch(url, {
            headers: { 'X-Requested-With': 'fetch' },
            credentials: 'same-origin',
        });
        if (!response.ok) {
            throw new Error('Request failed: ' + response.status);
        }
        const html = await response.text();
        return new DOMParser().parseFromString(html, 'text/html');
    }

    /**
     * Swap the live grid + pagination + active-pill state from a fetched document.
     */
    function applyDocument(doc) {
        const liveGrid = container.querySelector('.blog-grid, .blog-empty');
        const livePagination = container.querySelector('.blog-pagination');
        const liveFilters = container.querySelector('.blog-filters');

        const newGrid = doc.querySelector('.blog-grid, .blog-empty');
        const newPagination = doc.querySelector('.blog-pagination');
        const newFilters = doc.querySelector('.blog-filters');

        if (newGrid && liveGrid) {
            liveGrid.replaceWith(newGrid);
            // Show any data-animate cards immediately — they're already in view.
            newGrid.querySelectorAll('[data-animate]').forEach((el) => {
                el.classList.add('is-visible');
            });
        }

        if (newPagination && livePagination) {
            livePagination.replaceWith(newPagination);
        } else if (!newPagination && livePagination) {
            livePagination.remove();
        } else if (newPagination && !livePagination && newGrid) {
            newGrid.after(newPagination);
        }

        // Refresh active state on existing pills (don't replace the bar itself
        // so its position in the DOM stays stable across swaps).
        if (newFilters && liveFilters) {
            const newActiveHref = newFilters.querySelector('.filter-pill.is-active')?.getAttribute('href');
            liveFilters.querySelectorAll('.filter-pill').forEach((pill) => {
                pill.classList.toggle('is-active', pill.getAttribute('href') === newActiveHref);
            });
        }
    }

    /**
     * Crossfade out, swap content, fade back in.
     */
    async function navigate(url, pushState) {
        const fadeTarget = container.querySelector('.blog-grid, .blog-empty');
        if (fadeTarget) {
            fadeTarget.classList.add('is-fading');
            await new Promise((resolve) => setTimeout(resolve, FADE_MS));
        }

        try {
            const doc = await fetchDocument(url);
            applyDocument(doc);

            if (pushState) {
                history.pushState({ blogFilter: true }, '', url);
            }

            // Update document title to match the destination page.
            const newTitle = doc.querySelector('title')?.textContent;
            if (newTitle) {
                document.title = newTitle;
            }

            // Scroll the filter bar into view so the user sees the change.
            const filters = container.querySelector('.blog-filters');
            if (filters) {
                const top = filters.getBoundingClientRect().top + window.scrollY - 120;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        } catch (err) {
            window.location.href = url;
        }
    }

    container.addEventListener('click', (event) => {
        if (isModifiedClick(event)) {
            return;
        }
        const anchor = getInterceptableLink(event);
        if (!anchor) {
            return;
        }
        event.preventDefault();
        navigate(anchor.href, true);
    });

    window.addEventListener('popstate', (event) => {
        if (event.state && event.state.blogFilter) {
            navigate(window.location.href, false);
        }
    });

    // Mark initial entry in history so popstate behaves predictably on the
    // first back-press after the user has navigated within the archive.
    history.replaceState({ blogFilter: true }, '', window.location.href);
})();
