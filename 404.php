<?php
/**
 * 404 Error Page Template
 * Author: Yoga Krisna
 * @package PenidaTripGo
 */

// Set proper HTTP 404 header
http_response_code(404);
?>

<!-- Header WordPress -->
<?php get_template_part('template-parts/header'); ?>

<!-- 404 Main Content with Logo Colors -->
<div class="min-h-screen bg-gradient-to-br from-[#1e3a5f] via-[#2a5080] to-[#4db8b8] flex items-center justify-center px-4 py-12 md:py-20 relative overflow-hidden">
    <!-- Decorative Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">

        <!-- 404 Hero Section -->
        <div class="text-center mb-12 md:mb-16">
            <!-- 404 Illustration -->
            <div class="mb-8 md:mb-12">
                <div class="text-7xl md:text-8xl lg:text-9xl font-extrabold bg-gradient-to-r from-[#f59e42] via-[#4db8b8] to-[#8bc53f] bg-clip-text text-transparent mb-6 drop-shadow-2xl animate-pulse">
                    404
                </div>
                <div class="w-32 h-2 bg-gradient-to-r from-[#f59e42] to-[#4db8b8] mx-auto rounded-full mb-8 shadow-lg"></div>
            </div>

            <!-- Error Message -->
            <div class="mb-12 md:mb-16">
                <div class="inline-flex items-center gap-2 bg-[#f59e42]/20 px-5 py-2 rounded-full mb-6 backdrop-blur-sm border-2 border-[#f59e42]/30">
                    <i class="ti ti-alert-triangle text-[#f59e42] text-2xl"></i>
                    <span class="text-sm md:text-base font-bold text-white uppercase tracking-wide">Page Not Found</span>
                </div>

                <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white mb-6 drop-shadow-lg">
                    Oops! This Page is <span class="text-[#f59e42]">Lost at Sea</span>
                </h1>
                <p class="text-base md:text-lg text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                    We couldn't find the page you're looking for. It might have drifted away like a boat in the ocean.
                    But don't worry, let's get you back on track to explore Nusa Penida!
                </p>
            </div>

            <!-- Quick Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 md:mb-16">
                <a href="<?php echo esc_url(home_url()); ?>"
                   class="group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-[#f59e42] to-[#e88d2f] hover:from-[#e88d2f] hover:to-[#f59e42] text-white px-8 py-4 rounded-2xl font-extrabold shadow-2xl hover:shadow-[#f59e42]/50 hover:scale-105 transition-all duration-300 w-full sm:w-auto">
                    <i class="ti ti-home text-2xl group-hover:rotate-12 transition-transform"></i>
                    <span>Back to Home</span>
                </a>

                <a href="#tours"
                   class="group inline-flex items-center justify-center gap-3 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-2xl font-extrabold border-2 border-white/30 hover:border-[#4db8b8] shadow-xl hover:scale-105 transition-all duration-300 w-full sm:w-auto">
                    <i class="ti ti-compass text-2xl text-[#4db8b8] group-hover:rotate-180 transition-transform"></i>
                    <span>Explore Tours</span>
                </a>
            </div>

            <!-- Search Form -->
            <div class="mb-16">
                <div class="max-w-lg mx-auto bg-white/10 backdrop-blur-md rounded-2xl p-6 md:p-8 border-2 border-white/20 shadow-2xl">
                    <h2 class="text-xl md:text-2xl font-extrabold text-white mb-4 flex items-center justify-center gap-3">
                        <i class="ti ti-search text-[#4db8b8] text-3xl"></i>
                        <span>Search Our Website</span>
                    </h2>
                    <p class="text-white/80 text-sm mb-6">Looking for something specific? Try searching</p>

                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="relative flex rounded-xl shadow-xl overflow-hidden">
                            <input type="search"
                                   name="s"
                                   value="<?php echo get_search_query(); ?>"
                                   placeholder="Search tours, guides, destinations..."
                                   class="flex-1 px-5 py-4 text-[#1e3a5f] bg-white border-0 focus:outline-none focus:ring-4 focus:ring-[#4db8b8]/50 font-semibold"
                                   aria-label="Search">
                            <button type="submit"
                                    class="px-8 py-4 bg-gradient-to-r from-[#4db8b8] to-[#3a9898] text-white font-bold hover:from-[#3a9898] hover:to-[#4db8b8] focus:outline-none focus:ring-4 focus:ring-[#4db8b8]/50 transition-all duration-300 hover:scale-105"
                                    aria-label="Submit search">
                                <i class="ti ti-search text-2xl"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Popular Tours Section -->
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 lg:p-12 shadow-2xl border-2 border-white/20 mb-12">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 bg-[#8bc53f]/20 px-5 py-2 rounded-full mb-4">
                    <i class="ti ti-star text-[#8bc53f] text-xl"></i>
                    <span class="text-sm md:text-base font-bold text-white uppercase tracking-wide">Popular Tours</span>
                </div>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-extrabold text-white mb-4">
                    Discover Our <span class="text-[#f59e42]">Best Adventures</span>
                </h2>
                <p class="text-white/80 max-w-2xl mx-auto">While you're here, check out these amazing tours</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Tour 1 -->
                <a href="<?php echo esc_url(home_url('/#tours')); ?>"
                   class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <div class="aspect-video bg-gradient-to-br from-[#f59e42]/20 to-[#4db8b8]/20 flex items-center justify-center">
                        <i class="ti ti-sunrise text-7xl text-[#f59e42] group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#1e3a5f] mb-2 group-hover:text-[#f59e42] transition-colors">
                            Sunrise Trip
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Experience magical sunrise views at Nusa Penida's most iconic spots
                        </p>
                        <div class="flex items-center gap-2 text-[#4db8b8] font-bold text-sm">
                            <span>Learn More</span>
                            <i class="ti ti-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>

                <!-- Tour 2 -->
                <a href="<?php echo esc_url(home_url('/#tours')); ?>"
                   class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <div class="aspect-video bg-gradient-to-br from-[#4db8b8]/20 to-[#8bc53f]/20 flex items-center justify-center">
                        <i class="ti ti-bike text-7xl text-[#4db8b8] group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#1e3a5f] mb-2 group-hover:text-[#4db8b8] transition-colors">
                            Motorbike Adventure
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Ride through scenic routes and discover hidden gems on two wheels
                        </p>
                        <div class="flex items-center gap-2 text-[#4db8b8] font-bold text-sm">
                            <span>Learn More</span>
                            <i class="ti ti-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>

                <!-- Tour 3 -->
                <a href="<?php echo esc_url(home_url('/#tours')); ?>"
                   class="group bg-white rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    <div class="aspect-video bg-gradient-to-br from-[#8bc53f]/20 to-[#f59e42]/20 flex items-center justify-center">
                        <i class="ti ti-question-mark text-7xl text-[#8bc53f] group-hover:scale-110 transition-transform"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#1e3a5f] mb-2 group-hover:text-[#8bc53f] transition-colors">
                            Mystery Trip
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Let us surprise you with a spontaneous adventure to secret locations
                        </p>
                        <div class="flex items-center gap-2 text-[#4db8b8] font-bold text-sm">
                            <span>Learn More</span>
                            <i class="ti ti-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contact CTA -->
        <div class="text-center bg-gradient-to-r from-[#f59e42]/10 via-[#4db8b8]/10 to-[#8bc53f]/10 backdrop-blur-md rounded-2xl p-8 md:p-10 border-2 border-white/20 shadow-2xl">
            <i class="ti ti-headset text-5xl md:text-6xl text-[#4db8b8] mb-4"></i>
            <h3 class="text-2xl md:text-3xl font-extrabold text-white mb-3">
                Need Help Finding What You're Looking For?
            </h3>
            <p class="text-white/90 mb-6 max-w-2xl mx-auto">
                Our team is ready to assist you! Contact us via WhatsApp and we'll help you plan the perfect adventure
            </p>
            <a href="<?php echo esc_url(ptg_wa_link("Hi, PenidaTripGo! I need help finding information on your website")); ?>"
               target="_blank" rel="noopener"
               class="inline-flex items-center gap-3 bg-gradient-to-r from-green-600 to-green-500 hover:from-green-500 hover:to-green-600 text-white px-8 py-4 rounded-2xl font-extrabold shadow-2xl hover:shadow-green-500/50 hover:scale-105 transition-all duration-300">
                <i class="ti ti-brand-whatsapp text-3xl"></i>
                <span>Chat with Us on WhatsApp</span>
            </a>
        </div>
    </div>
</div>

<!-- Custom 404 Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Analytics tracking for 404 errors
    if (typeof gtag !== 'undefined') {
        gtag('event', '404_error', {
            'event_category': 'Error',
            'event_label': window.location.pathname,
            'page_title': document.title,
            'referrer': document.referrer || 'Direct',
            'value': 1
        });
    }

    // Auto focus on search input
    const searchInput = document.querySelector('input[type="search"]');
    if (searchInput) {
        setTimeout(() => {
            searchInput.focus();
            // Add subtle animation to indicate focus
            searchInput.parentElement.classList.add('ring-4', 'ring-[#4db8b8]/30');
        }, 800);

        // Remove focus indicator when user starts typing
        searchInput.addEventListener('input', function() {
            this.parentElement.classList.remove('ring-4', 'ring-[#4db8b8]/30');
        });
    }

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Error logging for debugging
    console.log('404 Error - Page Info:', {
        url: window.location.href,
        pathname: window.location.pathname,
        referrer: document.referrer,
        userAgent: navigator.userAgent,
        timestamp: new Date().toISOString()
    });
});
</script>

<!-- SEO Structured Data -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Page Not Found - PenidaTripGo",
    "description": "The requested page could not be found on PenidaTripGo website. Explore our amazing Nusa Penida tours instead!",
    "url": "<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>",
    "mainEntity": {
        "@type": "SearchAction",
        "target": "<?php echo esc_url(home_url('/')); ?>?s={search_term}",
        "query-input": "required name=search_term"
    }
}
</script>

<!-- Footer WordPress -->
<?php get_template_part('template-parts/footer'); ?>
