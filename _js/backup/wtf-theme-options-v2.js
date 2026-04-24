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

    hex = hex.replace('#','')

    if(hex.length === 3){
      hex = hex.split('').map(x => x+x).join('')
    }

    const bigint = parseInt(hex,16)

    const r = (bigint >> 16) & 255
    const g = (bigint >> 8) & 255
    const b = bigint & 255

    return `${r}, ${g}, ${b}`

  }

  /* ---------------------------------------
  THEME APPLICATION
  --------------------------------------- */

  const setTheme = theme => {

    if(theme === 'auto'){

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

    if(!primary || !secondary) return

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

    if(!body) return

    body.className = design

  }

  /* ---------------------------------------
  ACTIVE STATE
  --------------------------------------- */

  const showActiveTheme = theme => {

    const activeIcon = document.querySelector('.theme-icon-active use')

    const btn = document.querySelector(`[data-bs-theme-value="${theme}"]`)

    if(!btn) return

    const svg = btn.querySelector('svg use')

    document.querySelectorAll('[data-bs-theme-value]').forEach(el=>{
      el.classList.remove('active')
      el.setAttribute('aria-pressed','false')
    })

    btn.classList.add('active')
    btn.setAttribute('aria-pressed','true')

    if(svg && activeIcon){
      activeIcon.setAttribute('href', svg.getAttribute('href'))
    }

  }

  /* ---------------------------------------
  INIT THEME
  --------------------------------------- */

  const getPreferredTheme = () => {

    const stored = getStoredTheme()

    if(stored) return stored

    return window.matchMedia('(prefers-color-scheme: dark)').matches
      ? 'dark'
      : 'light'

  }

  const initTheme = () => {

    const theme = getPreferredTheme()

    setTheme(theme)
    showActiveTheme(theme)

    const colours = getStoredColours()

    if(colours.primary && colours.secondary){
      applyCustomColours(colours.primary, colours.secondary)
    }

    const design = getStoredDesign()

    if(design){
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

    const updateBtn = document.getElementById('wtfColourUpdate')
    const resetBtn = document.getElementById('wtfColourReset')

    if(!primaryInput || !secondaryInput) return

    if(updateBtn){

      updateBtn.addEventListener('click', e => {

        e.preventDefault()

        const primary = primaryInput.value.trim()
        const secondary = secondaryInput.value.trim()

        if(!primary || !secondary) return

        applyCustomColours(primary, secondary)

        setStoredColours(primary, secondary)

      })

    }

    if(resetBtn){

      resetBtn.addEventListener('click', e => {

        e.preventDefault()

        primaryInput.value = ''
        secondaryInput.value = ''

        clearStoredColours()

        resetCustomColours()

      })

    }

  }

  /* ---------------------------------------
  DESIGN SWITCHER
  --------------------------------------- */

  const initDesignSwitch = () => {

    document.querySelectorAll('#wtfThemeDesign [data-bs-theme-value]').forEach(el => {

      el.addEventListener('click', e => {

        e.preventDefault()

        const design = el.getAttribute('data-bs-theme-value')

        applyDesign(design)

        setStoredDesign(design)

      })

    })

  }

  /* ---------------------------------------
  SYSTEM THEME CHANGE
  --------------------------------------- */

  window.matchMedia('(prefers-color-scheme: dark)')
  .addEventListener('change', () => {

    const stored = getStoredTheme()

    if(stored !== 'light' && stored !== 'dark'){
      setTheme(getPreferredTheme())
    }

  })

  /* ---------------------------------------
  DOM READY
  --------------------------------------- */

  window.addEventListener('DOMContentLoaded', () => {

    initTheme()
    initEvents()
    initColourForm()
    initDesignSwitch()

  })

})()