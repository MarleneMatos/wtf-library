<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <?php     
    include('../../config.php'); // Include your config first
    include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-meta.php'); ?>
    <?php include(SITE_ROOT . '/components/wtf/wtf-wtf-description.php'); ?>
    <meta name="author" content="web tech focus" />
    <meta name="generator" content="wtfTheme v1.0.0" />
    <title>Album example <?php include(SITE_ROOT . '/components/wtf/wtf-wtf-title.php'); ?></title>
    <link rel="canonical" href="https://library.webtechfocus.com/components/album/" />
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
        --wtf-btn-font-weight: 600;
        --wtf-btn-color: var(--wtf-white);
        --wtf-btn-bg: var(--wtf-teal);
        --wtf-btn-border-color: var(--wtf-teal);
        --wtf-btn-hover-color: var(--wtf-white);
        --wtf-btn-hover-bg: rgba(var(--wtf-teal),0.6);
        --wtf-btn-hover-border-color: rgba(var(--wtf-teal),0.6);
        --wtf-btn-focus-shadow-rgb: var(--wtf-teal-rgb);
        --wtf-btn-active-color: var(--wtf-btn-hover-color);
        --wtf-btn-active-bg: rgba(var(--wtf-teal),0.8);
        --wtf-btn-active-border-color: rgba(var(--wtf-teal),0.8);
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
<?php include(SITE_ROOT . '/components/wtf/wtf-gtm-body.php'); ?>
    <h1 class="visually-hidden">WTF Theme | UX UI Kit <?php include(SITE_ROOT . '/components/wtf/wtf-wtf-title.php'); ?></h1>
    <?php include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-header.php'); ?>
<!--
    <header>
      <div class="collapse text-bg-dark" id="navbarHeader">
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4>About</h4>
              <p class="text-body-secondary">
                Add some information about the album below, the author, or any
                other background context. Make it a few sentences long so folks
                can pick up some informative tidbits. Then, link them off to
                some social networking sites or contact information.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4>Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on X</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg class="wtfi me-2  my-1 theme-icon-active" aria-hidden="true">
        <use href="http://localhost/wtf-library/icons/icomoon-entypoPlus/sprite.svg#icon-picasa"></use>
      </svg>
            <strong>Album</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header> -->
    <main>
      <section class="<?php include(SITE_ROOT . '/components/content/demo/section-class.php'); ?>"class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Album example</h1>
            <p class="lead text-body-secondary">
              Something short and leading about the collection below—its
              contents, the creator, etc. Make it short and sweet, but not too
              short so folks don’t simply skip over it entirely.
            </p>
            <p>
              <a href="#" class="btn btn-primary my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
          </div>
        </div>
    </section>
      <div class="album py-5 bg-body-tertiary">
        <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
              <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
              <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
           <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
           <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            <div class="col">
             <?php include(SITE_ROOT . '/components/card/card-album.php'); ?>
            </div>
            
          </div>
        </div>
      </div>
    </main>

    <!--
    <footer class="text-body-secondary py-5">
      <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
        <p class="float-end mb-1"><a href="#">Back to top</a></p>
        <p class="mb-1">
          Album example is &copy; Bootstrap, but please download and customize
          it for yourself!
        </p>
        <p class="mb-0">
          New to Bootstrap? <a href="/">Visit the homepage</a> or read our
          <a href="../getting-started/introduction">getting started guide</a>.
        </p>
      </div>
    </footer>

    -->
        <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>
</html>
