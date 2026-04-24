/*!
 * WTF Theme Engine
 */

(() => {
  'use strict'

  /* ---------------------------------------
  STORAGE
  --------------------------------------- */

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getStoredColours = () => {
    return {
      primary: localStorage.getItem('wtf-primary'),
      secondary: localStorage.getItem('wtf-secondary')
    }
  }

  const setStoredColours = (primary, secondary) => {
    localStorage.setItem('wtf-primary', primary)
    localStorage.setItem('wtf-secondary', secondary)
  }

  const clearStoredColours = () => {
    localStorage.removeItem('wtf-primary')
    localStorage.removeItem('wtf-secondary')
  }

  const getStoredDesign = () => localStorage.getItem('wtf-design')
  const setStoredDesign = design => localStorage.setItem('wtf-design', design)

  /* ---------------------------------------
  HELPERS
  --------------------------------------- */

  const hexToRgb = hex => {

    hex = hex.replace('#', '')

    if (hex.length === 3) {
      hex = hex.split('').map(x => x + x).join('')
    }

    const bigint = parseInt(hex, 16)

    const r = (bigint >> 16) & 255
    const g = (bigint >> 8) & 255
    const b = bigint & 255

    return `${r}, ${g}, ${b}`

  }

  /* ---------------------------------------
  THEME APPLICATION
  --------------------------------------- */

  const setTheme = theme => {

    if (theme === 'auto') {

      const system = window.matchMedia('(prefers-color-scheme: dark)').matches
        ? 'dark'
        : 'light'

      document.documentElement.setAttribute('data-bs-theme', system)

    } else {

      document.documentElement.setAttribute('data-bs-theme', theme)

    }

  }

  /* ---------------------------------------
  CUSTOM COLOUR ENGINE
  --------------------------------------- */

  const applyCustomColours = (primary, secondary) => {

    if (!primary || !secondary) return

    const root = document.documentElement

    root.style.setProperty('--wtf-primary', primary)
    root.style.setProperty('--wtf-primary-rgb', hexToRgb(primary))

    root.style.setProperty('--wtf-secondary', secondary)
    root.style.setProperty('--wtf-secondary-rgb', hexToRgb(secondary))

  }

  const resetCustomColours = () => {

    const root = document.documentElement

    root.style.removeProperty('--wtf-primary')
    root.style.removeProperty('--wtf-primary-rgb')

    root.style.removeProperty('--wtf-secondary')
    root.style.removeProperty('--wtf-secondary-rgb')

  }

  /* ---------------------------------------
  DESIGN ENGINE
  --------------------------------------- */

  const applyDesign = design => {

    const body = document.getElementById('wtfTheme')

    if (!body) return

    body.className = design

  }

  /* ---------------------------------------
  ACTIVE STATE
  --------------------------------------- */

  const showActiveTheme = theme => {

    const activeIcon = document.querySelector('.theme-icon-active use')

    const btn = document.querySelector(`[data-bs-theme-value="${theme}"]`)

    if (!btn) return

    const svg = btn.querySelector('svg use')

    document.querySelectorAll('[data-bs-theme-value]').forEach(el => {
      el.classList.remove('active')
      el.setAttribute('aria-pressed', 'false')
    })

    btn.classList.add('active')
    btn.setAttribute('aria-pressed', 'true')

    if (svg && activeIcon) {
      activeIcon.setAttribute('href', svg.getAttribute('href'))
    }

  }

  /* ---------------------------------------
  INIT THEME
  --------------------------------------- */

  const getPreferredTheme = () => {

    const stored = getStoredTheme()

    if (stored) return stored

    return window.matchMedia('(prefers-color-scheme: dark)').matches
      ? 'dark'
      : 'light'

  }

  const initTheme = () => {

    const theme = getPreferredTheme()

    setTheme(theme)
    showActiveTheme(theme)

    const colours = getStoredColours()

    if (colours.primary && colours.secondary) {
      applyCustomColours(colours.primary, colours.secondary)
    }

    const design = getStoredDesign()

    if (design) {
      applyDesign(design)
    }

  }

  /* ---------------------------------------
  EVENTS
  --------------------------------------- */

  const initEvents = () => {

    document.querySelectorAll('#wtfThemeColours [data-bs-theme-value]').forEach(toggle => {

      toggle.addEventListener('click', e => {

        e.preventDefault()

        const theme = toggle.getAttribute('data-bs-theme-value')

        setStoredTheme(theme)
        setTheme(theme)
        showActiveTheme(theme)

      })

    })

  }

  /* ---------------------------------------
  CLIENT COLOUR FORM (UPDATED)
  --------------------------------------- */

  const initColourForm = () => {

    const primaryInput = document.getElementById('wtfPrimaryColour')
    const secondaryInput = document.getElementById('wtfSecondaryColour')

    const primaryHex = document.getElementById('wtfPrimaryHex')
    const secondaryHex = document.getElementById('wtfSecondaryHex')

    const updateBtn = document.getElementById('wtfColourUpdate')
    const resetBtn = document.getElementById('wtfColourReset')

    if (!primaryInput || !secondaryInput) return

    // Sync color -> text
    primaryInput.addEventListener('input', () => {
      primaryHex.value = primaryInput.value
    })

    secondaryInput.addEventListener('input', () => {
      secondaryHex.value = secondaryInput.value
    })

    // Sync text -> color
    primaryHex.addEventListener('input', () => {
      primaryInput.value = primaryHex.value
    })

    secondaryHex.addEventListener('input', () => {
      secondaryInput.value = secondaryHex.value
    })

    if (updateBtn) {

      updateBtn.addEventListener('click', e => {

        e.preventDefault()

        const primary = primaryInput.value.trim()
        const secondary = secondaryInput.value.trim()

        if (!primary || !secondary) return

        alert('⚠️ Theme colours will not work once Brand colours are added.')

        applyCustomColours(primary, secondary)
        setStoredColours(primary, secondary)

      })

    }

    /*
    if(resetBtn){
  
      resetBtn.addEventListener('click', e => {
  
        e.preventDefault()
  
        primaryInput.value = ''
        secondaryInput.value = ''
  
        primaryHex.value = ''
        secondaryHex.value = ''
  
        clearStoredColours()
        resetCustomColours()
  
      })
  
    }*/

    if (resetBtn) {

      resetBtn.addEventListener('click', e => {

        e.preventDefault()

        // Clear stored values
        clearStoredColours()
        resetCustomColours()

        // Reset colour pickers to defaults (or keep current if you prefer)
        primaryInput.value = '#000000'
        secondaryInput.value = '#ffffff'

        // ✅ Sync HEX inputs to match pickers
        primaryHex.value = primaryInput.value
        secondaryHex.value = secondaryInput.value

      })

    }

  }

  /* ---------------------------------------
  DESIGN SWITCHER
  --------------------------------------- */

  const initDesignSwitch = () => {

    const container = document.getElementById('wtfThemeDesign')
    if (!container) return

    const elements = container.querySelectorAll('[data-bs-theme-value], a')

    elements.forEach(el => {

      el.addEventListener('click', e => {

        const isLink = el.hasAttribute('href')

        // 👉 DESIGN BUTTONS (no href)
        if (!isLink) {

          e.preventDefault()

          const design = el.getAttribute('data-bs-theme-value')

          // Apply + store
          applyDesign(design)
          setStoredDesign(design)

          // ✅ ACTIVE STATE MANAGEMENT
          container.querySelectorAll('[data-bs-theme-value]').forEach(btn => {
            btn.classList.remove('active')
          })

          el.classList.add('active')

          // ❗ Keep offcanvas OPEN (do nothing)

        }

        // 👉 LINKS (navigate away)
        else {

          // Remove active from others (optional but cleaner)
          container.querySelectorAll('a').forEach(link => {
            link.classList.remove('active')
          })

          el.classList.add('active')

          // ✅ Close Bootstrap offcanvas before navigation
          const offcanvasEl = el.closest('.offcanvas')

          if (offcanvasEl) {
            const bsOffcanvas = bootstrap.Offcanvas.getInstance(offcanvasEl)
            if (bsOffcanvas) {
              bsOffcanvas.hide()
            }
          }

          // Allow navigation normally (no preventDefault)

        }

      })

    })

    // ✅ Restore ACTIVE state on load
    const storedDesign = getStoredDesign()

    if (storedDesign) {
      const activeEl = container.querySelector(`[data-bs-theme-value="${storedDesign}"]`)
      if (activeEl) {
        activeEl.classList.add('active')
      }
    }

  }

  /* ---------------------------------------
  SYSTEM THEME CHANGE
  --------------------------------------- */

  window.matchMedia('(prefers-color-scheme: dark)')
    .addEventListener('change', () => {

      const stored = getStoredTheme()

      if (stored !== 'light' && stored !== 'dark') {
        setTheme(getPreferredTheme())
      }

    })


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

  const setActiveByUrl = (containerId) => {

    const container = document.getElementById(containerId)
    if (!container) return

    const currentPath = window.location.pathname.replace(/\/$/, '')

    const links = container.querySelectorAll('a[href]')

    links.forEach(link => {

      const href = link.getAttribute('href')

      // Ignore empty or anchor links
      if (!href || href === '#') return

      const linkPath = new URL(link.href).pathname.replace(/\/$/, '')

      if (linkPath === currentPath) {
        link.classList.add('active')
      } else {
        link.classList.remove('active')
      }

    })

  }

  /* ---------------------------------------
  DOM READY
  --------------------------------------- */

  window.addEventListener('DOMContentLoaded', () => {

    initTheme()
    initEvents()
    initColourForm()
    initDesignSwitch()

    // NEW ACTIVE STATES
    setActiveByUrl('wtfThemeColours')
    setActiveByUrl('wtfThemeDesign')
    setActiveByUrl('wtfProducts')
    setActiveByUrl('wtfLayouts')
    setActiveByUrl('wtfThemeComponents')

  })

})()