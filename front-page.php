<?php
/**
 * Front Page - Terra Eden Bali
 * Luxury Wooden Villa Investment in Nusa Dua, Bali
 * Kempinski-inspired Luxury Design
 */
get_template_part('template-parts/header-kempinski'); ?>

<!-- Hero Section - Fullscreen Kempinski Style -->
<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Video/Image -->
    <div class="absolute inset-0 z-0">
        <picture>
            <source media="(max-width: 640px)" srcset="<?php echo esc_url(get_theme_mod('hero_bg_image_mobile', home_url() . '/wp-content/uploads/2025/09/terra-eden-hero-mobile.webp')); ?>">
            <img src="<?php echo esc_url(get_theme_mod('hero_bg_image', home_url() . '/wp-content/uploads/2025/09/terra-eden-hero.webp')); ?>"
                alt="Terra Eden Bali - Luxury Wooden Villa Investment"
                class="w-full h-full object-cover scale-105"
                fetchpriority="high">
        </picture>
    </div>

    <!-- Gradient Overlay - Kempinski Style -->
    <div class="absolute inset-0 z-10 bg-gradient-to-b from-[#514d32]/60 via-[#514d32]/30 to-transparent"></div>
    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#514d32]/80 via-transparent to-transparent"></div>

    <!-- Hero Content -->
    <div class="relative z-20 text-center px-6 max-w-5xl mx-auto">
        <!-- Elegant Tagline -->
        <p class="text-[#b5a191] text-sm md:text-base uppercase tracking-[0.3em] mb-6 font-light animate-fade-in-up">
            Luxury Wooden Villa Investment in Nusa Dua, Bali
        </p>

        <!-- Main Title - Large Elegant Typography -->
        <h1 class="font-serif text-4xl sm:text-5xl md:text-7xl lg:text-8xl text-white font-light leading-[1.1] mb-6 animate-fade-in-up animation-delay-200">
            Terra Eden<br><span class="italic">Bali</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-white/80 text-lg md:text-xl lg:text-2xl font-light max-w-3xl mx-auto mb-10 leading-relaxed animate-fade-in-up animation-delay-400">
            Fully Managed Resort-Style Villas with High ROI & Passive Income
        </p>

        <!-- CTA Buttons - Kempinski Style -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up animation-delay-600">
            <a href="#villas"
               class="group inline-flex items-center gap-3 bg-[#b5a191] hover:bg-[#a08d7a] text-[#514d32] px-8 py-4 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500 hover:tracking-[0.2em]">
                <span>Explore Villas</span>
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="#contact"
               class="group inline-flex items-center gap-3 bg-transparent border border-white/50 hover:border-white text-white px-8 py-4 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500 hover:bg-white/10">
                <span>Request Brochure</span>
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator - Elegant -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-20 animate-bounce-slow">
        <div class="flex flex-col items-center gap-2 text-white/60">
            <span class="text-xs uppercase tracking-[0.2em]">Discover</span>
            <div class="w-px h-12 bg-gradient-to-b from-white/60 to-transparent"></div>
        </div>
    </div>
</section>

<!-- Investment Highlights Bar -->
<section class="bg-[#514d32] py-6 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 text-center">
            <div>
                <p class="font-serif text-2xl md:text-3xl text-[#b5a191] mb-1">70%</p>
                <p class="text-white/60 text-xs uppercase tracking-[0.15em]">Potential ROI/Year</p>
            </div>
            <div>
                <p class="font-serif text-2xl md:text-3xl text-[#b5a191] mb-1">IDR 500M</p>
                <p class="text-white/60 text-xs uppercase tracking-[0.15em]">Starting Price</p>
            </div>
            <div>
                <p class="font-serif text-2xl md:text-3xl text-[#b5a191] mb-1">24/7</p>
                <p class="text-white/60 text-xs uppercase tracking-[0.15em]">Full Management</p>
            </div>
            <div>
                <p class="font-serif text-2xl md:text-3xl text-[#b5a191] mb-1">Nusa Dua</p>
                <p class="text-white/60 text-xs uppercase tracking-[0.15em]">Prime Location</p>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section - About Terra Eden -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <!-- Left: Content -->
            <div class="order-2 md:order-1">
                <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">A Rare Opportunity</p>
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light leading-tight mb-6">
                    Where <span class="italic">Investment</span><br>Meets Paradise
                </h2>
                <div class="w-16 h-px bg-[#b5a191] mb-8"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Terra Eden Bali is an exclusive luxury wooden villa investment in Nusa Dua, designed for those seeking a combination of peaceful tropical living, modern comfort, and strong financial returns.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    This premium development is positioned as a resort-style, fully managed villa community, offering both a high-quality lifestyle and a reliable passive income opportunity in Bali.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 text-[#514d32]">
                        <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm">High ROI Potential</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#514d32]">
                        <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm">Passive Income</span>
                    </div>
                    <div class="flex items-center gap-2 text-[#514d32]">
                        <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-sm">Full Management</span>
                    </div>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="order-1 md:order-2 relative">
                <div class="aspect-[4/5] overflow-hidden">
                    <img src="<?php echo esc_url(get_theme_mod('welcome_image', home_url() . '/wp-content/uploads/2025/09/terra-eden-villa.webp')); ?>"
                         alt="Terra Eden Bali Luxury Villa"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                </div>
                <!-- Decorative Element -->
                <div class="absolute -bottom-6 -left-6 w-24 h-24 border border-[#b5a191] hidden md:block"></div>
            </div>
        </div>
    </div>
</section>

<!-- Prime Location Section -->
<section class="py-24 md:py-32 bg-[#eedfcc]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Map/Image -->
            <div class="relative">
                <div class="aspect-square overflow-hidden">
                    <img src="<?php echo esc_url(get_theme_mod('location_image', home_url() . '/wp-content/uploads/2025/09/nusa-dua-location.webp')); ?>"
                         alt="Prime Location Nusa Dua"
                         class="w-full h-full object-cover"
                         loading="lazy">
                </div>
            </div>

            <!-- Right: Content -->
            <div>
                <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">Prime Location</p>
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light leading-tight mb-6">
                    Nusa Dua,<br><span class="italic">South Bali</span>
                </h2>
                <div class="w-16 h-px bg-[#b5a191] mb-8"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Terra Eden Bali is strategically located on Jalan Palapa, Nusa Dua — one of the most prestigious, secure, and high-value areas in Bali.
                </p>

                <!-- Location Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center border border-[#b5a191]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">Near Ngurah Rai International Airport</h4>
                            <p class="text-gray-500 text-sm">Easy access via Mandara Toll Road</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center border border-[#b5a191]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">World-Class Resorts Neighborhood</h4>
                            <p class="text-gray-500 text-sm">Surrounded by The Apurva Kempinski, St. Regis, Ritz-Carlton</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center border border-[#b5a191]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">Minutes from Pandawa & Melasti Beach</h4>
                            <p class="text-gray-500 text-sm">Pristine beaches and dramatic cliff views</p>
                        </div>
                    </div>
                </div>

                <!-- Nearby Brands -->
                <p class="text-xs uppercase tracking-[0.15em] text-[#b5a191] mb-3">Surrounded by Iconic Brands</p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    The Apurva Kempinski Bali • St. Regis Bali Resort • The Ritz-Carlton Nusa Dua • Conrad Bali • Hilton Bali Resort • The Mulia
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Villa Types Section -->
<section id="villas" class="py-24 md:py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16 md:mb-20">
            <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">Exclusive Collection</p>
            <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light">
                Villa <span class="italic">Types</span>
            </h2>
        </div>

        <!-- Villa Swiper Container -->
        <div class="villa-swiper-container relative">
            <div class="swiper villa-swiper">
                <div class="swiper-wrapper">
                    <!-- Daisy Homes -->
                    <div class="swiper-slide">
                        <article class="villa-card group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 cursor-pointer h-full"
                                 data-villa="daisy"
                                 onclick="openVillaModal('daisy')">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url(get_theme_mod('villa_daisy_image', home_url() . '/wp-content/uploads/2025/09/daisy-homes.webp')); ?>"
                                     alt="Daisy Homes"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32]/80 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <p class="text-[#b5a191] text-xs uppercase tracking-[0.2em] mb-1">Single-Storey</p>
                                    <h3 class="font-serif text-2xl text-white font-light">Daisy Homes</h3>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                    Calm, private, and nature-inspired tropical villas. Ideal for couples and long-stay guests with strong ROI potential.
                                </p>
                                <p class="text-xs text-[#b5a191] uppercase tracking-[0.1em]">Land: 5×15m to 5×20m</p>
                            </div>
                        </article>
                    </div>

                    <!-- Jasmine Homes -->
                    <div class="swiper-slide">
                        <article class="villa-card group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 cursor-pointer h-full"
                                 data-villa="jasmine"
                                 onclick="openVillaModal('jasmine')">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url(get_theme_mod('villa_jasmine_image', home_url() . '/wp-content/uploads/2025/09/jasmine-homes.webp')); ?>"
                                     alt="Jasmine Homes"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32]/80 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <p class="text-[#b5a191] text-xs uppercase tracking-[0.2em] mb-1">Two-Storey Compact</p>
                                    <h3 class="font-serif text-2xl text-white font-light">Jasmine Homes</h3>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                    Efficient layout with open living space. Perfect for Airbnb, digital nomads, and couples seeking excellent rental yield.
                                </p>
                                <p class="text-xs text-[#b5a191] uppercase tracking-[0.1em]">Natural Wooden Design</p>
                            </div>
                        </article>
                    </div>

                    <!-- Lotus Homes -->
                    <div class="swiper-slide">
                        <article class="villa-card group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-gray-100 cursor-pointer h-full"
                                 data-villa="lotus"
                                 onclick="openVillaModal('lotus')">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url(get_theme_mod('villa_lotus_image', home_url() . '/wp-content/uploads/2025/09/lotus-homes.webp')); ?>"
                                     alt="Lotus Homes"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32]/80 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <p class="text-[#b5a191] text-xs uppercase tracking-[0.2em] mb-1">Spacious Two-Storey</p>
                                    <h3 class="font-serif text-2xl text-white font-light">Lotus Homes</h3>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                    Larger living areas with extra storage and guest toilet. Ideal for small families and holiday rentals.
                                </p>
                                <p class="text-xs text-[#b5a191] uppercase tracking-[0.1em]">Strong Performance</p>
                            </div>
                        </article>
                    </div>

                    <!-- Lily Homes -->
                    <div class="swiper-slide">
                        <article class="villa-card group bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-[#b5a191] cursor-pointer h-full"
                                 data-villa="lily"
                                 onclick="openVillaModal('lily')">
                            <div class="relative aspect-[4/3] overflow-hidden">
                                <img src="<?php echo esc_url(get_theme_mod('villa_lily_image', home_url() . '/wp-content/uploads/2025/09/lily-homes.webp')); ?>"
                                     alt="Lily Homes"
                                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                     loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32]/80 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                                <!-- Premium Badge -->
                                <div class="absolute top-4 right-4">
                                    <span class="bg-[#b5a191] text-[#514d32] px-3 py-1 text-xs uppercase tracking-[0.1em] font-medium">Premium</span>
                                </div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <p class="text-[#b5a191] text-xs uppercase tracking-[0.2em] mb-1">Private Pool Villa</p>
                                    <h3 class="font-serif text-2xl text-white font-light">Lily Homes</h3>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 text-sm leading-relaxed mb-4">
                                    Premium villa with private pool and warm wooden interior. High nightly rates for upscale rental markets.
                                </p>
                                <p class="text-xs text-[#b5a191] uppercase tracking-[0.1em]">Highest Income Potential</p>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination villa-pagination mt-8"></div>
            </div>

            <!-- Navigation Arrows - Desktop Only -->
            <button class="villa-swiper-prev hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 lg:-translate-x-8 z-10 w-12 h-12 items-center justify-center bg-white border border-gray-200 text-[#514d32] hover:bg-[#514d32] hover:text-white hover:border-[#514d32] transition-all duration-300 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button class="villa-swiper-next hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 lg:translate-x-8 z-10 w-12 h-12 items-center justify-center bg-white border border-gray-200 text-[#514d32] hover:bg-[#514d32] hover:text-white hover:border-[#514d32] transition-all duration-300 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>

        <!-- Swipe Hint - Mobile Only -->
        <div class="flex md:hidden items-center justify-center gap-2 mt-6 text-gray-400 text-sm">
            <svg class="w-5 h-5 animate-swipe-hint" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
            </svg>
            <span>Swipe to explore</span>
            <svg class="w-5 h-5 animate-swipe-hint" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </div>

        <!-- CTA -->
        <div class="text-center mt-12 md:mt-16">
            <a href="#contact"
               class="inline-flex items-center gap-3 bg-[#514d32] hover:bg-[#3d3a25] text-white px-10 py-5 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500">
                <span>Request Price List</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Swiper CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
/* Villa Swiper Styles */
.villa-swiper {
    overflow: visible;
    padding: 10px 0;
}

.villa-swiper .swiper-slide {
    height: auto;
}

.villa-swiper .swiper-slide article {
    display: flex;
    flex-direction: column;
}

/* Pagination Styling */
.villa-pagination {
    position: relative;
    bottom: 0 !important;
}

.villa-pagination .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: #d1d5db;
    opacity: 1;
    transition: all 0.3s ease;
}

.villa-pagination .swiper-pagination-bullet-active {
    background: #514d32;
    width: 30px;
    border-radius: 5px;
}

/* Swipe Hint Animation */
@keyframes swipe-hint {
    0%, 100% { transform: translateX(0); opacity: 0.5; }
    50% { transform: translateX(-5px); opacity: 1; }
}

.animate-swipe-hint {
    animation: swipe-hint 1.5s ease-in-out infinite;
}

.animate-swipe-hint:last-child {
    animation-direction: reverse;
}

/* Navigation Button Disabled State */
.villa-swiper-prev.swiper-button-disabled,
.villa-swiper-next.swiper-button-disabled {
    opacity: 0.3;
    cursor: not-allowed;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Villa Swiper
    const villaSwiper = new Swiper('.villa-swiper', {
        // Responsive breakpoints
        slidesPerView: 1.15,
        spaceBetween: 16,
        centeredSlides: false,
        grabCursor: true,

        // Pagination
        pagination: {
            el: '.villa-pagination',
            clickable: true,
        },

        // Navigation
        navigation: {
            nextEl: '.villa-swiper-next',
            prevEl: '.villa-swiper-prev',
        },

        // Responsive breakpoints
        breakpoints: {
            // >= 480px
            480: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            // >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            // >= 768px (tablet)
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            // >= 1024px (desktop)
            1024: {
                slidesPerView: 3,
                spaceBetween: 28,
            },
            // >= 1280px (large desktop)
            1280: {
                slidesPerView: 4,
                spaceBetween: 32,
            }
        }
    });

    // Hide swipe hint after first interaction
    const swipeHint = document.querySelector('.animate-swipe-hint');
    if (swipeHint) {
        villaSwiper.on('touchMove', function() {
            swipeHint.parentElement.style.opacity = '0';
            setTimeout(() => {
                swipeHint.parentElement.style.display = 'none';
            }, 300);
        });
    }
});
</script>

<!-- Villa Detail Modal Popup -->
<div id="villa-modal" class="fixed inset-0 z-[100] hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-[#514d32]/80 backdrop-blur-sm" id="villa-modal-backdrop"></div>

    <!-- Modal Content -->
    <div class="absolute inset-0 overflow-y-auto">
        <div class="min-h-full flex items-center justify-center p-4 md:p-8">
            <div class="relative bg-white w-full max-w-5xl my-8 shadow-2xl animate-modal-in" id="villa-modal-content">
                <!-- Close Button -->
                <button type="button"
                        id="villa-modal-close"
                        class="absolute top-4 right-4 z-10 w-10 h-10 flex items-center justify-center bg-white/90 hover:bg-white text-[#514d32] hover:text-[#b5a191] transition-colors rounded-full shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div class="grid md:grid-cols-2">
                    <!-- Left: Image with Type Label -->
                    <div class="relative aspect-square md:aspect-auto md:min-h-[500px] overflow-hidden bg-[#eedfcc]">
                        <img src="" alt="" class="w-full h-full object-cover" id="villa-modal-image">
                        <!-- Type Label - Script Style -->
                        <div class="absolute bottom-0 left-0 right-0 p-8 bg-gradient-to-t from-[#514d32]/90 via-[#514d32]/50 to-transparent">
                            <p class="font-serif text-3xl md:text-4xl text-white italic" id="villa-modal-type-label">Type Jasmine</p>
                        </div>
                    </div>

                    <!-- Right: Details -->
                    <div class="p-8 md:p-10 lg:p-12">
                        <!-- Title -->
                        <h3 class="font-serif text-2xl md:text-3xl text-[#514d32] font-light mb-4" id="villa-modal-title">
                            2 Storey Land Size 5x6 m²
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 leading-relaxed mb-6" id="villa-modal-description">
                            Efficient and compact two-storey wooden villa designed for maximum rental yield. Perfect for Airbnb and digital nomad markets.
                        </p>

                        <!-- ROI Summary Box -->
                        <div class="bg-[#514d32] p-6 mb-6">
                            <h4 class="text-[#b5a191] text-xs uppercase tracking-[0.2em] mb-4">ROI Summary</h4>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center border-b border-white/10 pb-3">
                                    <span class="text-white/70 text-sm">Price</span>
                                    <span class="text-white font-medium" id="villa-modal-price">Rp 499.000.000 | Unfurnished (25 Years Leasehold)</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-white/10 pb-3">
                                    <span class="text-white/70 text-sm">Potential Net Profit</span>
                                    <span class="text-[#b5a191] font-medium" id="villa-modal-profit">± Rp 106.000.000 / year</span>
                                </div>
                                <div class="flex justify-between items-center border-b border-white/10 pb-3">
                                    <span class="text-white/70 text-sm">ROI</span>
                                    <span class="text-[#b5a191] font-medium" id="villa-modal-roi">±21%</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-white/70 text-sm">Payback Period</span>
                                    <span class="text-[#b5a191] font-medium" id="villa-modal-payback">±4.7 years</span>
                                </div>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="mb-8">
                            <h4 class="text-[#514d32] font-medium mb-4">Highlights</h4>
                            <ul class="space-y-2" id="villa-modal-highlights">
                                <li class="flex items-start gap-3 text-gray-600 text-sm">
                                    <svg class="w-4 h-4 text-[#b5a191] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>Natural wooden construction with premium materials</span>
                                </li>
                            </ul>
                        </div>

                        <!-- CTA Button -->
                        <a href="https://wa.me/6281234567890?text=Hello,%20I%20am%20interested%20in%20villa%20investment"
                           target="_blank"
                           rel="noopener"
                           id="villa-modal-cta"
                           class="inline-flex items-center gap-3 bg-[#b5a191] hover:bg-[#a08d7a] text-[#514d32] px-8 py-4 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-300 w-full justify-center">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span>Inquire About This Villa</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Villa Modal JavaScript -->
<script>
// Villa Data
const villaData = {
    daisy: {
        name: 'Daisy',
        typeLabel: 'Type Daisy',
        title: 'Single-Storey Villa | Land Size 5×15m to 5×20m',
        description: 'Calm, private, and nature-inspired tropical villas perfect for couples and long-stay guests. The single-storey design offers seamless indoor-outdoor living with natural wooden construction throughout.',
        image: '<?php echo esc_url(get_theme_mod("villa_daisy_image", home_url() . "/wp-content/uploads/2025/09/daisy-homes.webp")); ?>',
        price: 'Rp 450.000.000 | Unfurnished (25 Years Leasehold)',
        profit: '± Rp 85.000.000 / year',
        roi: '±19%',
        payback: '±5.3 years',
        highlights: [
            'Single-storey design for easy accessibility',
            'Natural wooden construction with teak & mahogany',
            'Private garden and outdoor living space',
            'Ideal for couples and long-stay rentals',
            'Strong ROI potential in peaceful setting',
            'Full property management included'
        ],
        whatsapp: 'Hello, I am interested in Daisy Homes villa investment at Terra Eden Bali'
    },
    jasmine: {
        name: 'Jasmine',
        typeLabel: 'Type Jasmine',
        title: '2 Storey Compact Villa | Land Size 5×6 m²',
        description: 'Efficient and compact two-storey wooden villa designed for maximum rental yield. The smart layout maximizes living space while maintaining the natural tropical ambiance perfect for Airbnb and digital nomad markets.',
        image: '<?php echo esc_url(get_theme_mod("villa_jasmine_image", home_url() . "/wp-content/uploads/2025/09/jasmine-homes.webp")); ?>',
        price: 'Rp 499.000.000 | Unfurnished (25 Years Leasehold)',
        profit: '± Rp 106.000.000 / year',
        roi: '±21%',
        payback: '±4.7 years',
        highlights: [
            'Efficient two-storey compact design',
            'Open living space with natural ventilation',
            'Premium wooden materials throughout',
            'Perfect for Airbnb & digital nomads',
            'Excellent rental yield potential',
            'Full property management included'
        ],
        whatsapp: 'Hello, I am interested in Jasmine Homes villa investment at Terra Eden Bali'
    },
    lotus: {
        name: 'Lotus',
        typeLabel: 'Type Lotus',
        title: 'Spacious 2 Storey Villa | Extended Living Area',
        description: 'Larger two-storey villa with extended living areas, extra storage, and guest toilet. Ideal for small families and premium holiday rentals seeking more space without compromising on the natural wooden aesthetics.',
        image: '<?php echo esc_url(get_theme_mod("villa_lotus_image", home_url() . "/wp-content/uploads/2025/09/lotus-homes.webp")); ?>',
        price: 'Rp 650.000.000 | Unfurnished (25 Years Leasehold)',
        profit: '± Rp 145.000.000 / year',
        roi: '±22%',
        payback: '±4.5 years',
        highlights: [
            'Spacious two-storey layout',
            'Extended living and dining areas',
            'Guest toilet on ground floor',
            'Extra storage space included',
            'Ideal for families & premium rentals',
            'Strong performance in holiday market'
        ],
        whatsapp: 'Hello, I am interested in Lotus Homes villa investment at Terra Eden Bali'
    },
    lily: {
        name: 'Lily',
        typeLabel: 'Type Lily',
        title: 'Premium Villa with Private Pool',
        description: 'Our flagship premium villa featuring a private pool, warm wooden interiors, and luxurious finishes. Designed for the upscale rental market with highest nightly rates and exceptional guest experiences.',
        image: '<?php echo esc_url(get_theme_mod("villa_lily_image", home_url() . "/wp-content/uploads/2025/09/lily-homes.webp")); ?>',
        price: 'Rp 850.000.000 | Unfurnished (25 Years Leasehold)',
        profit: '± Rp 210.000.000 / year',
        roi: '±25%',
        payback: '±4 years',
        highlights: [
            'Private swimming pool included',
            'Premium wooden interiors throughout',
            'Luxurious finishes and fixtures',
            'Highest nightly rental rates',
            'Target upscale & honeymoon market',
            'Maximum income potential'
        ],
        whatsapp: 'Hello, I am interested in Lily Homes (Premium Pool Villa) investment at Terra Eden Bali'
    }
};

// Open Villa Modal
function openVillaModal(villaKey) {
    const modal = document.getElementById('villa-modal');
    const data = villaData[villaKey];

    if (!data) return;

    // Populate modal
    document.getElementById('villa-modal-image').src = data.image;
    document.getElementById('villa-modal-image').alt = data.name + ' Homes';
    document.getElementById('villa-modal-type-label').textContent = data.typeLabel;
    document.getElementById('villa-modal-title').textContent = data.title;
    document.getElementById('villa-modal-description').textContent = data.description;
    document.getElementById('villa-modal-price').textContent = data.price;
    document.getElementById('villa-modal-profit').textContent = data.profit;
    document.getElementById('villa-modal-roi').textContent = data.roi;
    document.getElementById('villa-modal-payback').textContent = data.payback;

    // Populate highlights
    const highlightsList = document.getElementById('villa-modal-highlights');
    highlightsList.innerHTML = data.highlights.map(highlight => `
        <li class="flex items-start gap-3 text-gray-600 text-sm">
            <svg class="w-4 h-4 text-[#b5a191] flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
            <span>${highlight}</span>
        </li>
    `).join('');

    // Update WhatsApp link
    const ctaBtn = document.getElementById('villa-modal-cta');
    ctaBtn.href = 'https://wa.me/6281234567890?text=' + encodeURIComponent(data.whatsapp);

    // Show modal
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

// Close Villa Modal
function closeVillaModal() {
    const modal = document.getElementById('villa-modal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// Initialize Villa Modal Events
document.addEventListener('DOMContentLoaded', function() {
    // Close button
    document.getElementById('villa-modal-close').addEventListener('click', closeVillaModal);

    // Backdrop click
    document.getElementById('villa-modal-backdrop').addEventListener('click', closeVillaModal);

    // ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeVillaModal();
        }
    });
});
</script>

<!-- Resort Facilities Section - Kempinski Style with Modal -->
<section id="facilities" class="py-24 md:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-start">
            <!-- Left: Featured Image -->
            <div class="relative">
                <div class="aspect-[4/5] overflow-hidden" id="facility-image-container">
                    <img src="<?php echo esc_url(get_theme_mod('facility_restaurant_image', home_url() . '/wp-content/uploads/2025/09/facility-restaurant.webp')); ?>"
                         alt="Terra Eden Restaurant"
                         class="w-full h-full object-cover transition-opacity duration-500"
                         id="facility-featured-image"
                         loading="lazy">
                </div>
            </div>

            <!-- Right: Content & Facility List -->
            <div class="lg:py-8">
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light mb-6">
                    Facilities & <span class="italic">Amenities</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-10">
                    Terra Eden Bali offers hotel-style living with full 24-hour services, designed to deliver comfort, wellness, and productivity for residents and guests.
                </p>

                <!-- Facility List - Clickable -->
                <div class="space-y-0 border-t border-gray-200">
                    <!-- Eden Restaurant -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="restaurant"
                            data-image="<?php echo esc_url(get_theme_mod('facility_restaurant_image', home_url() . '/wp-content/uploads/2025/09/facility-restaurant.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Eden Restaurant
                        </h3>
                    </button>

                    <!-- Wellness Center -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="wellness"
                            data-image="<?php echo esc_url(get_theme_mod('facility_wellness_image', home_url() . '/wp-content/uploads/2025/09/facility-wellness.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Wellness Center
                        </h3>
                    </button>

                    <!-- Co-Working Hub -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="coworking"
                            data-image="<?php echo esc_url(get_theme_mod('facility_coworking_image', home_url() . '/wp-content/uploads/2025/09/facility-coworking.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Co-Working Hub
                        </h3>
                    </button>

                    <!-- Spa & Massage -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="spa"
                            data-image="<?php echo esc_url(get_theme_mod('facility_spa_image', home_url() . '/wp-content/uploads/2025/09/facility-spa.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Spa & Massage
                        </h3>
                    </button>

                    <!-- Swimming Pool -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="pool"
                            data-image="<?php echo esc_url(get_theme_mod('facility_pool_image', home_url() . '/wp-content/uploads/2025/09/facility-pool.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Swimming Pool
                        </h3>
                    </button>

                    <!-- Kids & Family Area -->
                    <button type="button"
                            class="facility-item w-full text-left py-5 border-b border-gray-200 group transition-colors hover:bg-gray-50 px-4 -mx-4"
                            data-facility="kids"
                            data-image="<?php echo esc_url(get_theme_mod('facility_kids_image', home_url() . '/wp-content/uploads/2025/09/facility-kids.webp')); ?>">
                        <h3 class="font-serif text-xl md:text-2xl text-[#514d32] group-hover:text-[#b5a191] transition-colors">
                            Kids & Family Area
                        </h3>
                    </button>
                </div>

                <!-- Show All Button -->
                <div class="mt-8">
                    <button type="button"
                            id="show-all-facilities"
                            class="inline-flex items-center gap-2 text-[#514d32] text-sm uppercase tracking-[0.15em] font-medium border border-[#514d32] px-6 py-3 hover:bg-[#514d32] hover:text-white transition-all duration-300">
                        <span>Show All</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facility Modal Popup - Kempinski Style -->
<div id="facility-modal" class="fixed inset-0 z-[100] hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-[#514d32]/80 backdrop-blur-sm" id="facility-modal-backdrop"></div>

    <!-- Modal Content -->
    <div class="absolute inset-0 overflow-y-auto">
        <div class="min-h-full flex items-start justify-center p-4 md:p-8">
            <div class="relative bg-white w-full max-w-6xl my-8 shadow-2xl animate-modal-in" id="facility-modal-content">
                <!-- Close Button -->
                <button type="button"
                        id="facility-modal-close"
                        class="absolute top-6 right-6 z-10 w-10 h-10 flex items-center justify-center text-[#514d32] hover:text-[#b5a191] transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div class="grid md:grid-cols-2">
                    <!-- Left: Image -->
                    <div class="aspect-square md:aspect-auto md:h-full">
                        <img src="" alt="" class="w-full h-full object-cover" id="modal-facility-image">
                    </div>

                    <!-- Right: Details -->
                    <div class="p-8 md:p-12 lg:p-16">
                        <h3 class="font-serif text-3xl md:text-4xl text-[#514d32] font-light mb-6" id="modal-facility-title"></h3>
                        <p class="text-gray-600 leading-relaxed mb-8" id="modal-facility-description"></p>

                        <!-- Facility Details Table -->
                        <div class="space-y-4 mb-8" id="modal-facility-details">
                            <!-- Hours -->
                            <div class="flex justify-between py-3 border-b border-gray-100">
                                <span class="text-[#514d32] font-medium">Hours</span>
                                <span class="text-gray-600" id="modal-hours"></span>
                            </div>
                            <!-- Type -->
                            <div class="flex justify-between py-3 border-b border-gray-100">
                                <span class="text-[#514d32] font-medium">Type</span>
                                <span class="text-gray-600" id="modal-type"></span>
                            </div>
                            <!-- Capacity -->
                            <div class="flex justify-between py-3 border-b border-gray-100">
                                <span class="text-[#514d32] font-medium">Capacity</span>
                                <span class="text-gray-600" id="modal-capacity"></span>
                            </div>
                            <!-- Dress Code -->
                            <div class="flex justify-between py-3 border-b border-gray-100">
                                <span class="text-[#514d32] font-medium">Dress Code</span>
                                <span class="text-gray-600" id="modal-dress"></span>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="space-y-3 mb-8">
                            <a href="tel:+6281234567890" class="flex items-center gap-3 text-gray-600 hover:text-[#b5a191] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+62 812 3456 7890</span>
                            </a>
                            <a href="mailto:facilities@terraedenbali.com" class="flex items-center gap-3 text-gray-600 hover:text-[#b5a191] transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>facilities@terraedenbali.com</span>
                            </a>
                        </div>

                        <!-- CTA -->
                        <a href="#contact"
                           class="inline-flex items-center gap-2 text-[#514d32] text-sm uppercase tracking-[0.15em] font-medium border-b border-[#514d32] pb-1 hover:text-[#b5a191] hover:border-[#b5a191] transition-colors"
                           onclick="closeFacilityModal()">
                            <span>Book Facility</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- All Facilities Modal -->
<div id="all-facilities-modal" class="fixed inset-0 z-[100] hidden">
    <div class="absolute inset-0 bg-[#514d32]/80 backdrop-blur-sm" id="all-facilities-backdrop"></div>
    <div class="absolute inset-0 overflow-y-auto">
        <div class="min-h-full flex items-start justify-center p-4 md:p-8">
            <div class="relative bg-white w-full max-w-4xl my-8 shadow-2xl animate-modal-in">
                <button type="button"
                        id="all-facilities-close"
                        class="absolute top-6 right-6 z-10 w-10 h-10 flex items-center justify-center text-[#514d32] hover:text-[#b5a191] transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <div class="p-8 md:p-12">
                    <h3 class="font-serif text-3xl md:text-4xl text-[#514d32] font-light mb-8">All Facilities</h3>

                    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
                        <!-- All Facility Items -->
                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('restaurant')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">24-Hour Restaurant</h4>
                            <p class="text-gray-500 text-sm">Breakfast, lunch & dinner</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('wellness')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Gym & Wellness</h4>
                            <p class="text-gray-500 text-sm">Professional equipment</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('coworking')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Co-Working Space</h4>
                            <p class="text-gray-500 text-sm">High-speed internet</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('spa')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Spa & Massage</h4>
                            <p class="text-gray-500 text-sm">Relaxation & wellness</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('pool')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Swimming Pools</h4>
                            <p class="text-gray-500 text-sm">Public pools & sunbeds</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group cursor-pointer" onclick="openFacilityModal('kids')">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Kids' Cinema</h4>
                            <p class="text-gray-500 text-sm">Family entertainment</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">24-Hour Security</h4>
                            <p class="text-gray-500 text-sm">Safe & secure</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Housekeeping</h4>
                            <p class="text-gray-500 text-sm">Maintenance & laundry</p>
                        </div>

                        <div class="text-center p-6 border border-gray-100 hover:border-[#b5a191] transition-colors group">
                            <div class="w-14 h-14 mx-auto mb-4 flex items-center justify-center border border-[#b5a191]/50 group-hover:bg-[#b5a191]/10 transition-colors">
                                <svg class="w-6 h-6 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                </svg>
                            </div>
                            <h4 class="text-[#514d32] font-medium mb-1">Sauna & Steam</h4>
                            <p class="text-gray-500 text-sm">With afternoon tea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facility Modal JavaScript -->
<script>
// Facility Data
const facilityData = {
    restaurant: {
        title: 'Eden Restaurant',
        description: 'Experience exceptional dining at Terra Eden\'s signature restaurant. Our culinary team crafts dishes using locally sourced and premium ingredients, harmoniously combining fresh flavors with the complexity of culinary mastery.',
        image: '<?php echo esc_url(get_theme_mod("facility_restaurant_image", home_url() . "/wp-content/uploads/2025/09/facility-restaurant.webp")); ?>',
        hours: '06:00 - 22:00',
        type: 'All-Day Dining',
        capacity: '80 guests',
        dress: 'Smart Casual'
    },
    wellness: {
        title: 'Wellness Center',
        description: 'A state-of-the-art fitness facility equipped with professional gym equipment, dedicated yoga space, and personal training services. Designed for residents who prioritize health and wellness.',
        image: '<?php echo esc_url(get_theme_mod("facility_wellness_image", home_url() . "/wp-content/uploads/2025/09/facility-wellness.webp")); ?>',
        hours: '24 Hours',
        type: 'Fitness & Yoga',
        capacity: '30 guests',
        dress: 'Athletic Wear'
    },
    coworking: {
        title: 'Co-Working Hub',
        description: 'A modern workspace designed for digital nomads and remote professionals. Features high-speed internet, private meeting rooms, and comfortable working stations with tropical garden views.',
        image: '<?php echo esc_url(get_theme_mod("facility_coworking_image", home_url() . "/wp-content/uploads/2025/09/facility-coworking.webp")); ?>',
        hours: '24 Hours',
        type: 'Business Center',
        capacity: '40 guests',
        dress: 'Casual'
    },
    spa: {
        title: 'Spa & Massage',
        description: 'Indulge in rejuvenating treatments at our tranquil spa sanctuary. From traditional Balinese massage to modern wellness therapies, our skilled therapists deliver ultimate relaxation.',
        image: '<?php echo esc_url(get_theme_mod("facility_spa_image", home_url() . "/wp-content/uploads/2025/09/facility-spa.webp")); ?>',
        hours: '09:00 - 21:00',
        type: 'Wellness & Beauty',
        capacity: '20 guests',
        dress: 'Provided Robes'
    },
    pool: {
        title: 'Swimming Pool',
        description: 'Relax by our stunning infinity pool surrounded by lush tropical gardens. Featuring comfortable sun loungers, poolside service, and dedicated areas for both adults and families.',
        image: '<?php echo esc_url(get_theme_mod("facility_pool_image", home_url() . "/wp-content/uploads/2025/09/facility-pool.webp")); ?>',
        hours: '06:00 - 22:00',
        type: 'Recreation',
        capacity: '100 guests',
        dress: 'Swimwear'
    },
    kids: {
        title: 'Kids & Family Area',
        description: 'A dedicated space for families featuring a waterfall play area, children\'s playground, kids\' cinema, and supervised activities. Perfect for keeping young guests entertained.',
        image: '<?php echo esc_url(get_theme_mod("facility_kids_image", home_url() . "/wp-content/uploads/2025/09/facility-kids.webp")); ?>',
        hours: '08:00 - 20:00',
        type: 'Family Entertainment',
        capacity: '50 guests',
        dress: 'Casual'
    }
};

// Open Facility Modal
function openFacilityModal(facilityKey) {
    const modal = document.getElementById('facility-modal');
    const data = facilityData[facilityKey];

    if (!data) return;

    // Populate modal
    document.getElementById('modal-facility-image').src = data.image;
    document.getElementById('modal-facility-image').alt = data.title;
    document.getElementById('modal-facility-title').textContent = data.title;
    document.getElementById('modal-facility-description').textContent = data.description;
    document.getElementById('modal-hours').textContent = data.hours;
    document.getElementById('modal-type').textContent = data.type;
    document.getElementById('modal-capacity').textContent = data.capacity;
    document.getElementById('modal-dress').textContent = data.dress;

    // Show modal
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';

    // Close all facilities modal if open
    document.getElementById('all-facilities-modal').classList.add('hidden');
}

// Close Facility Modal
function closeFacilityModal() {
    const modal = document.getElementById('facility-modal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', function() {
    // Facility item click handlers
    const facilityItems = document.querySelectorAll('.facility-item');
    const featuredImage = document.getElementById('facility-featured-image');

    facilityItems.forEach(item => {
        // Hover effect - change featured image
        item.addEventListener('mouseenter', function() {
            const imageUrl = this.getAttribute('data-image');
            if (imageUrl && featuredImage) {
                featuredImage.style.opacity = '0';
                setTimeout(() => {
                    featuredImage.src = imageUrl;
                    featuredImage.style.opacity = '1';
                }, 250);
            }
        });

        // Click - open modal
        item.addEventListener('click', function() {
            const facility = this.getAttribute('data-facility');
            openFacilityModal(facility);
        });
    });

    // Modal close handlers
    document.getElementById('facility-modal-close').addEventListener('click', closeFacilityModal);
    document.getElementById('facility-modal-backdrop').addEventListener('click', closeFacilityModal);

    // Show All Facilities
    document.getElementById('show-all-facilities').addEventListener('click', function() {
        document.getElementById('all-facilities-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    // Close All Facilities Modal
    document.getElementById('all-facilities-close').addEventListener('click', function() {
        document.getElementById('all-facilities-modal').classList.add('hidden');
        document.body.style.overflow = '';
    });

    document.getElementById('all-facilities-backdrop').addEventListener('click', function() {
        document.getElementById('all-facilities-modal').classList.add('hidden');
        document.body.style.overflow = '';
    });

    // ESC key to close modals
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeFacilityModal();
            document.getElementById('all-facilities-modal').classList.add('hidden');
            document.body.style.overflow = '';
        }
    });
});
</script>

<style>
/* Modal Animation */
@keyframes modal-in {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-modal-in {
    animation: modal-in 0.3s ease-out forwards;
}

/* Smooth image transition */
#facility-featured-image {
    transition: opacity 0.25s ease-in-out;
}
</style>

<!-- Eco-Luxury Design Section -->
<section class="py-24 md:py-32 bg-[#eedfcc]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left: Content -->
            <div>
                <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">Design Philosophy</p>
                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light leading-tight mb-6">
                    Eco-Luxury<br><span class="italic">Tropical Design</span>
                </h2>
                <div class="w-16 h-px bg-[#b5a191] mb-8"></div>
                <p class="text-gray-600 text-lg leading-relaxed mb-8">
                    Each villa at Terra Eden Bali is designed with a natural tropical living concept, emphasizing harmony between architecture and nature.
                </p>

                <!-- Design Features -->
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#514d32]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">Premium Natural Wood</h4>
                            <p class="text-gray-500 text-sm">Teak, mahogany, and puspa wood materials</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#514d32]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">Natural Climate Control</h4>
                            <p class="text-gray-500 text-sm">Cooler and more breathable living spaces</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#514d32]">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#514d32] font-medium mb-1">Preserved Green Environment</h4>
                            <p class="text-gray-500 text-sm">Master plan preserves existing mature trees</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image Grid -->
            <div class="grid grid-cols-2 gap-4">
                <div class="aspect-[3/4] overflow-hidden">
                    <img src="<?php echo esc_url(get_theme_mod('eco_design_image_1', home_url() . '/wp-content/uploads/2025/09/eco-design-1.webp')); ?>"
                         alt="Eco Luxury Design"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                </div>
                <div class="aspect-[3/4] overflow-hidden mt-8">
                    <img src="<?php echo esc_url(get_theme_mod('eco_design_image_2', home_url() . '/wp-content/uploads/2025/09/eco-design-2.webp')); ?>"
                         alt="Natural Wood Interior"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
                         loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investment Returns Section -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 md:mb-20">
            <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">Investment Potential</p>
            <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light">
                High ROI & <span class="italic">Passive Income</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <!-- Benefit 1 -->
            <div class="text-center p-8 border border-gray-100 hover:border-[#b5a191] transition-colors">
                <p class="font-serif text-5xl md:text-6xl text-[#514d32] mb-4">70%</p>
                <h4 class="text-[#514d32] font-medium mb-2">Potential ROI Per Year</h4>
                <p class="text-gray-500 text-sm">Depending on unit type and rental strategy</p>
            </div>

            <!-- Benefit 2 -->
            <div class="text-center p-8 border border-gray-100 hover:border-[#b5a191] transition-colors">
                <p class="font-serif text-5xl md:text-6xl text-[#514d32] mb-4">100%</p>
                <h4 class="text-[#514d32] font-medium mb-2">Hassle-Free Management</h4>
                <p class="text-gray-500 text-sm">Professional team handles everything</p>
            </div>

            <!-- Benefit 3 -->
            <div class="text-center p-8 border border-gray-100 hover:border-[#b5a191] transition-colors">
                <p class="font-serif text-5xl md:text-6xl text-[#514d32] mb-4">365</p>
                <h4 class="text-[#514d32] font-medium mb-2">Days Tourism Demand</h4>
                <p class="text-gray-500 text-sm">Nusa Dua's year-round stable occupancy</p>
            </div>
        </div>

        <!-- Management Services -->
        <div class="bg-[#eedfcc] p-8 md:p-12">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="font-serif text-2xl md:text-3xl text-[#514d32] font-light mb-6">
                        Full Property Management
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Your villa becomes an income-generating asset that works for you. Our professional team handles all operational aspects:
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Guest services & hospitality</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Maintenance & housekeeping</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Marketing & booking management</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-600">
                            <svg class="w-5 h-5 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Daily operations & reporting</span>
                        </li>
                    </ul>
                </div>
                <div class="text-center md:text-left">
                    <p class="text-[#b5a191] text-sm uppercase tracking-[0.2em] mb-2">Starting From</p>
                    <p class="font-serif text-4xl md:text-5xl text-[#514d32] mb-4">IDR 500M</p>
                    <p class="text-gray-500 mb-6">Competitive entry price with fast payback period</p>
                    <a href="#contact"
                       class="inline-flex items-center gap-3 bg-[#514d32] hover:bg-[#3d3a25] text-white px-8 py-4 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500">
                        <span>Get Investment Details</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nearby Attractions -->
<section class="py-24 md:py-32 bg-[#514d32]">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 md:mb-20">
            <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">Lifestyle & Attractions</p>
            <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-white font-light">
                Minutes from <span class="italic">Paradise</span>
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Attraction Cards -->
            <div class="group relative aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_theme_mod('attraction_pandawa_image', home_url() . '/wp-content/uploads/2025/09/pandawa-beach.webp')); ?>"
                     alt="Pandawa Beach"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32] via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h4 class="font-serif text-xl text-white mb-1">Pandawa Beach</h4>
                    <p class="text-white/60 text-sm">Dramatic cliffs & pristine white sand</p>
                </div>
            </div>

            <div class="group relative aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_theme_mod('attraction_melasti_image', home_url() . '/wp-content/uploads/2025/09/melasti-beach.webp')); ?>"
                     alt="Melasti Beach"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32] via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h4 class="font-serif text-xl text-white mb-1">Melasti Beach</h4>
                    <p class="text-white/60 text-sm">Crystal-clear waters & breathtaking views</p>
                </div>
            </div>

            <div class="group relative aspect-[4/3] overflow-hidden">
                <img src="<?php echo esc_url(get_theme_mod('attraction_golf_image', home_url() . '/wp-content/uploads/2025/09/pandawa-golf.webp')); ?>"
                     alt="Pandawa Golf"
                     class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-[#514d32] via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h4 class="font-serif text-xl text-white mb-1">Pandawa Golf</h4>
                    <p class="text-white/60 text-sm">International-standard cliffside course</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <p class="text-white/60 text-sm">
                Also nearby: Royal Horse Pandawa • Puja Mandala • International Schools • Hospitals • Shopping Centers
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Terra Eden -->
<section class="py-24 md:py-32 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16 md:mb-20">
            <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-4">The Terra Eden Promise</p>
            <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-[#514d32] font-light">
                Why <span class="italic">Choose Us</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-12 md:gap-16">
            <!-- Feature 1 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center border border-[#b5a191] group-hover:bg-[#514d32] group-hover:border-[#514d32] transition-all duration-500">
                    <svg class="w-8 h-8 text-[#b5a191] group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl md:text-2xl text-[#514d32] mb-4">Prime Nusa Dua Location</h3>
                <p class="text-gray-600 leading-relaxed">
                    Surrounded by 5-star luxury resorts in Bali's most prestigious and secure area.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center border border-[#b5a191] group-hover:bg-[#514d32] group-hover:border-[#514d32] transition-all duration-500">
                    <svg class="w-8 h-8 text-[#b5a191] group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl md:text-2xl text-[#514d32] mb-4">Strong ROI Potential</h3>
                <p class="text-gray-600 leading-relaxed">
                    Up to 70% annual returns with stable rental demand and property appreciation.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="text-center group">
                <div class="w-20 h-20 mx-auto mb-6 flex items-center justify-center border border-[#b5a191] group-hover:bg-[#514d32] group-hover:border-[#514d32] transition-all duration-500">
                    <svg class="w-8 h-8 text-[#b5a191] group-hover:text-white transition-colors duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="font-serif text-xl md:text-2xl text-[#514d32] mb-4">Fully Managed</h3>
                <p class="text-gray-600 leading-relaxed">
                    Professional team handles all operations for true passive income investment.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section id="contact" class="relative py-32 md:py-40 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url(get_theme_mod('cta_bg_image', home_url() . '/wp-content/uploads/2025/09/terra-eden-cta.webp')); ?>"
             alt="Terra Eden Bali"
             class="w-full h-full object-cover"
             loading="lazy">
    </div>
    <div class="absolute inset-0 z-10 bg-[#514d32]/85"></div>

    <!-- Content -->
    <div class="relative z-20 max-w-4xl mx-auto px-6 text-center">
        <p class="text-[#b5a191] text-sm uppercase tracking-[0.3em] mb-6">Begin Your Investment Journey</p>
        <h2 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white font-light leading-tight mb-6">
            Fresh Air • Peaceful Surroundings<br><span class="italic">Modern Comfort</span>
        </h2>
        <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed">
            Terra Eden Bali is not just a property. It is a luxury wooden villa investment offering a rare combination of lifestyle, security, and long-term returns in one of Bali's most exclusive destinations.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <a href="https://wa.me/6281234567890?text=Hello,%20I%20am%20interested%20in%20Terra%20Eden%20Bali%20villa%20investment"
               target="_blank"
               rel="noopener"
               class="inline-flex items-center gap-3 bg-[#b5a191] hover:bg-[#a08d7a] text-[#514d32] px-10 py-5 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                <span>Request Brochure</span>
            </a>
            <a href="#villas"
               class="inline-flex items-center gap-3 bg-transparent border border-white/50 hover:border-white text-white px-10 py-5 text-sm uppercase tracking-[0.15em] font-medium transition-all duration-500 hover:bg-white/10">
                <span>View Villa Types</span>
            </a>
        </div>

        <!-- Contact Info -->
        <div class="flex flex-wrap justify-center gap-8 text-white/60 text-sm">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                </svg>
                <span>Jalan Palapa, Nusa Dua, Bali</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#b5a191]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span>info@terraedenbali.com</span>
            </div>
        </div>
    </div>
</section>

<!-- Custom Styles -->
<style>
/* Custom Font Import - Serif for Luxury Feel */
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Jost:wght@300;400;500&display=swap');

/* Font Family */
.font-serif {
    font-family: 'Cormorant Garamond', Georgia, serif;
}

body {
    font-family: 'Jost', -apple-system, BlinkMacSystemFont, sans-serif;
}

/* Smooth Scroll */
html {
    scroll-behavior: smooth;
}

/* Animations */
@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes bounce-slow {
    0%, 100% {
        transform: translateY(0) translateX(-50%);
    }
    50% {
        transform: translateY(-10px) translateX(-50%);
    }
}

.animate-fade-in-up {
    animation: fade-in-up 1s ease-out forwards;
}

.animate-bounce-slow {
    animation: bounce-slow 2s ease-in-out infinite;
}

.animation-delay-200 {
    animation-delay: 0.2s;
    opacity: 0;
}

.animation-delay-400 {
    animation-delay: 0.4s;
    opacity: 0;
}

.animation-delay-600 {
    animation-delay: 0.6s;
    opacity: 0;
}

/* Line Clamp */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Details/Summary Reset */
details summary::-webkit-details-marker {
    display: none;
}

/* Selection Color */
::selection {
    background-color: #b5a191;
    color: #514d32;
}

/* Smooth Image Loading */
img {
    transition: opacity 0.3s ease;
}

/* Focus States */
a:focus-visible, button:focus-visible {
    outline: 2px solid #b5a191;
    outline-offset: 4px;
}
</style>

<?php get_template_part('template-parts/footer-kempinski'); ?>
