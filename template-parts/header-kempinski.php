<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="ymeyZt7WeGe1f2KanzDCja2KdEsVzCJ8BkmtdmN_Kig" />
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5KHC9S6L');</script>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CNBM6ZD38C"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-CNBM6ZD38C');
    </script>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TravelAgency",
      "name": "PenidaTripGo",
      "image": "<?php echo esc_url(home_url()); ?>/wp-content/uploads/2025/09/logo-nusapenida-camping.webp",
      "description": "Exclusive private tours and experiences in Nusa Penida, curated by local experts.",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "500"
      }
    }
    </script>
</head>

<body <?php body_class('bg-white text-[#514d32] antialiased'); ?>>
    <?php wp_body_open(); ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KHC9S6L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Kempinski-Style Header - Transparent with Scroll Effect -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex items-center justify-between h-20 md:h-24">
                <!-- Logo -->
                <a class="flex items-center gap-3 group" href="<?php echo esc_url(home_url()); ?>">
                    <?php
                    $header_logo = get_theme_mod('header_logo', home_url() . '/wp-content/uploads/2025/09/terra-eden-logo.webp');
                    if ($header_logo):
                    ?>
                        <img src="<?php echo esc_url($header_logo); ?>"
                            alt="<?php echo esc_attr(get_theme_mod('header_logo_alt', 'Terra Eden Bali')); ?>"
                            class="w-12 h-12 md:w-14 md:h-14 object-contain"
                            loading="eager">
                    <?php endif; ?>
                    <div class="hidden sm:flex flex-col leading-tight">
                        <span class="text-lg md:text-xl font-medium tracking-wide header-text transition-colors duration-300"><?php echo esc_html(get_theme_mod('brand_name', 'Terra Eden')); ?></span>
                        <span class="text-xs uppercase tracking-[0.2em] header-subtext transition-colors duration-300"><?php echo esc_html(get_theme_mod('brand_tagline', 'Nusa Dua, Bali')); ?></span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <?php
                    if (has_nav_menu('primary')) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'items_wrap'     => '%3$s',
                            'walker'         => new Kempinski_Nav_Walker(),
                            'depth'          => 2,
                        ));
                    } else {
                        // Fallback menu jika belum ada menu yang diset
                        ?>
                        <a href="#experiences" class="header-link text-sm uppercase tracking-[0.15em] font-medium transition-colors duration-300 hover:text-[#b5a191]">Experiences</a>
                        <a href="#villa-types" class="header-link text-sm uppercase tracking-[0.15em] font-medium transition-colors duration-300 hover:text-[#b5a191]">Villa Types</a>
                        <a href="#facilities" class="header-link text-sm uppercase tracking-[0.15em] font-medium transition-colors duration-300 hover:text-[#b5a191]">Facilities</a>
                        <?php
                    }
                    ?>
                    <!-- CTA Button - Always visible -->
                    <a href="<?php echo esc_url(ptg_wa_link("Hello, I would like to inquire about Terra Eden villas")); ?>"
                       target="_blank"
                       rel="noopener"
                       class="inline-flex items-center gap-2 bg-[#b5a191] hover:bg-[#a08d7a] text-[#514d32] px-6 py-3 text-sm uppercase tracking-[0.1em] font-medium transition-all duration-300 rounded-full">
                        <span><?php echo esc_html(get_theme_mod('header_cta_text', 'Book Now')); ?></span>
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn"
                        class="md:hidden p-2 header-link transition-colors duration-300"
                        aria-label="Toggle Menu"
                        type="button">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#514d32] border-t border-white/10">
            <nav class="container mx-auto px-6 py-8 flex flex-col gap-6">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new Kempinski_Mobile_Nav_Walker(),
                        'depth'          => 2,
                    ));
                } else {
                    // Fallback menu jika belum ada menu yang diset
                    ?>
                    <a href="#experiences" class="text-white/80 hover:text-[#b5a191] text-sm uppercase tracking-[0.15em] font-medium transition-colors mobile-menu-link">Experiences</a>
                    <a href="#villa-types" class="text-white/80 hover:text-[#b5a191] text-sm uppercase tracking-[0.15em] font-medium transition-colors mobile-menu-link">Villa Types</a>
                    <a href="#facilities" class="text-white/80 hover:text-[#b5a191] text-sm uppercase tracking-[0.15em] font-medium transition-colors mobile-menu-link">Facilities</a>
                    <?php
                }
                ?>
                <!-- CTA Button - Always visible -->
                <a href="<?php echo esc_url(ptg_wa_link("Hello, I would like to inquire about Terra Eden villas")); ?>"
                   target="_blank"
                   rel="noopener"
                   class="inline-flex items-center justify-center gap-2 bg-[#b5a191] text-[#514d32] px-6 py-4 text-sm uppercase tracking-[0.1em] font-medium mt-4 mobile-menu-link rounded-full">
                    <span><?php echo esc_html(get_theme_mod('header_cta_text', 'Book Now')); ?></span>
                </a>
            </nav>
        </div>
    </header>

<style>
/* Header States */
#main-header {
    background: transparent;
}

#main-header.scrolled {
    background: rgba(81, 77, 50, 0.95);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
}

/* Header Text Colors - Initial (on hero) */
.header-text {
    color: white;
}

.header-subtext {
    color: rgba(181, 161, 145, 0.8);
}

.header-link {
    color: rgba(255, 255, 255, 0.8);
}

/* Header Text Colors - Scrolled */
#main-header.scrolled .header-text {
    color: white;
}

#main-header.scrolled .header-subtext {
    color: #b5a191;
}

#main-header.scrolled .header-link {
    color: rgba(255, 255, 255, 0.8);
}

/* Mobile menu animation */
#mobile-menu {
    animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    // Scroll effect for header
    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial state

    // Mobile menu toggle
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            if (!mobileMenu.classList.contains('hidden')) {
                document.body.style.overflow = 'hidden';
                header.classList.add('scrolled');
            } else {
                document.body.style.overflow = '';
                if (window.scrollY <= 50) {
                    header.classList.remove('scrolled');
                }
            }
        });

        // Close menu on link click (termasuk menu dinamis)
        mobileMenu.addEventListener('click', function(e) {
            // Don't close if clicking dropdown toggle
            if (e.target.closest('.mobile-dropdown-toggle')) {
                return;
            }
            if (e.target.closest('a')) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });

        // Mobile dropdown toggle
        const dropdownToggles = mobileMenu.querySelectorAll('.mobile-dropdown-toggle');
        dropdownToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const li = this.closest('li');
                const submenu = li.querySelector('.mobile-submenu');
                const icon = this.querySelector('svg');

                if (submenu) {
                    submenu.classList.toggle('hidden');
                    // Rotate arrow icon
                    if (submenu.classList.contains('hidden')) {
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        icon.style.transform = 'rotate(180deg)';
                    }
                }
            });
        });
    }
});
</script>
