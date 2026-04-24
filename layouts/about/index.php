<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/about/" />

</head>

<body id="wtfTheme" class="wtf-line d-flex align-items-center py-4 bg-body-tertiary">

  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main class="w-100 m-auto">
  <?php include(SITE_ROOT . '/components/hero/wtf-theme-secondary.php'); ?>
  <?php include(SITE_ROOT . '/layouts/about/section.php'); ?>


  </main>

  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>