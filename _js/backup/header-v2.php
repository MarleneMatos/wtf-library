<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3WB9K3Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<h1 class="visually-hidden">wtf Theme - UX UI Kit - web tech focus</h1>
<header id="wtfHeader" class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> bd-gutter flex-wrap flex-lg-nowrap">
  <!--
  <div class="collapse" id="wtfSearch">
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
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
  </div>-->
  <nav class="navbar navbar-wtf navbar-expand-lg" aria-label="Main navigation">
    <div class="bd-navbar-toggle">
      <button class="btn btn-icon p-2 d-flex d-lg-none order-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#wtfNavbar" aria-controls="wtfNavbar" aria-label="Toggle navigation">
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
          <?php //include(SITE_ROOT . '/products/nav.php'); 
          ?>
          <!--
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/frontpage/">Frontpage</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/page/">Page</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/skill/">Skill</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/service/">Service</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/products/">Product</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/blog/">Blog</a>
          </li>
          <li class="nav-item col-12 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/sitemap/">Sitemap</a>
          </li>
        -->



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
        <hr class="d-lg-none text-white-50">

        <ul class="nav nav-social flex-row flex-wrap ms-md-auto align-items-center">
          <?php include(SITE_ROOT . '/components/nav/wtf-social.php'); ?>
        </ul>
      </div>
    </div>
    <div class="d-flex">
      <button class="btn btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#wtfThemeOptions" aria-controls="wtfThemeOptions">
        <svg class="wtfi" aria-hidden="true">
          <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-sound-mix"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Theme Options</span>
      </button>
      <!--
      <button class="btn btn-iconps-2" type="button" data-bs-toggle="collapse" data-bs-target="#wtfSearch" aria-controls="wtfSearch" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="wtfi" aria-hidden="true">
          <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-magnifying-glass"></use>
        </svg>
      </button> -->
    </div>
  </nav>
</header>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tawtfindex="-1" id="wtfThemeOptions" aria-labelledby="wtfThemeOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="wtfThemeOptionsLabel">Theme Options</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">

    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfBrandColours" aria-label="Colours Options (auto)">
        <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?><span id="bd-theme-text">You Colour</span>
      </button>
      <div class="collapse" id="wtfBrandColours">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-text">
            <div class="bg-terciary">
              <p class="h6 wtf">Your Brand Colours</p>
              <p>Insert your hex colour, and see how the theme changes!</p>
              <form id="formBrandColour" action="">
                <div class="row">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="wtfPrimaryColour" placeholder="#00A19A">
                      <label for="wtfPrimaryColour">Primary Colour</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="wtfSecondaryColour" placeholder="#131879">
                      <label for="wtfSecondaryColour">Secondary Colour</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="d-inline-flex gap-1">
                      <a href="#" class="btn btn-primary" id="wtfColourUpdate" role="button" data-bs-toggle="button">Update</a>
                      <a href="#" class="btn btn-secondary" id="wtfColourReset" role="button" data-bs-toggle="button">Reset</a>
                    </p>
                  </div>
                </div>

              </form>

            </div>
        </div> <!-- card -->
      </div> <!-- collapse -->
    </div>



    <!-- Colours -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeColours" aria-label="Colours Options (auto)">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
        </svg><span id="bd-theme-text">Colours</span>
      </button>
      <div class="collapse" id="wtfThemeColours">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-text">
            <li class="nav-item col-12">
              <a class="nav-link active" data-bs-theme-value="light">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-free490/sprite.svg#icon-colours"></use>
                </svg>
                Light
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link" data-bs-theme-value="dark">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
                </svg>
                Dark
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link" data-bs-theme-value="mar">
                <svg class="wtfi me-2" style="--wtf-primary: #131879;" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
                </svg>
                Mar</a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link" data-bs-theme-value="marlene">
                <svg class="wtfi me-2" style="--wtf-primary: #00A19A;" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
                </svg>
                Marlene</a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link" data-bs-theme-value="wtf">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use fill="url(#wtf)" href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
                </svg>
                wtf</a>
            </li>
          </ul>

        </div> <!-- card -->
      </div> <!-- collapse -->
    </div>

    <!-- Designs -->

    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme-design" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeDesign" aria-label="Colours Options (auto)">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-round-brush"></use>
        </svg>
        <span id="bd-theme-design-text">Designs</span>
      </button>
      <div class="collapse" id="wtfThemeDesign">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-design-text">
            <?php //include(SITE_ROOT . '/designs/nav.php'); 
            ?>

            <li class="nav-item col-12">
              <span class="badge bg-primary-subtle text-primary-emphasis ms-2">Free</span> Theme Designs
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" data-bs-theme-value="wtf-line">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-paus"></use>
                </svg>
                Line
              </a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" href="http://localhost/wtf-library/designs/wtf-line/">
                <svg class="wtfi me-2">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-paus"></use>
                </svg>
                Demo
              </a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" data-bs-theme-value="wtf-dot">
                <svg class="wtfi me-2">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-record"></use>
                </svg>
                Dot
              </a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" href="http://localhost/wtf-library/designs/wtf-dot/">
                <svg class="wtfi me-2">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-record"></use>
                </svg>
                Demo
              </a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" data-bs-theme-value="wtf-polygon">
                <svg class="wtfi me-2">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-play"></use>
                </svg>
                Polygon
              </a>
            </li>
            <li class="nav-item col-6">
              <a class="nav-link" href="http://localhost/wtf-library/designs/wtf-polygon/">
                <svg class="wtfi me-2">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-controller-play"></use>
                </svg>
                Demo
              </a>
            </li>
          </ul>

        </div>
      </div> <!-- collapse -->
    </div>

    <!--Products -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-layout" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfProducts" aria-label="Products">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-shopping-cart"></use>
        </svg>
        <span id="bd-layout-text">Products</span>
      </button>
      <div class="collapse" id="wtfProducts">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-layout-text">
            <?php //include(SITE_ROOT . '/products/nav.php'); 
            ?>
            <li class="nav-item col-12 col-lg-auto">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/products/wtf-core/">
                <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                Core
              </a>
            </li>

            <li class="nav-item col-12 col-lg-auto">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/products/wtf-counter/">
                <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                Counter
              </a>
            </li>
            <li class="nav-item col-12 col-lg-auto">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/products/wtf-solo/">
                <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                Solo
              </a>
            </li>

            <li class="nav-item col-12 col-lg-auto">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/products/wtf-one/">
                <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?>
                One
              </a>
            </li>
          </ul>

        </div>
      </div> <!-- collapse -->
    </div>


    <!--Layouts -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-layout" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfLayouts" aria-label="Layouts">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-layers"></use>
        </svg>
        <span id="bd-layout-text">Layouts</span>
      </button>
      <div class="collapse" id="wtfLayouts">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-layout-text">
            <?php //include(SITE_ROOT . '/layouts/nav.php'); 
            ?>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/album/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-camera"></use>
                </svg>
                Album
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/blog/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-news"></use>
                </svg>
                Blog
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/post/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-news"></use>
                </svg>
                Blog Post
              </a>
            </li>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/checkout/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>
                Checkout
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/contact/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>
                Contact
              </a>
            </li>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/dashboard/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>Dashboard
              </a>
            </li>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/log-in/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>Log in
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/portfolio/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>
                Portfolio
              </a>
            </li>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/layouts/products/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-documents"></use>
                </svg>
                Product
              </a>
            </li>

          </ul>
        </div> <!-- card-body -->
      </div> <!-- collapse -->
    </div>


    <!--Components -->
    <div class="py-2">
      <button class="btn btn-primary w-100" id="wtf-components" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeComponents" aria-label="Colours Options (auto)">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
        </svg>
        <span>Components</span>
      </button>

      <div class="collapse" id="wtfThemeComponents">
        <div class="card card-nav">
          <ul class="row nav">
            <?php //include(SITE_ROOT . '/components/nav.php'); 
            ?>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/library/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Components Library
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/accordions/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Accordions
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/badges/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Badges
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/breadcrumbs/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Breadcrumbs
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components//button/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Buttons
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/card/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Cards
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/carousels/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Carousel
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/chart/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Chart
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/headers/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Headers
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/heroes/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Heroes
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components//feature/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Features
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/footers/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Footers
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/dropdowns/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Dropdowns
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/list-groups/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                List groups
              </a>
            </li>
            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/modals/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Modals
              </a>
            </li>

            <li class="nav-item col-12">
              <a class="nav-link py-2 px-0 px-lg-2" href="http://localhost/wtf-library/components/jumbotrons/">
                <svg class="wtfi me-2" aria-hidden="true">
                  <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
                </svg>
                Jumbotrons
              </a>
            </li>
          </ul>
        </div> <!-- card-body -->
      </div> <!-- collapse -->
    </div>






  </div><!-- Offcavas-body -->
</div><!-- Offcavas -->