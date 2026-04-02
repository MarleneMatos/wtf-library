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
    var updateBtn = document.getElementById('wtfColourUpdate');
    var resetBtn = document.getElementById('wtfColourReset');
    if (!primaryInput || !secondaryInput) return;
    if (updateBtn) {
      updateBtn.addEventListener('click', function (e) {
        e.preventDefault();
        var primary = primaryInput.value.trim();
        var secondary = secondaryInput.value.trim();
        if (!primary || !secondary) return;
        applyCustomColours(primary, secondary);
        setStoredColours(primary, secondary);
      });
    }
    if (resetBtn) {
      resetBtn.addEventListener('click', function (e) {
        e.preventDefault();
        primaryInput.value = '';
        secondaryInput.value = '';
        clearStoredColours();
        resetCustomColours();
      });
    }
  };

  /* ---------------------------------------
  DESIGN SWITCHER
  --------------------------------------- */

  var initDesignSwitch = function initDesignSwitch() {
    document.querySelectorAll('#wtfThemeDesign [data-bs-theme-value]').forEach(function (el) {
      el.addEventListener('click', function (e) {
        e.preventDefault();
        var design = el.getAttribute('data-bs-theme-value');
        applyDesign(design);
        setStoredDesign(design);
      });
    });
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
  DOM READY
  --------------------------------------- */

  window.addEventListener('DOMContentLoaded', function () {
    initTheme();
    initEvents();
    initColourForm();
    initDesignSwitch();
  });
})();