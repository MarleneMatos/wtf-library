<!-- Brand Colour -->
<div class="accordion accordion-flush" id="accordionWtfThemeOptions">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfBrandColours" aria-expanded="true" aria-controls="wtfBrandColours">
        <?php include(SITE_ROOT . '/components/content/brand/nav-logo.php'); ?><span id="bd-theme-text">You Colour</span>
      </button>
    </h2>
    <div id="wtfBrandColours" class="placeholder-glow accordion-collapse collapse show"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <?php include(SITE_ROOT . '/components/form/wtf-theme-colour.php'); ?>
      </div>
    </div>
  </div>


  <!-- Designs -->
  <!--
  <div class="accordion-item">
    <h2 class="accordion-header placeholder-glow">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfThemeDesign" aria-expanded="false" aria-controls="wtfThemeDesign">
        <?php // include(SITE_ROOT . '/components/content/brand/nav-logo.php'); 
        ?><span id="bd-theme-text">Designs</span>
      </button>
    </h2>
    <div id="wtfThemeDesign" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body placeholder-glow">
        <ul class="nav" aria-labelledby="bd-theme-text">
          <?php // include(SITE_ROOT . '/components/nav/designs.php'); 
          ?>
        </ul>
      </div>
    </div>
  </div> -->

  <!-- Colours -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfThemeColours" aria-expanded="false"
        aria-controls="wtfThemeColours">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
        </svg><span id="bd-theme-text">Colour Mode</span>
      </button>
    </h2>
    <div id="wtfThemeColours" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="nav" aria-labelledby="bd-theme-text">
          <?php include(SITE_ROOT . '/components/nav/colour-mode.php'); ?>
        </ul>
      </div>
    </div>
  </div>

  <!--Products -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfProducts" aria-expanded="false"
        aria-controls="wtfProducts">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-shopping-cart"></use>
        </svg><span id="bd-theme-text">Products</span>
      </button>
    </h2>
    <div id="wtfProducts" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="nav" aria-labelledby="bd-theme-text">
<?php include(SITE_ROOT . '/components/nav/products.php'); ?>
        </ul>
      </div>
    </div>
  </div>

  <!--Components -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfThemeComponents" aria-expanded="false"
        aria-controls="wtfThemeComponents">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-archive"></use>
        </svg>
        <span>Components</span>
      </button>
    </h2>
    <div id="wtfThemeComponents" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="row nav">
          <?php include(SITE_ROOT . '/components/nav/components.php'); ?>
        </ul>
      </div>
    </div>
  </div>

  <!--Layouts -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfLayouts" aria-expanded="false"
        aria-controls="wtfLayouts">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-layers"></use>
        </svg>
        <span id="bd-layout-text">Layouts</span>
      </button>
    </h2>
    <div id="wtfLayouts" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="nav" aria-labelledby="bd-layout-text">
          <?php include(SITE_ROOT . '/components/nav/layouts.php'); ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Designs Dev -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#wtfThemeDesign" aria-expanded="false"
        aria-controls="wtfThemeDesign">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-code"></use>
        </svg><span id="bd-theme-design-text">Designs <span class="badge text-bg-primary">Dev</span></span>
      </button>
    </h2>
    <div id="wtfThemeDesign" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="nav" aria-labelledby="bd-theme-text">
          <?php include(SITE_ROOT . '/components/nav/designs-dev.php'); ?>
        </ul>
      </div>
    </div>
  </div>



  <!--
 <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseThree" aria-expanded="false"
        aria-controls="collapseThree">
        <svg class="wtfi me-2" aria-hidden="true">
          <use href="../../../wtf-library/wtf-theme-assets/icons/icomoon-entypoPlus/sprite.svg#icon-colours"></use>
        </svg><span id="bd-theme-text">Colours</span>
      </button>
    </h2>
    <div id="collapseThree" class="placeholder-glow accordion-collapse collapse"
      data-bs-parent="#accordionWtfThemeOptions">
      <div class="accordion-body">
        <ul class="nav" aria-labelledby="bd-theme-text">

        </ul>
      </div>
    </div>
  </div>
-->
</div>