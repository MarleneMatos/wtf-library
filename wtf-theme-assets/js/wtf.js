"use strict";

/* global bootstrap: false */

(function () {
  'use strict';

  // Tooltip and popover demos
  document.querySelectorAll('.tooltip-demo').forEach(function (tooltip) {
    new bootstrap.Tooltip(tooltip, {
      selector: '[data-bs-toggle="tooltip"]'
    });
  });
  document.querySelectorAll('[data-bs-toggle="popover"]').forEach(function (popover) {
    new bootstrap.Popover(popover);
  });
  document.querySelectorAll('.toast').forEach(function (toastNode) {
    var toast = new bootstrap.Toast(toastNode, {
      autohide: false
    });
    toast.show();
  });

  // Disable empty links and submit buttons
  document.querySelectorAll('[href="#"], [type="submit"]').forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
    });
  });
  function setActiveItem() {
    var hash = window.location.hash;
    if (hash === '') {
      return;
    }
    var link = document.querySelector(".bd-aside a[href=\"".concat(hash, "\"]"));
    if (!link) {
      return;
    }
    var active = document.querySelector('.bd-aside .active');
    var parent = link.parentNode.parentNode.previousElementSibling;
    link.classList.add('active');
    if (parent.classList.contains('collapsed')) {
      parent.click();
    }
    if (!active) {
      return;
    }
    var expanded = active.parentNode.parentNode.previousElementSibling;
    active.classList.remove('active');
    if (expanded && parent !== expanded) {
      expanded.click();
    }
  }
  setActiveItem();
  window.addEventListener('hashchange', setActiveItem);
})();
"use strict";

/*!
 * WTF Theme Engine
 */

(function () {
  'use strict';

  /* ---------------------------------------
  STORAGE
  --------------------------------------- */
  var getStoredTheme = function getStoredTheme() {
    return localStorage.getItem('theme');
  };
  var setStoredTheme = function setStoredTheme(theme) {
    return localStorage.setItem('theme', theme);
  };
  var getStoredColours = function getStoredColours() {
    return {
      primary: localStorage.getItem('wtf-primary'),
      secondary: localStorage.getItem('wtf-secondary')
    };
  };
  var setStoredColours = function setStoredColours(primary, secondary) {
    localStorage.setItem('wtf-primary', primary);
    localStorage.setItem('wtf-secondary', secondary);
  };
  var clearStoredColours = function clearStoredColours() {
    localStorage.removeItem('wtf-primary');
    localStorage.removeItem('wtf-secondary');
  };
  var getStoredDesign = function getStoredDesign() {
    return localStorage.getItem('wtf-design');
  };
  var setStoredDesign = function setStoredDesign(design) {
    return localStorage.setItem('wtf-design', design);
  };

  /* ---------------------------------------
  HELPERS
  --------------------------------------- */

  var hexToRgb = function hexToRgb(hex) {
    hex = hex.replace('#', '');
    if (hex.length === 3) {
      hex = hex.split('').map(function (x) {
        return x + x;
      }).join('');
    }
    var bigint = parseInt(hex, 16);
    var r = bigint >> 16 & 255;
    var g = bigint >> 8 & 255;
    var b = bigint & 255;
    return "".concat(r, ", ").concat(g, ", ").concat(b);
  };

  /* ---------------------------------------
  THEME APPLICATION
  --------------------------------------- */

  var setTheme = function setTheme(theme) {
    if (theme === 'auto') {
      var system = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
      document.documentElement.setAttribute('data-bs-theme', system);
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme);
    }
  };

  /* ---------------------------------------
  CUSTOM COLOUR ENGINE
  --------------------------------------- */

  var applyCustomColours = function applyCustomColours(primary, secondary) {
    if (!primary || !secondary) return;
    var root = document.documentElement;
    root.style.setProperty('--wtf-primary', primary);
    root.style.setProperty('--wtf-primary-rgb', hexToRgb(primary));
    root.style.setProperty('--wtf-secondary', secondary);
    root.style.setProperty('--wtf-secondary-rgb', hexToRgb(secondary));
  };
  var resetCustomColours = function resetCustomColours() {
    var root = document.documentElement;
    root.style.removeProperty('--wtf-primary');
    root.style.removeProperty('--wtf-primary-rgb');
    root.style.removeProperty('--wtf-secondary');
    root.style.removeProperty('--wtf-secondary-rgb');
  };

  /* ---------------------------------------
  DESIGN ENGINE
  --------------------------------------- */

  var applyDesign = function applyDesign(design) {
    var body = document.getElementById('wtfTheme');
    if (!body) return;
    body.className = design;
  };

  /* ---------------------------------------
  ACTIVE STATE
  --------------------------------------- */

  var showActiveTheme = function showActiveTheme(theme) {
    var activeIcon = document.querySelector('.theme-icon-active use');
    var btn = document.querySelector("[data-bs-theme-value=\"".concat(theme, "\"]"));
    if (!btn) return;
    var svg = btn.querySelector('svg use');
    document.querySelectorAll('[data-bs-theme-value]').forEach(function (el) {
      el.classList.remove('active');
      el.setAttribute('aria-pressed', 'false');
    });
    btn.classList.add('active');
    btn.setAttribute('aria-pressed', 'true');
    if (svg && activeIcon) {
      activeIcon.setAttribute('href', svg.getAttribute('href'));
    }
  };

  /* ---------------------------------------
  INIT THEME
  --------------------------------------- */

  var getPreferredTheme = function getPreferredTheme() {
    var stored = getStoredTheme();
    if (stored) return stored;
    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  };
  var initTheme = function initTheme() {
    var theme = getPreferredTheme();
    setTheme(theme);
    showActiveTheme(theme);
    var colours = getStoredColours();
    if (colours.primary && colours.secondary) {
      applyCustomColours(colours.primary, colours.secondary);
    }
    var design = getStoredDesign();
    if (design) {
      applyDesign(design);
    }
  };

  /* ---------------------------------------
  EVENTS
  --------------------------------------- */

  var initEvents = function initEvents() {
    document.querySelectorAll('#wtfThemeColours [data-bs-theme-value]').forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        var theme = toggle.getAttribute('data-bs-theme-value');
        setStoredTheme(theme);
        setTheme(theme);
        showActiveTheme(theme);
      });
    });
  };

  /* ---------------------------------------
  CLIENT COLOUR FORM (UPDATED)
  --------------------------------------- */

  var initColourForm = function initColourForm() {
    var primaryInput = document.getElementById('wtfPrimaryColour');
    var secondaryInput = document.getElementById('wtfSecondaryColour');
    var primaryHex = document.getElementById('wtfPrimaryHex');
    var secondaryHex = document.getElementById('wtfSecondaryHex');
    var previewPrimary = document.getElementById('wtfPreviewPrimary');
    var previewSecondary = document.getElementById('wtfPreviewSecondary');
    var primaryRgbText = document.getElementById('wtfPrimaryRgb');
    var secondaryRgbText = document.getElementById('wtfSecondaryRgb');
    var resetBtn = document.getElementById('wtfColourReset');
    if (!primaryInput || !secondaryInput) return;
    var isValidHex = function isValidHex(hex) {
      return /^#([0-9A-F]{3}){1,2}$/i.test(hex);
    };
    var updateUI = function updateUI(primary, secondary) {
      var currentPrimary = primary || primaryInput.value;
      var currentSecondary = secondary || secondaryInput.value;
      if (!currentPrimary || !currentSecondary) return;

      // Apply theme instantly
      applyCustomColours(currentPrimary, currentSecondary);
      setStoredColours(currentPrimary, currentSecondary);

      // Update preview
      previewPrimary.style.background = currentPrimary;
      previewSecondary.style.background = currentSecondary;

      // Update RGB text
      primaryRgbText.textContent = "RGB(".concat(hexToRgb(currentPrimary), ")");
      secondaryRgbText.textContent = "RGB(".concat(hexToRgb(currentSecondary), ")");
    };

    // 🎯 COLOR PICKER → HEX + UI
    primaryInput.addEventListener('input', function () {
      primaryHex.value = primaryInput.value;
      updateUI(primaryInput.value, null);
    });
    secondaryInput.addEventListener('input', function () {
      secondaryHex.value = secondaryInput.value;
      updateUI(null, secondaryInput.value);
    });

    // HEX → COLOR PICKER + UI
    primaryHex.addEventListener('input', function () {
      if (isValidHex(primaryHex.value)) {
        primaryInput.value = primaryHex.value;
        updateUI(primaryInput.value, secondaryInput.value);
      }
    });
    secondaryHex.addEventListener('input', function () {
      if (isValidHex(secondaryHex.value)) {
        secondaryInput.value = secondaryHex.value;
        updateUI(primaryInput.value, secondaryInput.value);
      }
    });

    // RESET
    if (resetBtn) {
      resetBtn.addEventListener('click', function (e) {
        e.preventDefault();

        // ❌ Remove stored colours
        clearStoredColours();

        // ❌ Remove inline CSS variables from <html>
        resetCustomColours();

        // ✅ Reset inputs to default HTML values (not forced values)
        primaryInput.value = primaryInput.defaultValue;
        secondaryInput.value = secondaryInput.defaultValue;
        primaryHex.value = primaryInput.defaultValue;
        secondaryHex.value = secondaryInput.defaultValue;

        // ✅ Update UI preview ONLY (no re-applying styles)
        previewPrimary.style.background = primaryInput.value;
        previewSecondary.style.background = secondaryInput.value;
        primaryRgbText.textContent = "RGB(".concat(hexToRgb(primaryInput.value), ")");
        secondaryRgbText.textContent = "RGB(".concat(hexToRgb(secondaryInput.value), ")");
      });
    }

    // storage
    var stored = getStoredColours();
    if (stored.primary && stored.secondary) {
      primaryInput.value = stored.primary;
      secondaryInput.value = stored.secondary;
      primaryHex.value = stored.primary;
      secondaryHex.value = stored.secondary;
      updateUI(stored.primary, stored.secondary);
    }
  };

  /* ---------------------------------------
  DESIGN SWITCHER
  --------------------------------------- */

  var initDesignSwitch = function initDesignSwitch() {
    var container = document.getElementById('wtfThemeDesign');
    if (!container) return;
    var elements = container.querySelectorAll('[data-bs-theme-value], a');
    elements.forEach(function (el) {
      el.addEventListener('click', function (e) {
        var isLink = el.hasAttribute('href');

        // 👉 DESIGN BUTTONS (no href)
        if (!isLink) {
          e.preventDefault();
          var design = el.getAttribute('data-bs-theme-value');

          // Apply + store
          applyDesign(design);
          setStoredDesign(design);

          // ✅ ACTIVE STATE MANAGEMENT
          container.querySelectorAll('[data-bs-theme-value]').forEach(function (btn) {
            btn.classList.remove('active');
          });
          el.classList.add('active');

          // ❗ Keep offcanvas OPEN (do nothing)
        }

        // 👉 LINKS (navigate away)
        else {
          // Remove active from others (optional but cleaner)
          container.querySelectorAll('a').forEach(function (link) {
            link.classList.remove('active');
          });
          el.classList.add('active');

          // ✅ Close Bootstrap offcanvas before navigation
          var offcanvasEl = el.closest('.offcanvas');
          if (offcanvasEl) {
            var bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl);
            if (bsOffcanvas) {
              bsOffcanvas.hide();
            }
          }

          // Allow navigation normally (no preventDefault)
        }
      });
    });

    // ✅ Restore ACTIVE state on load
    var storedDesign = getStoredDesign();
    if (storedDesign) {
      var activeEl = container.querySelector("[data-bs-theme-value=\"".concat(storedDesign, "\"]"));
      if (activeEl) {
        activeEl.classList.add('active');
      }
    }
  };

  /* ---------------------------------------
  SYSTEM THEME CHANGE
  --------------------------------------- */

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function () {
    var stored = getStoredTheme();
    if (stored !== 'light' && stored !== 'dark') {
      setTheme(getPreferredTheme());
    }
  });

  /* ---------------------------------------
  ACTIVE BY URL
  --------------------------------------- */
  /*
    const setActiveByUrl = (containerId) => {
  
    const container = document.getElementById(containerId)
    if(!container) return
  
    const links = container.querySelectorAll('a')
  
    const currentUrl = window.location.pathname
  
    links.forEach(link => {
  
      const linkUrl = new URL(link.href).pathname
  
      if(linkUrl === currentUrl){
        link.classList.add('active')
      } else {
        link.classList.remove('active')
      }
  
    })
  
  }*/

  var setActiveByUrl = function setActiveByUrl(containerId) {
    var container = document.getElementById(containerId);
    if (!container) return;
    var currentPath = window.location.pathname.replace(/\/$/, '');
    var links = container.querySelectorAll('a[href]');
    links.forEach(function (link) {
      var href = link.getAttribute('href');

      // Ignore empty or anchor links
      if (!href || href === '#') return;
      var linkPath = new URL(link.href).pathname.replace(/\/$/, '');
      if (linkPath === currentPath) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  };

  /* ---------------------------------------
  DOM READY
  --------------------------------------- */

  window.addEventListener('DOMContentLoaded', function () {
    initTheme();
    initEvents();
    initColourForm();
    initDesignSwitch();

    // NEW ACTIVE STATES
    setActiveByUrl('wtfThemeColours');
    setActiveByUrl('wtfThemeDesign');
    setActiveByUrl('wtfProducts');
    setActiveByUrl('wtfLayouts');
    setActiveByUrl('wtfThemeComponents');
  });
})();