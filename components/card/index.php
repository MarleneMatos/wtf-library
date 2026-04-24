<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
</head>

<body id="wtfTheme" class="wtf-line">
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main>
    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="image-cards">
      <h3 class="h1 wtf">Cards</h3>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card.php'); ?>
        </div>
      </div>
    </div>

    <hr class="xl" />

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="image-cards">
      <h3 class="h1 wtf">Cards Featured</h3>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-featured.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-featured.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-featured.php'); ?>
        </div>
      </div>
    </div>

    <hr class="xl" />

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="image-cards">
      <h3 class="h1 wtf">Image top cards</h3>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image-top.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image-top.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image-top.php'); ?>
        </div>
      </div>
    </div>

    <hr class="xl" />


    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="image-cards">
      <h3 class="h1 wtf">Image cards</h3>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-image.php'); ?>
        </div>

      </div>
    </div>

    <hr class="xl" />


    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="price-cards">
      <h3 class="h1 wtf">Price cards</h3>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center py-5">

        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-price.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-price.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-price-featured.php'); ?>
        </div>

      </div>
    </div>

    <hr class="xl" />


    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="album-cards">
      <h3 class="h1 wtf">Album cards</h3>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center py-5">

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

    <hr class="xl" />

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="service-cards">
      <h3 class="h1 wtf">Service cards</h3>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center py-5">

        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-service.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-service.php'); ?>
        </div>
        <div class="col">
          <?php include(SITE_ROOT . '/components/card/card-service.php'); ?>
        </div>

      </div>
    </div>


    <hr class="xl" />

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="service-cards">
      <h3 class="h1 wtf">Service cards with products</h3>
      <form class="form" action="">
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center py-5">

          <div class="col">
            <?php include(SITE_ROOT . '/components/card/card-product.php'); ?>
          </div>
          <div class="col">
            <?php include(SITE_ROOT . '/components/card/card-product.php'); ?>
          </div>
          <div class="col">
            <?php include(SITE_ROOT . '/components/card/card-product.php'); ?>
          </div>

        </div>
      </form>
    </div>

  </main>
  <?php
  include(SITE_ROOT . '/footer.php');
  ?>
</body>

</html>