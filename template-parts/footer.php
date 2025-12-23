<!-- Modern Footer with Logo Colors -->
<footer class="bg-gradient-to-b from-[#1e3a5f] to-[#152b44] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-10 md:mb-12">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-5">
                    <img src="<?php echo esc_url(get_theme_mod('footer_logo', home_url() . '/wp-content/uploads/2025/09/logo-nusapenida-camping.webp')); ?>"
                        alt="<?php echo esc_attr(get_theme_mod('footer_logo_alt', 'Logo PenidaTripGo')); ?>"
                        class="w-14 h-14 object-contain" loading="lazy">
                    <span class="text-2xl md:text-3xl font-extrabold"><?php echo esc_html(get_theme_mod('footer_site_name', 'PenidaTripGo')); ?></span>
                </div>
                <p class="text-white/80 text-base mb-6 leading-relaxed max-w-md">
                    <?php echo esc_html(get_theme_mod('footer_description', 'Your trusted local guide for authentic Nusa Penida adventures. Explore hidden gems and create unforgettable memories.')); ?>
                </p>
                <div class="flex gap-3">
                    <a href="<?php echo esc_url(ptg_wa_link('Hi, PenidaTripGo! I want to know more about your tours')); ?>" target="_blank" rel="noopener" class="group w-12 h-12 bg-green-600 hover:bg-green-500 rounded-xl flex items-center justify-center transition-all hover:scale-110 shadow-lg" aria-label="WhatsApp">
                        <i class="ti ti-brand-whatsapp text-2xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener" class="group w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 rounded-xl flex items-center justify-center transition-all hover:scale-110 shadow-lg" aria-label="Instagram">
                        <i class="ti ti-brand-instagram text-2xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener" class="group w-12 h-12 bg-blue-600 hover:bg-blue-500 rounded-xl flex items-center justify-center transition-all hover:scale-110 shadow-lg" aria-label="Facebook">
                        <i class="ti ti-brand-facebook text-2xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg md:text-xl font-extrabold mb-5 text-[#f59e42]">Quick Links</h3>
                <ul class="space-y-3">
                    <li>
                        <a href="#tours" class="group flex items-center gap-2 text-white/80 hover:text-[#f59e42] transition-colors">
                            <i class="ti ti-chevron-right text-[#4db8b8] group-hover:translate-x-1 transition-transform"></i>
                            <span>Our Tours</span>
                        </a>
                    </li>
                    <li>
                        <a href="#faq" class="group flex items-center gap-2 text-white/80 hover:text-[#f59e42] transition-colors">
                            <i class="ti ti-chevron-right text-[#4db8b8] group-hover:translate-x-1 transition-transform"></i>
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="group flex items-center gap-2 text-white/80 hover:text-[#f59e42] transition-colors">
                            <i class="ti ti-chevron-right text-[#4db8b8] group-hover:translate-x-1 transition-transform"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="group flex items-center gap-2 text-white/80 hover:text-[#f59e42] transition-colors">
                            <i class="ti ti-chevron-right text-[#4db8b8] group-hover:translate-x-1 transition-transform"></i>
                            <span>About Us</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg md:text-xl font-extrabold mb-5 text-[#f59e42]">Contact Us</h3>
                <ul class="space-y-4 text-white/80">
                    <li class="flex items-start gap-3">
                        <i class="ti ti-map-pin text-[#4db8b8] text-2xl mt-0.5 flex-shrink-0"></i>
                        <span class="leading-relaxed">Nusa Penida, Bali<br>Indonesia</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ti ti-phone text-[#4db8b8] text-2xl flex-shrink-0"></i>
                        <a href="tel:<?php echo esc_attr(get_theme_mod('whatsapp_number', '+6285121102295')); ?>" class="hover:text-[#f59e42] transition-colors">
                            <?php echo esc_html(get_theme_mod('whatsapp_number', '+62 851-2110-2295')); ?>
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <i class="ti ti-mail text-[#4db8b8] text-2xl flex-shrink-0"></i>
                        <a href="mailto:info@penidatripgo.com" class="hover:text-[#f59e42] transition-colors break-all">
                            info@penidatripgo.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-white/10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/70">
                <p class="text-center md:text-left">
                    &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('footer_site_name', 'PenidaTripGo')); ?>. All rights reserved.
                </p>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-[#f59e42] transition-colors">Privacy Policy</a>
                    <a href="<?php echo esc_url(home_url('/terms')); ?>" class="hover:text-[#f59e42] transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Back to Top Button -->
<button id="back-to-top"
   onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
   aria-label="Back to Top"
   class="fixed bottom-6 left-6 z-50 flex items-center justify-center w-14 h-14 md:w-16 md:h-16
          bg-gradient-to-br from-[#4db8b8] to-[#3a9898] text-white rounded-full shadow-2xl
          hover:from-[#3a9898] hover:to-[#4db8b8] hover:scale-110 active:scale-95
          transition-all duration-300 ease-in-out opacity-0 pointer-events-none
          border-4 border-white">
  <i class="ti ti-arrow-up text-2xl md:text-3xl"></i>
</button>

<!-- Floating WhatsApp Button -->
<a href="<?php echo esc_url(ptg_wa_link('Hi, PenidaTripGo! I\'m interested in your tours')); ?>"
   target="_blank"
   rel="noopener"
   aria-label="Chat with us on WhatsApp"
   class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-16 h-16 md:w-[70px] md:h-[70px]
          bg-gradient-to-br from-green-500 to-green-600 text-white rounded-full shadow-2xl
          hover:from-green-600 hover:to-green-700 hover:scale-110 active:scale-95
          transition-all duration-300 ease-in-out animate-bounce hover:animate-none
          border-4 border-white">
  <!-- WhatsApp Icon -->
  <i class="ti ti-brand-whatsapp text-3xl md:text-4xl"></i>
</a>

<!-- Back to Top Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('back-to-top');

    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            backToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
        } else {
            backToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            backToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
        }
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
