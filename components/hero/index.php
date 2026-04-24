<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="https://library.webtechfocus.com/components/heroes/" />
  
  </head>
  <body id="wtfTheme" class="wtf-line">
<?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>
  
    <main>
      <?php include(SITE_ROOT . '/components/hero/wtf-theme.php'); ?>
      <hr class="xl" />

      <div class="px-4 py-5 my-5 text-center">
        <?php include(SITE_ROOT . '/components/content/brand/logo-brand-me-2.php'); ?>
        <!--<h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>-->
        <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
        <div class="col-lg-6 mx-auto">
          <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <?php include(SITE_ROOT . '/components/content/demo/btn-primary.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/btn-outline-secondary.php'); ?>
          </div>
        </div>
      </div>
      <hr class="xl" />
      <div class="px-4 pt-5 my-5 text-center border-bottom">
        <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
        <div class="col-lg-6 mx-auto">
          <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <?php include(SITE_ROOT . '/components/content/demo/btn-primary.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/btn-outline-secondary.php'); ?>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh">
          <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-5">
            <img
              src="../../../wtf-library/wtf-theme-media/wtf-wtf/wtf-site.png"
              class="img-fluid border rounded-3 shadow-lg mb-4"
              alt="Example image"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
        </div>
      </div>
      <hr class="xl" />
      <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="../../../wtf-library/wtf-theme-media/wtf-wtf/wtf-site.png"
              class="d-block mx-lg-auto img-fluid"
              alt="Bootstrap Themes"
              width="700"
              height="500"
              loading="lazy"
            />
          </div>
          <div class="col-lg-6">
            <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <?php include(SITE_ROOT . '/components/content/demo/btn-primary.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/btn-outline-secondary.php'); ?>
            </div>
          </div>
        </div>
      </div>
      <hr class="xl" />
      <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
           <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
          </div>
          <div class="col-md-10 mx-auto col-lg-5 p-5 border rounded-3 text-center">

          <?php include(SITE_ROOT . '/components/forms/log-in.php'); ?>
           
          </div>
        </div>
      </div>
      <hr class="xl" />
      <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> my-5">
        <div
          class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg"
        >
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3" >
             <?php include(SITE_ROOT . '/components/content/demo/btn-primary.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/btn-outline-secondary.php'); ?>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img
              class="rounded-lg-3 w-100"
              src="../../../wtf-library/wtf-theme-media/wtf-wtf/wtf-site.png"
              alt=""
            />
          </div>
        </div>
      </div>
      <hr class="xl" />
      <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
          <?php include(SITE_ROOT . '/components/content/demo/headline.php'); ?>
          <div class="col-lg-6 mx-auto">
            <?php include(SITE_ROOT . '/components/content/demo/intro.php'); ?>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <?php include(SITE_ROOT . '/components/content/demo/btn-primary.php'); ?>
            <?php include(SITE_ROOT . '/components/content/demo/btn-outline-secondary.php'); ?>
            </div>
          </div>
        </div>
      </div>
      
    </main>
        <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>

</body>
</html>
