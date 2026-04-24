<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <?php     
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-meta.php'); ?>
    <?php include(SITE_ROOT . '/components/wtf/wtf-wtf-description.php'); ?>
    <meta name="author" content="web tech focus" />
    <meta name="generator" content="wtfTheme v1.0.0" />
    
    <title>Buttons <?php include(SITE_ROOT . '/components/wtf/wtf-wtf-title.php'); ?></title>
    <link
      rel="canonical"
      href="https://library.webtechfocus.com/components//button/"
    />
    
    <meta name="theme-color" content="#00A19A" />
    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: #0000001a;
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style> -->
  </head>
  <body id="wtfTheme" class="wtf-line">
<?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>
  
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="arrow-right-short" viewBox="0 0 16 16">
        <path
          fill-rule="evenodd"
          d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"
        ></path>
      </symbol>
      <symbol id="x-lg" viewBox="0 0 16 16">
        <path
          fill-rule="evenodd"
          d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"
        ></path>
        <path
          fill-rule="evenodd"
          d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"
        ></path>
      </symbol>
    </svg>
    <div class="d-flex gap-2 justify-content-center py-5">
      <button class="btn btn-primary rounded-pill px-3" type="button">
        Primary
      </button>
      <button class="btn btn-secondary rounded-pill px-3" type="button">
        Secondary
      </button>
      <button class="btn btn-success rounded-pill px-3" type="button">
        Success
      </button>
      <button class="btn btn-danger rounded-pill px-3" type="button">
        Danger
      </button>
      <button class="btn btn-warning rounded-pill px-3" type="button">
        Warning
      </button>
      <button class="btn btn-info rounded-pill px-3" type="button">Info</button>
      <button class="btn btn-light rounded-pill px-3" type="button">
        Light
      </button>
      <button class="btn btn-dark rounded-pill px-3" type="button">Dark</button>
      <button class="btn btn-link rounded-pill px-3" type="button">Link</button>
    </div>
    <hr class="xl" />
    <div class="col-lg-6 col-xxl-4 my-5 mx-auto">
      <div class="d-grid gap-2">
        <button class="btn btn-outline-secondary" type="button">
          Secondary action
        </button>
        <button class="btn btn-primary" type="button">Primary action</button>
      </div>
    </div>
    <hr class="xl" />
    <div class="d-flex gap-2 justify-content-center py-5">
      <button
        class="btn btn-primary d-inline-flex align-items-center"
        type="button"
      >
        Primary icon
        <svg class="bi ms-1" width="20" height="20" aria-hidden="true">
          <use xlink:href="#arrow-right-short"></use>
        </svg>
      </button>
      <button
        class="btn btn-outline-secondary d-inline-flex align-items-center"
        type="button"
      >
        Secondary icon
        <svg class="bi ms-1" width="20" height="20" aria-hidden="true">
          <use xlink:href="#arrow-right-short"></use>
        </svg>
      </button>
    </div>
    <hr class="xl" />
    <div class="d-flex gap-2 justify-content-center py-5">
      <button class="btn btn-primary" type="button" disabled>
        <span
          class="spinner-border spinner-border-sm"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden" role="status">Loading...</span>
      </button>
      <button class="btn btn-primary" type="button" disabled>
        <span
          class="spinner-border spinner-border-sm"
          aria-hidden="true"
        ></span>
        <span role="status">Loading...</span>
      </button>
    </div>
    <hr class="xl" />
    <div class="d-flex gap-2 justify-content-center pt-5 pb-4">
      <button class="btn btn-primary rounded-circle p-2 lh-1" type="button">
        <svg class="bi" width="16" height="16" aria-hidden="true">
          <use xlink:href="#x-lg"></use>
        </svg>
        <span class="visually-hidden">Dismiss</span>
      </button>
      <button
        class="btn btn-outline-primary rounded-circle p-2 lh-1"
        type="button"
      >
        <svg class="bi" width="16" height="16" aria-hidden="true">
          <use xlink:href="#x-lg"></use>
        </svg>
        <span class="visually-hidden">Dismiss</span>
      </button>
    </div>
    <div class="d-flex gap-2 justify-content-center pb-5">
      <button class="btn btn-primary rounded-circle p-3 lh-1" type="button">
        <svg class="bi" width="24" height="24" aria-hidden="true">
          <use xlink:href="#x-lg"></use>
        </svg>
        <span class="visually-hidden">Dismiss</span>
      </button>
      <button
        class="btn btn-outline-primary rounded-circle p-3 lh-1"
        type="button"
      >
        <svg class="bi" width="24" height="24" aria-hidden="true">
          <use xlink:href="#x-lg"></use>
        </svg>
        <span class="visually-hidden">Dismiss</span>
      </button>
    </div>
    <hr class="xl" />
        <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>

</body>
</html>
