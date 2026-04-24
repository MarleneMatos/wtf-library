<!-- Brand Colour -->
<div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfBrandColours" aria-label="wtf Brand Colours Options">
        <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?><span id="bd-theme-text">You Colour</span>
      </button>
      <div class="collapse show" id="wtfBrandColours">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-text">
            <div class="bg-terciary">
              <?php include(SITE_ROOT . '/components/form/wtf-theme-colour.php'); ?>
            </div>
          </ul>
        </div> <!-- card -->
      </div> <!-- collapse -->
    </div>

    <!-- Designs -->
     <!--
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme-design" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeDesign" aria-label="wtf Theme Design Options">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-round-brush"></use>
        </svg>
        <span id="bd-theme-design-text">Designs</span>
      </button>
      <div class="collapse" id="wtfThemeDesign">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-design-text">
            <?php //include(SITE_ROOT . '/components/nav/designs.php'); ?>
          </ul>

        </div>
      </div> <!-- collapse --> <!--
    </div>-->



    <!-- Colours -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeColours" aria-label="wtf Theme Colours Options">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
        </svg><span id="bd-theme-text">Colours</span>
      </button>
      <div class="collapse" id="wtfThemeColours">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-text">
            <?php include(SITE_ROOT . '/components/nav/colour-mode.php'); ?>
          </ul>

        </div> <!-- card -->
      </div> <!-- collapse -->
    </div>

    

    <!--Products -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-layout" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfProducts" aria-label="wtf Product Options">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-shopping-cart"></use>
        </svg>
        <span id="bd-layout-text">Products</span>
      </button>
      <div class="collapse" id="wtfProducts">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-layout-text">
            <?php include(SITE_ROOT . '/components/nav/products.php'); ?>
          </ul>
        </div>
      </div> <!-- collapse -->
    </div>


  
    <!--Components -->
    <div class="py-2">
      <button class="btn btn-primary w-100" id="wtf-components" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeComponents" aria-label="wtf Theme Components">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
        </svg>
        <span>Components</span>
      </button>

      <div class="collapse" id="wtfThemeComponents">
        <div class="card card-nav">
          <ul class="row nav">
            <?php include(SITE_ROOT . '/components/nav/components.php'); ?>
          </ul>
        </div> <!-- card-body -->
      </div> <!-- collapse -->
    </div>

    <!--Layouts -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-layout" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfLayouts" aria-label="wtf Theme Layouts">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-layers"></use>
        </svg>
        <span id="bd-layout-text">Layouts</span>
      </button>
      <div class="collapse" id="wtfLayouts">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-layout-text">
            <?php include(SITE_ROOT . '/components/nav/layouts.php'); ?>

          </ul>
        </div> <!-- card-body -->
      </div> <!-- collapse -->
    </div>

    <!-- Designs Dev -->
    <div class="py-2">
      <button class="btn btn-primary w-100 py-2" id="bd-theme-design" type="button" aria-expanded="true" data-bs-toggle="collapse" data-bs-target="#wtfThemeDesign" aria-label="wtf Theme Design Options">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-code"></use>
        </svg>
        <span id="bd-theme-design-text">Designs <span class="badge text-bg-primary">Dev</span></span>
      </button>
      <div class="collapse" id="wtfThemeDesign">
        <div class="card card-nav">
          <ul class="nav" aria-labelledby="bd-theme-design-text">
            <?php include(SITE_ROOT . '/components/nav/designs-dev.php'); ?>
          </ul>

        </div>
      </div> <!-- collapse -->
    </div>
