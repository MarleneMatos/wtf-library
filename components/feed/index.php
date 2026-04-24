<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/components/feeds/" />
</head>

<body id="wtfTheme" class="wtf-line">
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main>
    <!--
      <h1 class="visually-hidden">Feeds examples</h1>-->

    <div class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> px-4 py-5" id="feeds">
      <h2 class="h1 wtf">Feeds</h2>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php include(SITE_ROOT . '/components/feeds/feeds-image.php'); ?>
      </div>
    </div>

  </main>
  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>