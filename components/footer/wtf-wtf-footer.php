<footer id="wtfFooter" class="footer-wtf">
  <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?>">
    <div class="row back-btn">
      <p class="text-end mb-0">
        <a class="btn btn-top" href="#wtfTheme">
          <svg>
            <use xlink:href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-chevron-thin-up" />
          </svg>
        </a>
      </p>
    </div>
    <div class="row footer-nav">
      <div class="col-12 col-md-4 d-flex justify-content-sm-center justify-content-md-center justify-content-lg-start align-items-center copyright">
        <a class="footer-brand" href="#home"><?php include(SITE_ROOT . '/components/content/brand/logo-brand-me-2.php'); ?></a>
        <small class="d-block">© <script>document.write(new Date().getFullYear())</script> web tech focus</small>
      </div>

      <div class="col-12 col-md-4 d-flex justify-content-sm-center justify-content-md-end justify-content-lg-center align-items-center">
        <div class="afnavone">
          <ul id="menu-wtf-footerone" class="nav">
            <li id="menu-item-676" class="privacy menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-676 nav-item"><a rel="privacy-policy" href="http://webtechfocus/privacy-policy/" class="nav-link">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="fnavone">
          <ul class="nav">
            <li class="cookies menu-item menu-item-type-custom menu-item-object-custom menu-item-677 nav-item"><a href="javascript:Cookiebot.renew()" class="nav-link" title="Cookie Settings">Cookie Settings</a></li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-4 d-flex justify-content-end">
        <ul class="nav-social flex-row flex-wrap ms-md-auto align-items-center">
              <?php include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-social.php'); ?>
            </ul>
        <!--
        <div class="d-flex justify-content-center align-items-center text-center">
            <ul class="nav-social flex-row flex-wrap ms-md-auto align-items-center">
              <?php //include(SITE_ROOT . '/components/assets/wtf/wtf-wtf-social.php'); ?>
            </ul>
        </div>-->
      </div>
    </div>



  </div><!-- end container -->
</footer>