<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/products/wtf-brand/" />

</head>

<body id="wtfTheme" class="wtf-line">

  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>

  <main>
    <?php //include(SITE_ROOT . '/products/wtf-solo/section.php'); 
    include(SITE_ROOT . '/layouts/products/wtf-brand/wtf-brand.php');?>
  </main>

  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>