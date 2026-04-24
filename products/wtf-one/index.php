<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <?php
  include('../../config.php'); // Include your config first
  include(SITE_ROOT . '/head.php'); ?>
  <link rel="canonical" href="http://localhost/wtf-library/layouts/wtf-one/" />

  <meta name="theme-color" content="#00A19A" />
  <!-- <link href="sign-in.css" rel="stylesheet" />-->

</head>

<body id="wtfTheme" class="wtf-wtf">

<!--
<header id="wtfHeader" class="<?php include(SITE_ROOT . '/components/content/demo/container-class.php'); ?> bd-gutter flex-wrap flex-lg-nowrap">

</header>-->
  <?php include(SITE_ROOT . '/components/header/wtf-theme.php'); ?>
 
  <main>
     <?php include(SITE_ROOT . '/products/wtf-core/wtf-core-start.php'); ?>
     <?php include(SITE_ROOT . '/products/wtf-one/wtf-one.php'); ?>
    <?php include(SITE_ROOT . '/products/wtf-core/wtf-core-end.php'); ?>
  </main>



  <?php include(SITE_ROOT . '/components/footer/wtf-theme.php'); ?>
</body>

</html>