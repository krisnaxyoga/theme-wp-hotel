/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (() => {

eval("{// main.js\r\ndocument.addEventListener('DOMContentLoaded', () => {\r\n  /* ===== Mobile Menu Toggle ===== */\r\n  const btn  = document.getElementById('mobile-menu-button');\r\n  const menu = document.getElementById('mobile-menu');\r\n  const iconOpen  = document.getElementById('menu-icon');\r\n  const iconClose = document.getElementById('close-icon');\r\n\r\n  if (!btn || !menu) return; // early exit kalau tidak ada\r\n\r\n  const closeMenu = () => {\r\n    menu.classList.add('hidden');\r\n    iconOpen?.classList.remove('hidden');\r\n    iconClose?.classList.add('hidden');\r\n    menu.style.maxHeight = '';\r\n  };\r\n\r\n  const openMenu = () => {\r\n    menu.classList.remove('hidden');\r\n    iconOpen?.classList.add('hidden');\r\n    iconClose?.classList.remove('hidden');\r\n    menu.style.transition = 'max-height .3s ease-out';\r\n    menu.style.maxHeight  = menu.scrollHeight + 'px';\r\n  };\r\n\r\n  btn.addEventListener('click', () => {\r\n    menu.classList.contains('hidden') ? openMenu() : closeMenu();\r\n  });\r\n\r\n  /* Close saat klik link di dalam menu */\r\n  menu.querySelectorAll('a').forEach(link =>\r\n    link.addEventListener('click', closeMenu)\r\n  );\r\n\r\n  /* Close saat klik di luar */\r\n  document.addEventListener('click', e => {\r\n    if (!menu.contains(e.target) && !btn.contains(e.target)) closeMenu();\r\n  });\r\n\r\n  /* Reset saat resize ke desktop */\r\n  window.addEventListener('resize', () => {\r\n    if (window.innerWidth >= 768) closeMenu();\r\n  });\r\n\r\n/* ===== Smooth Scroll (offset header) ===== */\r\ndocument.querySelectorAll('a[href^=\"#\"]').forEach(anchor => {\r\n  anchor.addEventListener('click', function (e) {\r\n    const href = this.getAttribute('href');\r\n    \r\n    // ✅ Validasi href tidak kosong dan bukan hanya '#'\r\n    if (!href || href === '#' || href.length <= 1) return;\r\n    \r\n    const target = document.querySelector(href);\r\n    if (!target) return;\r\n    \r\n    e.preventDefault();\r\n    \r\n    // ✅ Validasi header ada sebelum mengakses offsetHeight\r\n    const header = document.querySelector('header');\r\n    const offset = header ? header.offsetHeight + 20 : 20;\r\n    \r\n    window.scrollTo({ \r\n      top: target.offsetTop - offset, \r\n      behavior: 'smooth' \r\n    });\r\n  });\r\n});\r\n\r\n  /* ===== Touch Feedback ===== */\r\n  document.querySelectorAll('a, button').forEach(el => {\r\n    el.addEventListener('touchstart', () => el.style.transform = 'scale(.98)');\r\n    el.addEventListener('touchend',   () => el.style.transform = '');\r\n  });\r\n\r\n  /* ===== Lazy-Load Images (gunakan data-src) ===== */\r\n  if ('IntersectionObserver' in window) {\r\n    const imgObs = new IntersectionObserver((entries, observer) => {\r\n      entries.forEach(entry => {\r\n        if (entry.isIntersecting) {\r\n          const img = entry.target;\r\n          img.src = img.dataset.src;\r\n          img.classList.remove('lazy');\r\n          observer.unobserve(img);\r\n        }\r\n      });\r\n    });\r\n    document.querySelectorAll('img[data-src]').forEach(img => imgObs.observe(img));\r\n  }\r\n});\r\n\r\ndocument.addEventListener(\"DOMContentLoaded\", function () {\r\n  const toggles = document.querySelectorAll(\".faq-toggle\");\r\n\r\n  toggles.forEach(btn => {\r\n    btn.addEventListener(\"click\", () => {\r\n      const content = btn.nextElementSibling;\r\n      const icon = btn.querySelector(\"svg\");\r\n\r\n      // Tutup semua dropdown lain (opsional → accordion mode)\r\n      document.querySelectorAll(\".faq-content\").forEach(el => {\r\n        if (el !== content) {\r\n          el.style.maxHeight = null;\r\n          const otherIcon = el.previousElementSibling.querySelector(\"svg\");\r\n          if (otherIcon) otherIcon.classList.remove(\"rotate-180\");\r\n        }\r\n      });\r\n\r\n      // Toggle dropdown\r\n      if (content.style.maxHeight) {\r\n        content.style.maxHeight = null;\r\n        icon?.classList.remove(\"rotate-180\");\r\n      } else {\r\n        content.style.maxHeight = content.scrollHeight + \"px\";\r\n        icon?.classList.add(\"rotate-180\");\r\n      }\r\n    });\r\n  });\r\n});\r\n\n\n//# sourceURL=webpack://camping/./src/js/main.js?\n}");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/main.js"]();
/******/ 	
/******/ })()
;