<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/album/" />

</head>

<body id="wtfTheme" class="wtf-line">
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>



  <main>
    <?php include(SITE_ROOT . '/components/heroes/wtf-secondary.php'); ?>
    <div id="album" class="bg-body-tertiary">
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


  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>