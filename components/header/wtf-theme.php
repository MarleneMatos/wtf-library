<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3WB9K3Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<h1 class="visually-hidden">wtf Theme - UX UI Kit - web tech focus</h1>
<header id="wtfHeader" class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> bd-gutter flex-wrap flex-lg-nowrap">

  <nav class="navbar navbar-wtf navbar-expand-lg" aria-label="Main navigation">
    <div class="bd-navbar-toggle">
      <button class="btn btn-secondary btn-icon d-flex d-lg-none order-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#wtfNavbar" aria-controls="wtfNavbar" aria-label="Toggle navigation">
        <svg class="wtfi" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-menu"></use>
        </svg>
      </button>
    </div>
    <a class="navbar-brand p-0 m-0" href="http://localhost/wtf-library/" aria-label="webtechfocus">
      <?php include(SITE_ROOT . '/components/content/brand/logo-brand-me-2.php'); ?>
    </a>
    <div class="offcanvas-lg offcanvas-end flex-grow-1" tabindex="-1" id="wtfNavbar" aria-labelledby="wtfNavbarOffcanvasLabel">
      <div class="offcanvas-header px-4 pb-0">
        <h5 class="offcanvas-title" id="wtfNavbarOffcanvasLabel">wtf</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#wtfNavbar"></button>
      </div>
      <div class="offcanvas-body p-4 pt-0 p-lg-0">
        <hr class="d-lg-none text-white-50">
        <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
          <?php include(SITE_ROOT . '/components/nav/products.php'); ?>



          <div class="nav-item col-12 col-lg-auto d-md-block d-lg-none">

            <ul id="menu-wtf-footerone" class="nav">
              <li class="nav-item col-12 col-lg-auto">
                <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/products/wtf-wtf/">
                  <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                  Privacy Policy
                </a>
              </li>

              <!-- <li id="menu-item-676" class="privacy menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-676 nav-item"><a rel="privacy-policy" href="http://webtechfocus/privacy-policy/" class="nav-link">Privacy Policy</a></li>-->
            </ul>
            <ul class="nav">
              <li class="nav-item col-12 col-lg-auto">
                <a class="nav-link py-2 px-0 px-lg-2" href="javascript:Cookiebot.renew()" title="Cookie Settings">
                  <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                  Cookie Settings
                </a>
                <!-- <li class="cookies menu-item menu-item-type-custom menu-item-object-custom menu-item-677 nav-item"><a href="javascript:Cookiebot.renew()" class="nav-link" title="Cookie Settings">Cookie Settings</a></li>-->
            </ul>
          </div>



          <!-- 
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/wtf-theme-assets/icons/icomoon-free490/demo.html" target="_blank" rel="noopener"> Icons </a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="/docs/5.3/examples/"> Sources </a>
          </li>-->
        </ul>
        <hr class="wtf">

        <ul class="nav nav-social flex-row flex-wrap ms-md-auto align-items-center">
          <?php include(SITE_ROOT . '/components/nav/socials.php'); ?>
        </ul>
      </div>
    </div>
    <div class="d-flex">
      <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#wtfThemeOptions" aria-controls="wtfThemeOptions">
        <svg class="wtfi" aria-hidden="true">
          <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-sound-mix"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Theme Options</span>
      </button>
      <!--
      <button class="btn btn-warning btn-icon ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#wtfSearch" aria-controls="wtfSearch" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="wtfi" aria-hidden="true">
          <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-magnifying-glass"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Search</span>
      </button>-->

    </div>
  </nav>
  <!--
  <div class="collapse" id="wtfSearch">
    <div class="<?php //include(SITE_ROOT . '/components/content/demo/container-class.php'); 
                ?>">
      <div class="row">
        <form class="d-flex" role="search">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search" />
          <button class="btn btn-outline-primary" type="submit">
            Search
          </button>
        </form>
      </div>
    </div>
  </div> -->
</header>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tawtfindex="-1" id="wtfThemeOptions" aria-labelledby="wtfThemeOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="wtfThemeOptionsLabel">Theme Options</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">


    <?php include(SITE_ROOT . '/components/accordion/wtf-theme.php'); ?>

  </div><!-- Offcavas-body -->
</div><!-- Offcavas -->