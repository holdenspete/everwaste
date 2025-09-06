console.log('AJAX filter script loading...');
console.log('jQuery available:', typeof jQuery !== 'undefined');
console.log('ajax_filter object:', typeof ajax_filter !== 'undefined' ? ajax_filter : 'NOT FOUND');

jQuery(document).ready(function($) {
    console.log('AJAX filter ready!');
    console.log('Category filter links found:', $('.category-filter a').length);
    
    // Function to get URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
    
    // Function to load posts based on category and page
    function loadPosts(category, page, updateUrl) {
        category = category || 'all';
        page = parseInt(page) || 1;
        updateUrl = updateUrl !== false; // default to true
        
        console.log('Loading posts - Category:', category, 'Page:', page, 'UpdateURL:', updateUrl);
        
        // Store state in sessionStorage as backup
        try {
            sessionStorage.setItem('blog_filter_state', JSON.stringify({
                category: category,
                page: page
            }));
        } catch(e) {
            console.log('SessionStorage not available');
        }
        
        // Update active filter
        $('.category-filter a').removeClass('active');
        $('.category-filter a[data-category="' + category + '"]').addClass('active');
        
        // Update URL if requested
        if (updateUrl) {
            var newUrl = window.location.pathname;
            var urlParams = [];
            
            if (category && category !== 'all') {
                urlParams.push('category=' + category);
            }
            
            // Always include page parameter for better back/forward navigation
            urlParams.push('page=' + page);
            
            if (urlParams.length > 0) {
                newUrl += '?' + urlParams.join('&');
            }
            
            console.log('Pushing state - Category:', category, 'Page:', page, 'URL:', newUrl);
            window.history.pushState({category: category, page: page}, '', newUrl);
        }
        
        // Show loading state
        $('.posts-grid').html('<div class="loading">Loading posts...</div>');
        $('.pagination').hide();
        
        // AJAX request
        $.ajax({
            url: ajax_filter.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_posts',
                category: category,
                page: page,
                nonce: ajax_filter.nonce
            },
            success: function(response) {
                console.log('AJAX response:', response);
                if (response.success) {
                    $('.posts-grid').html(response.data.posts);
                    if (response.data.pagination) {
                        $('.pagination').html(response.data.pagination).show();
                    } else {
                        $('.pagination').hide();
                    }
                    
                    // Scroll to top of posts if pagination
                    if (page > 1) {
                        $('html, body').animate({
                            scrollTop: $('.posts-grid').offset().top - 100
                        }, 500);
                    }
                } else {
                    $('.posts-grid').html('<p>No posts found.</p>');
                    $('.pagination').hide();
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX error:', xhr, status, error);
                $('.posts-grid').html('<p>Error loading posts. Please try again.</p>');
                $('.pagination').hide();
            }
        });
    }
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(event) {
        console.log('=== POPSTATE EVENT ===');
        console.log('Event state:', event.state);
        console.log('Current URL:', window.location.href);
        console.log('URL category param:', getUrlParameter('category'));
        console.log('URL page param:', getUrlParameter('page'));
        
        // Check if we're on the blog page (not on a single post)
        var isBlogPage = window.location.pathname.includes('/news') && !window.location.pathname.match(/\/news\/[^\/]+\/?$/);
        console.log('Is blog page:', isBlogPage);
        
        if (!isBlogPage) {
            console.log('Not on blog page, ignoring popstate');
            return;
        }
        
        if (event.state && (event.state.category || event.state.page)) {
            // Restore from stored state
            console.log('Restoring from stored state - Category:', event.state.category, 'Page:', event.state.page);
            loadPosts(event.state.category || 'all', event.state.page || 1, false);
        } else {
            // Fallback: read from URL
            console.log('Fallback: reading from URL');
            var urlCategory = getUrlParameter('category') || 'all';
            var urlPage = parseInt(getUrlParameter('page')) || 1;
            console.log('Fallback values - Category:', urlCategory, 'Page:', urlPage);
            loadPosts(urlCategory, urlPage, false);
        }
        
        console.log('=====================');
    });
    
    // Check for category and page parameters in URL on page load
    var urlCategory = getUrlParameter('category');
    var urlPage = getUrlParameter('page');
    
    console.log('=== PAGE LOAD DEBUG ===');
    console.log('Full URL:', window.location.href);
    console.log('Search params:', window.location.search);
    console.log('Parsed category:', urlCategory);
    console.log('Parsed page:', urlPage);
    
    // Check sessionStorage for previous state
    var storedState = null;
    try {
        var stored = sessionStorage.getItem('blog_filter_state');
        if (stored) {
            storedState = JSON.parse(stored);
            console.log('Stored state found:', storedState);
        }
    } catch(e) {
        console.log('SessionStorage not available');
    }
    
    console.log('========================');
    
    if (urlCategory || urlPage) {
        var category = urlCategory || 'all';
        var page = parseInt(urlPage) || 1;
        
        // Check if we have stored state with a different page than URL
        if (storedState && storedState.category === category && storedState.page && storedState.page !== page && !urlPage) {
            console.log('URL missing page but stored state has it, using stored state');
            page = storedState.page;
            
            // Update URL to include the page parameter
            var newUrl = window.location.pathname + '?category=' + category + '&page=' + page;
            window.history.replaceState({category: category, page: page}, '', newUrl);
        }
        
        console.log('URL parameters found - Category:', category, 'Page:', page);
        
        // Store initial state
        window.history.replaceState({category: category, page: page}, '', window.location.href);
        
        // Load the filtered content
        setTimeout(function() {
            loadPosts(category, page, false);
        }, 100);
    } else if (storedState && storedState.category && storedState.category !== 'all') {
        // No URL params but we have stored state - this might be the back navigation case
        console.log('No URL params but found stored state, restoring:', storedState);
        setTimeout(function() {
            loadPosts(storedState.category, storedState.page || 1, true);
        }, 100);
    } else {
        // Store initial state for "all" posts, page 1
        console.log('No URL parameters, setting initial state');
        window.history.replaceState({category: 'all', page: 1}, '', window.location.href);
        
        // Make sure "All" filter is marked as active on initial load
        $('.category-filter a').removeClass('active');
        $('.category-filter a[data-category="all"]').addClass('active');
        
        // Clear any stored state
        try {
            sessionStorage.removeItem('blog_filter_state');
        } catch(e) {}
    }
    
    // Handle filter clicks
    $('.category-filter a').on('click', function(e) {
        e.preventDefault();
        
        console.log('Filter clicked!');
        
        var category = $(this).data('category');
        console.log('Selected category:', category);
        
        // Use the loadPosts function
        loadPosts(category, 1, true); // Always start from page 1 when filtering
    });
    
    // Handle pagination clicks
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        
        var url = $(this).attr('href');
        var page = url.match(/\/page\/(\d+)/);
        page = page ? parseInt(page[1]) : 1;
        
        // Get current active category, default to 'all' if none is active
        var activeCategory = $('.category-filter a.active').data('category');
        if (!activeCategory) {
            activeCategory = 'all';
            // Make sure 'All' filter is marked as active
            $('.category-filter a').removeClass('active');
            $('.category-filter a[data-category="all"]').addClass('active');
        }
        
        console.log('Pagination clicked, page:', page, 'category:', activeCategory);
        
        // Use the loadPosts function
        loadPosts(activeCategory, page, true);
    });
    
});