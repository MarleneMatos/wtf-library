<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/album/" />
  <meta name="theme-color" content="#00A19A" />

</head>

<body id="wtfTheme" class="wtf-line">
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main>
    <?php include(SITE_ROOT . '/components/heroes/wtf-secondary.php'); ?>
    <?php include(SITE_ROOT . '/layouts/album/section.php'); ?>
  </main>


  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>