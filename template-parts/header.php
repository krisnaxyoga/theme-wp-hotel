<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="ymeyZt7WeGe1f2KanzDCja2KdEsVzCJ8BkmtdmN_Kig" />
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
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
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Nusa Penida Camping Tent Rental",
  "image": "<?php echo esc_url(home_url()); ?>/wp-content/uploads/2025/09/tenda-camping-nusapenida.webp",
  "description": "Camping tent rental service in Nusa Penida with a selection of the best beach spots.",
  "brand": {
    "@type": "Organization",
    "name": "Nusa Penida Camping"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "120"
  },
  "review": {
    "@type": "Review",
    "author": {
      "@type": "Person",
      "name": "Traveler Feedback"
    },
    "datePublished": "2025-09-15",
    "reviewBody": "Comfortable tents, great locations, highly recommended for camping in Nusa Penida.",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5"
    }
  }
}
</script>

</head>

<body <?php body_class('bg-gray-50 text-gray-800 antialiased'); ?>>
    <?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KHC9S6L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>
// Define mobile menu toggle function FIRST before any HTML
window.toggleMobileMenu = function() {
    console.log('toggleMobileMenu called');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenu && menuIcon && closeIcon) {
        const isHidden = mobileMenu.classList.contains('hidden');
        console.log('Menu is hidden:', isHidden);

        // Toggle visibility
        if (isHidden) {
            mobileMenu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
        }
    } else {
        console.error('Mobile menu elements not found!', {mobileMenu, menuIcon, closeIcon});
    }
};
</script>

    <!-- Mobile Header with Logo Colors -->
    <header class="md:hidden sticky top-0 z-50 bg-white shadow-lg border-b-4 border-[#f59e42]">
        <div class="container mx-auto px-4 h-20 flex items-center justify-between">
            <!-- Logo -->
            <a class="flex items-center gap-2.5" href="<?php echo esc_url(home_url()); ?>">
                <?php
                $header_logo = get_theme_mod('header_logo', home_url() . '/wp-content/uploads/2025/09/logo-nusapenida-camping.webp');
                if ($header_logo):
                ?>
                    <img src="<?php echo esc_url($header_logo); ?>"
                        alt="<?php echo esc_attr(get_theme_mod('header_logo_alt', 'Logo PenidaTripGo')); ?>"
                        class="w-14 h-14 object-contain"
                        loading="lazy"
                        onerror="this.style.display='none'">
                <?php endif; ?>
                <div class="flex flex-col leading-tight">
                    <span class="text-xl font-extrabold text-[#1e3a5f]">PenidaTripGo</span>
                    <span class="text-xs text-[#4db8b8] font-semibold">Nusa Penida Tours</span>
                </div>
            </a>

            <!-- Right: Hamburger -->
            <div class="flex items-center space-x-3">
                <button id="mobile-menu-button"
                    onclick="toggleMobileMenu()"
                    class="p-3 rounded-xl bg-gradient-to-r from-[#f59e42] to-[#e88d2f] hover:from-[#e88d2f] hover:to-[#f59e42] text-white focus:outline-none focus:ring-2 focus:ring-[#f59e42] focus:ring-offset-2 transition-all shadow-lg"
                    aria-label="Toggle Mobile Menu"
                    type="button">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden px-4 pb-6 pt-4 bg-gradient-to-b from-white to-gray-50 border-t-2 border-[#4db8b8]/20 shadow-inner">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col space-y-2.5',
                    'depth'          => 1,
                ]);
            } else {
                // Fallback menu jika belum di-set
                echo '<nav class="flex flex-col space-y-2.5">';
                echo '<a href="#tours" class="flex items-center gap-3 px-5 py-3.5 rounded-xl bg-white hover:bg-gradient-to-r hover:from-[#f59e42] hover:to-[#e88d2f] text-[#1e3a5f] hover:text-white transition-all duration-300 border-2 border-gray-100 hover:border-[#f59e42] shadow-sm hover:shadow-lg font-bold"><i class="ti ti-compass text-xl"></i><span>Our Tours</span></a>';
                echo '<a href="#contact" class="flex items-center gap-3 px-5 py-3.5 rounded-xl bg-white hover:bg-gradient-to-r hover:from-[#f59e42] hover:to-[#e88d2f] text-[#1e3a5f] hover:text-white transition-all duration-300 border-2 border-gray-100 hover:border-[#f59e42] shadow-sm hover:shadow-lg font-bold"><i class="ti ti-phone text-xl"></i><span>Contact</span></a>';
                echo '<a href="' . esc_url(ptg_wa_link("Hi, PenidaTripGo! I'm interested in your tours")) . '" target="_blank" class="flex items-center gap-3 px-5 py-3.5 rounded-xl bg-gradient-to-r from-green-600 to-green-500 text-white transition-all duration-300 border-2 border-green-600 shadow-lg hover:shadow-xl font-bold hover:scale-105"><i class="ti ti-brand-whatsapp text-xl"></i><span>WhatsApp Us</span></a>';
                echo '</nav>';
            }
            ?>
        </div>
    </header>


    <!-- Desktop Header with Logo Colors -->
    <header class="hidden md:block sticky top-0 z-50 bg-white shadow-xl border-b-4 border-[#f59e42]">
        <div class="container mx-auto px-4 lg:px-6 flex items-center justify-between h-24">
            <!-- Logo -->
            <a class="flex items-center gap-3 group" href="<?php echo esc_url(home_url()); ?>">
                <?php
                $header_logo = get_theme_mod('header_logo', home_url() . '/wp-content/uploads/2025/09/logo-nusapenida-camping.webp');
                if ($header_logo):
                ?>
                    <img src="<?php echo esc_url($header_logo); ?>"
                        alt="<?php echo esc_attr(get_theme_mod('header_logo_alt', 'Logo PenidaTripGo')); ?>"
                        class="w-16 h-16 object-contain group-hover:scale-110 transition-transform"
                        loading="lazy"
                        onerror="this.style.display='none'">
                <?php endif; ?>
                <div class="flex flex-col leading-tight">
                    <span class="text-2xl font-extrabold text-[#1e3a5f] group-hover:text-[#f59e42] transition-colors">PenidaTripGo</span>
                    <span class="text-sm text-[#4db8b8] font-semibold">Nusa Penida Tours</span>
                </div>
            </a>

            <!-- Navigation -->
            <nav class="flex items-center space-x-2">
                <?php
                if (has_nav_menu('primary')) {
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'flex items-center space-x-2',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ]);
                } else {
                    // Fallback menu
                    echo '<div class="flex items-center space-x-2">';
                    echo '<a href="#tours" class="px-5 py-3 rounded-xl font-bold text-[#1e3a5f] hover:bg-gradient-to-r hover:from-[#f59e42] hover:to-[#e88d2f] hover:text-white transition-all duration-300 hover:shadow-lg hover:scale-105">Tours</a>';
                    echo '<a href="#contact" class="px-5 py-3 rounded-xl font-bold text-[#1e3a5f] hover:bg-gradient-to-r hover:from-[#f59e42] hover:to-[#e88d2f] hover:text-white transition-all duration-300 hover:shadow-lg hover:scale-105">Contact</a>';
                    echo '</div>';
                }
                ?>

                <!-- CTA Button -->
                <a href="<?php echo esc_url(ptg_wa_link("Hi, PenidaTripGo! I'm interested in your tours")); ?>"
                   target="_blank"
                   rel="noopener"
                   class="ml-4 flex items-center gap-2 bg-gradient-to-r from-[#f59e42] to-[#e88d2f] hover:from-[#e88d2f] hover:to-[#f59e42] text-white px-6 py-3.5 rounded-xl font-extrabold shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-[#f59e42]">
                    <i class="ti ti-brand-whatsapp text-2xl"></i>
                    <span>WhatsApp Us</span>
                </a>
            </nav>
        </div>
    </header>

<style>
/* Enhanced Menu Styles */
.menu-item a {
    position: relative;
    display: inline-block;
    padding: 0.75rem 1.25rem;
    border-radius: 0.75rem;
    font-weight: 700;
    color: #1e3a5f;
    transition: all 0.3s ease;
}

.menu-item a:hover {
    background: linear-gradient(to right, #f59e42, #e88d2f);
    color: white;
    transform: scale(1.05);
    box-shadow: 0 10px 15px -3px rgba(245, 158, 66, 0.3);
}

/* Desktop menu hover effect */
@media (min-width: 768px) {
    .menu-item a::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        width: 0;
        height: 3px;
        background: linear-gradient(to right, #f59e42, #4db8b8);
        transform: translateX(-50%);
        transition: width 0.3s ease;
        border-radius: 2px;
    }

    .menu-item a:hover::after,
    .menu-item.current-menu-item a::after {
        width: 80%;
    }

    .menu-item.current-menu-item a {
        background: linear-gradient(to right, #f59e42, #e88d2f);
        color: white;
    }
}

/* Mobile menu styles */
@media (max-width: 767px) {
    .menu-item {
        margin-bottom: 0.625rem;
    }

    .menu-item a {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1rem 1.25rem;
        background: white;
        border: 2px solid #f3f4f6;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
    }

    .menu-item a::before {
        content: '→';
        font-size: 1.25rem;
        color: #4db8b8;
        font-weight: 700;
    }

    .menu-item a:hover {
        border-color: #f59e42;
        box-shadow: 0 10px 15px -3px rgba(245, 158, 66, 0.2);
    }
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
// Mobile Menu Toggle - Enhanced
document.addEventListener('DOMContentLoaded', function() {
    console.log('Mobile menu script loaded');

    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    console.log('Menu button:', menuButton);
    console.log('Mobile menu:', mobileMenu);

    if (menuButton && mobileMenu && menuIcon && closeIcon) {
        menuButton.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Menu button clicked');

            // Toggle menu visibility
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Toggle body scroll
            if (!mobileMenu.classList.contains('hidden')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!menuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            }
        });

        // Close menu when clicking menu links
        const menuLinks = mobileMenu.querySelectorAll('a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            });
        });
    } else {
        console.error('Mobile menu elements not found');
    }
});

// Fallback: Add onclick handler directly to button
window.toggleMobileMenu = function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenu && menuIcon && closeIcon) {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    }
};
</script>
