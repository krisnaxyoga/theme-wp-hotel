// main.js
document.addEventListener('DOMContentLoaded', () => {
  /* ===== Mobile Menu Toggle ===== */
  const btn  = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');
  const iconOpen  = document.getElementById('menu-icon');
  const iconClose = document.getElementById('close-icon');

  if (!btn || !menu) return; // early exit kalau tidak ada

  const closeMenu = () => {
    menu.classList.add('hidden');
    iconOpen?.classList.remove('hidden');
    iconClose?.classList.add('hidden');
    menu.style.maxHeight = '';
  };

  const openMenu = () => {
    menu.classList.remove('hidden');
    iconOpen?.classList.add('hidden');
    iconClose?.classList.remove('hidden');
    menu.style.transition = 'max-height .3s ease-out';
    menu.style.maxHeight  = menu.scrollHeight + 'px';
  };

  btn.addEventListener('click', () => {
    menu.classList.contains('hidden') ? openMenu() : closeMenu();
  });

  /* Close saat klik link di dalam menu */
  menu.querySelectorAll('a').forEach(link =>
    link.addEventListener('click', closeMenu)
  );

  /* Close saat klik di luar */
  document.addEventListener('click', e => {
    if (!menu.contains(e.target) && !btn.contains(e.target)) closeMenu();
  });

  /* Reset saat resize ke desktop */
  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) closeMenu();
  });

/* ===== Smooth Scroll (offset header) ===== */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const href = this.getAttribute('href');
    
    // ✅ Validasi href tidak kosong dan bukan hanya '#'
    if (!href || href === '#' || href.length <= 1) return;
    
    const target = document.querySelector(href);
    if (!target) return;
    
    e.preventDefault();
    
    // ✅ Validasi header ada sebelum mengakses offsetHeight
    const header = document.querySelector('header');
    const offset = header ? header.offsetHeight + 20 : 20;
    
    window.scrollTo({ 
      top: target.offsetTop - offset, 
      behavior: 'smooth' 
    });
  });
});

  /* ===== Touch Feedback ===== */
  document.querySelectorAll('a, button').forEach(el => {
    el.addEventListener('touchstart', () => el.style.transform = 'scale(.98)');
    el.addEventListener('touchend',   () => el.style.transform = '');
  });

  /* ===== Lazy-Load Images (gunakan data-src) ===== */
  if ('IntersectionObserver' in window) {
    const imgObs = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.classList.remove('lazy');
          observer.unobserve(img);
        }
      });
    });
    document.querySelectorAll('img[data-src]').forEach(img => imgObs.observe(img));
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const toggles = document.querySelectorAll(".faq-toggle");

  toggles.forEach(btn => {
    btn.addEventListener("click", () => {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector("svg");

      // Tutup semua dropdown lain (opsional → accordion mode)
      document.querySelectorAll(".faq-content").forEach(el => {
        if (el !== content) {
          el.style.maxHeight = null;
          const otherIcon = el.previousElementSibling.querySelector("svg");
          if (otherIcon) otherIcon.classList.remove("rotate-180");
        }
      });

      // Toggle dropdown
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
        icon?.classList.remove("rotate-180");
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon?.classList.add("rotate-180");
      }
    });
  });
});
